<?php

namespace App\Service;

use App\Models\ContractType;
use App\Models\Employee;
use App\Models\EmployeeStatus;
use App\Models\Position;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class EmployeeService
{

    public function getEmployees(array $request)
    {


        $query = Employee::query()->with(['status', 'contract', 'contract.document', 'position']);

        $query->when($request['statuses'] ?? null, function($query, $status){
            return $query->whereIn('employees.status_id', (array) $status);
        });

        $query->when($request['contractTypes'] ?? null, function($query, $contractTypes) {
            return $query->whereHas('contract', function($q) use ($contractTypes) {
                $q->whereIn('contract_type_id', (array) $contractTypes);
            });
        });

        $query->when($request['positions'] ?? null, function ($query) use ($request) {
            $query->whereHas('position', function ($q) use ($request) {
                $q->whereIn('id', (array) $request['positions']);
            });
        });

        $query->when($request['search'] ?? null, function($q, $searchTerm) {
            return $q->where(function($sub) use ($searchTerm) {
                $sub->where('first_name', 'LIKE', "%{$searchTerm}%")
                    ->orWhere('last_name', 'LIKE', "%{$searchTerm}%");
            });
        });

        $daysMap = [
            0 => 15,
            1 => 30,
            2 => 90,
        ];

        $query->when(!empty($request['expireContract']) && is_array($request['expireContract']), function ($query) use ($request, $daysMap) {

            $selectedDays = [];

            foreach ($request['expireContract'] as $key) {
                if (isset($daysMap[$key])) {
                    $selectedDays[] = $daysMap[$key];
                }
            }

            if (empty($selectedDays)) {
                return;
            }

            $maxDays = max($selectedDays);

            $query->whereHas('contract', function ($q) use ($maxDays) {
                $q->where('ended_at', '>', now())
                    ->where('ended_at', '<=', now()->addDays($maxDays));
            });
        });

        $perPage = empty($request['per_page']) ? 10 : $request['per_page'];

        return $query->paginate($perPage);
    }


    public function getFormOptions(): array
    {

        $contractType = ContractType::query()->pluck('contract_types.name', 'contract_types.id')->toArray();

        $positions = Position::query()->pluck('positions.name', 'positions.id')->toArray();

        $employeeStatus = EmployeeStatus::query()->pluck('employee_statuses.name', 'employee_statuses.id')->toArray();

        return [
            'contractType' => $contractType,
            'positions' => $positions,
            'employeeStatus' => $employeeStatus,
        ];

    }

    public function createNewEmployee(array $newEmployeeData): bool
    {
        return DB::transaction(function () use ($newEmployeeData) {
            try {
                $newEmployee = Employee::query()->create([
                    'first_name' => $newEmployeeData['first_name'],
                    'last_name' => $newEmployeeData['last_name'],
                    'email' => $newEmployeeData['email'],
                    'started_at' => $newEmployeeData['contracts'][0]['started_at'],
                    'status_id' => $newEmployeeData['status'],
                    'position_id' => $newEmployeeData['position'],
                    'phone_number' => $newEmployeeData['phone_number'],
                    'date_of_birth' => $newEmployeeData['date_of_birth'],
                    'jmbg' => $newEmployeeData['jmbg'],
                    'address' => $newEmployeeData['address'],
                    'gender' => $newEmployeeData['gender'] === 1 ? 'Male' : 'Female'
                ]);

                $newEmployee->salary()->create([
                    'current_amount' => $newEmployeeData['salary']
                ]);

                foreach ($newEmployeeData['contracts'] as $contractData) {
                    $contract = $newEmployee->contract()->create([
                        'contract_type_id' => $contractData['contract_type_id'],
                        'started_at' => $contractData['started_at'],
                        'ended_at' => $contractData['ended_at']
                    ]);

                    if (isset($contractData['document']) && $contractData['document']->isValid()) {
                        $file = $contractData['document'];
                        $originalName = $file->getClientOriginalName();
                        $fileName = time() . '_' . $originalName;

                        $path = $file->storeAs('contract-type', $fileName, 'public');

                        $contract->document()->create([
                            'file_path' => $path,
                            'file_name' => $originalName,
                        ]);
                    }
                }

                return true;

            } catch (\Exception $e) {
                Log::error('Employee Creation Failed: ' . $e->getMessage());

                return false;
            }
        });
    }

    public function getStatusesAndPositionsAndContractTypes()
    {
        return [
            'statuses' => EmployeeStatus::all()->pluck('name', 'id')->toArray(),
            'positions' => Position::all()->pluck('name', 'id')->toArray(),
            'contractTypes' => ContractType::all()->pluck('name', 'id')->toArray(),
            'expireContract' => [15,30,90]
        ];
    }

    public function updateEmployee(array $updateUserData, Employee $employee)
    {
        return DB::transaction(function() use ($updateUserData, $employee)
        {
            try {
                $newSalary = $updateUserData['salary'];
                $currentSalary = $employee->salary->current_amount;

                $employee->update([
                    'first_name' => $updateUserData['first_name'],
                    'last_name' => $updateUserData['last_name'],
                    'email' => $updateUserData['email'],
                    'position_id' => $updateUserData['position'],
                    'status_id' => $updateUserData['status'],
                    'phone_number' => $updateUserData['phone_number'],
                    'date_of_birth' => $updateUserData['date_of_birth'],
                    'address' => $updateUserData['address'],
                    'JMBG' => $updateUserData['jmbg'],
                    'gender' => $updateUserData['gender'],

                ]);

                if ($newSalary != $currentSalary) {

                    $salaryData = ['current_amount' => $newSalary];

                    if ($newSalary > $currentSalary) {
                        $salaryData['last_raise'] = now();
                    }

                    $employee->salary()->update($salaryData);

                    $employee->salary->salaryHistory()->create([
                        'amount' => $newSalary,
                    ]);
                }

                return true;

            }catch (\Exception $e) {
                Log::error('Employee Creation Failed: ' . $e->getMessage());

                return false;
            }
        });
    }

    public function getSalaryHistory(Employee $employee)
    {
        return $employee->salary->salaryHistory()->paginate(5);
    }

    public function deleteEmployee(Employee $employee): bool
    {
        try {
            return (bool) $employee->delete();
        } catch (\Exception $e) {
            Log::error("Failed to delete employee {$employee->id}: " . $e->getMessage());
            return false;
        }
    }

}
