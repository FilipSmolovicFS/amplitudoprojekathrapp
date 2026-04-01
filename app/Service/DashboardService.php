<?php

namespace App\Service;
use App\Models\Contract;
use App\Models\Employee;
use App\Models\EmployeeStatus;
use App\Models\Position;
use Carbon\Carbon;
use PHPUnit\Logging\OpenTestReporting\Status;

class DashboardService
{

    public function index()
    {
        $employee = Employee::all();

        $employees = $employee->count();

        $activeCount = Employee::query()->active()->count();

        $onLeaveCount = Employee::query()->onLeave()->count();

        $terminatedCount = Employee::query()->terminated()->count();

        $expiringContractsCount = Contract::query()->whereBetween('contracts.ended_at', [Carbon::now(), Carbon::now()->addDay(30)])->count();

        $activeStatus = EmployeeStatus::query()->pluck('id')->all();

        $employeePerPositionCount = Position::query()->withCount('employee')->get();

        return [
            'employeeCount' => $employees,
            'activeCount' => $activeCount,
            'onLeaveCount' => $onLeaveCount,
            'terminatedCount' => $terminatedCount,
            'expiringContractsCount' => $expiringContractsCount,
            'activeStatus' => $activeStatus,
            'positionNames' => $employeePerPositionCount->pluck('name'),
            'positionCounts' => $employeePerPositionCount->pluck('employee_count'),
        ];
    }

}
