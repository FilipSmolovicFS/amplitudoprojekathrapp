<?php

namespace App\Service;
use App\Models\Contract;
use App\Models\Employee;
use Carbon\Carbon;

class DashboardService
{

    public function index()
    {
        $employee = Employee::all();

        $employees = $employee->count();

        $activeCount = Employee::query()->active()->count();

        $onLeaveCount = Employee::query()->onLeave()->count();

        $expiringContractsCount = Contract::query()->whereBetween('contracts.ended_at', [Carbon::now(), Carbon::now()->addDay(30)])->count();

        return [
            'employeeCount' => $employees,
            'activeCount' => $activeCount,
            'onLeaveCount' => $onLeaveCount,
            'expiringContractsCount' => $expiringContractsCount
        ];
    }

}
