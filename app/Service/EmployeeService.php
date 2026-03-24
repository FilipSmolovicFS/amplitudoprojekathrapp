<?php

namespace App\Service;

use App\Models\Contract;
use App\Models\ContractType;
use App\Models\Employee;
use App\Models\EmployeeStatus;
use App\Models\Position;
use App\Models\Salary;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use PHPUnit\Logging\OpenTestReporting\Status;
use function Pest\Laravel\post;

class EmployeeService
{

    public function getEmployees(array $request)
    {


        $query = Employee::query()->with(['status', 'contract', 'position']);

        $query->when($request['statuses'] ?? null, function($query, $status){
            return $query->whereIn('employees.status_id', (array) $status);
        });

        $query->when($request['contract'] ?? null, function($query, $contract) use ($request) {
            return $query->whereHas('contract', function($q) use ($request) {
                $q->whereIn('contract_type_id', (array) $request['contractTypes']);
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

        $query->when(isset($request['expire']) && isset($daysMap[$request['expire'][0] ?? null]), function ($query) use ($request, $daysMap) {
            $days = $daysMap[$request['expire'][0]];

            $query->whereHas('contract', function ($q) use ($days) {
                $q->where('ended_at', '>', now())
                  ->where('ended_at', '<=', now()->addDays($days));
            });
        });

        return $query->get();
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

    public function createNewEmployee(array $newEmployeeData)
    {

        $newEmployee = Employee::query()->create([
            'first_name' => $newEmployeeData['first_name'],
            'last_name' => $newEmployeeData['last_name'],
            'email' => $newEmployeeData['email'],
            'started_at' => $newEmployeeData['contracts'][0]['started_at'],
            'status_id' => $newEmployeeData['status'],
            'position_id' => $newEmployeeData['position'],

        ]);

        $newEmployee->salary()->create([
            'current_amount' => $newEmployeeData['salary']
        ]);

        foreach ($newEmployeeData['contracts'] as $contractType) {
            $newEmployee->contract()->create([
                'contract_type_id' => $contractType['contract_type_id'],
                'started_at' => $contractType['started_at'],
                'ended_at' => $contractType['ended_at']
            ]);
        }
    }

    public function getStatusesAndPositionsAndContractTypes()
    {
        return [
            'statuses' => EmployeeStatus::all()->pluck('name', 'id')->toArray(),
            'positions' => Position::all()->pluck('name', 'id')->toArray(),
            'contractTypes' => ContractType::all()->pluck('name', 'id')->toArray(),
            'expire' => [15,30,90]
        ];
    }

    public function updateEmployee(array $updateUserData, Employee $employee)
    {

        $newSalary = $updateUserData['salary'];
        $currentSalary = $employee->salary->current_amount;

        $employee->update([
            'first_name' => $updateUserData['first_name'],
            'last_name' => $updateUserData['last_name'],
            'email' => $updateUserData['email'],
            'position_id' => $updateUserData['position'],
            'status_id' => $updateUserData['status']
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



        foreach ($updateUserData['contracts'] as $contractId => $contractData) {
            $employee->contract()->where('id', $contractId)->update([
                'contract_type_id' => $contractData['contract_type_id'],
                'started_at' => $contractData['started_at'],
                'ended_at' => $contractData['ended_at'],
            ]);
        }
    }

    public function getSalaryHistory(Employee $employee)
    {
        return $employee->salary->salaryHistory;
    }

}
