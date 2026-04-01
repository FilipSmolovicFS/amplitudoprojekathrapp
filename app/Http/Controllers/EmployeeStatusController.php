<?php

namespace App\Http\Controllers;

use App\Models\EmployeeStatus;
use App\Http\Requests\StoreEmployeeStatusRequest;
use App\Http\Requests\UpdateEmployeeStatusRequest;
use App\Service\EmployeeStatusService;

class EmployeeStatusController extends Controller
{
    protected $employeeStatusService;

    public function __construct(EmployeeStatusService $employeeStatusService)
    {
        $this->employeeStatusService = $employeeStatusService;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employeeStatuses = $this->employeeStatusService->index();
        return view('status.index', compact('employeeStatuses'));
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
    public function store(StoreEmployeeStatusRequest $request)
    {
        if(!$this->employeeStatusService->createNewStatus($request->validated()))
        {
            return redirect()->back()->with('error', 'Failed to create employee status.');
        }

        return redirect()->back()->with('success', 'Employee status created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(EmployeeStatus $status)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(EmployeeStatus $status)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEmployeeStatusRequest $request, EmployeeStatus $status)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(EmployeeStatus $status)
    {
        if (!$this->employeeStatusService->deleteStatus($status)) {
            return redirect()->back()->with('error', 'Failed to delete status. It may be associated with existing employee.');
        }

        return redirect()->back()->with('success', 'Employee status deleted successfully.');
    }
}
