<?php

namespace App\Http\Controllers;

use App\Service\DashboardService;
use Illuminate\Http\Request;
use Inertia\Inertia;

class DashboardController extends Controller
{
    protected DashboardService $dashboardService;


    public function __construct(DashboardService $dashboardService)
    {
        $this->dashboardService = $dashboardService;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employee_count = $this->dashboardService->index();

        return Inertia::render("Dashboard/Index", [
            'employeeCount' => $employee_count['employeeCount'],
            'activeCount' => $employee_count['activeCount'],
            'onLeaveCount' => $employee_count['onLeaveCount'],
            'terminatedCount' => $employee_count['terminatedCount'],
            'expiringContractsCount' => $employee_count['expiringContractsCount'],
            'activeStatus' => $employee_count['activeStatus'],
            'positionNames' => $employee_count['positionNames'],
            'positionCounts' => $employee_count['positionCounts'],
        ]);
/*        return view('dashboard', [
                'employeeCount' => $employee_count['employeeCount'],
                'activeCount' => $employee_count['activeCount'],
                'onLeaveCount' => $employee_count['onLeaveCount'],
                'terminatedCount' => $employee_count['terminatedCount'],
                'expiringContractsCount' => $employee_count['expiringContractsCount'],
                'activeStatus' => $employee_count['activeStatus'],
                'positionNames' => $employee_count['positionNames'],
                'positionCounts' => $employee_count['positionCounts'],
            ]);*/
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
