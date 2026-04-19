<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Http\Requests\StoreEmployeeRequest;
use App\Http\Requests\UpdateEmployeeRequest;
use App\Service\EmployeeService;
use Illuminate\Http\Request;
use Inertia\Inertia;

class EmployeeController extends Controller
{
    protected EmployeeService $employeeService;

    public function __construct(EmployeeService $employeeService)
    {
        $this->employeeService = $employeeService;
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {

        $employees = $this->employeeService->getEmployees($request->query());

        $statusesAndPositionsAndContractTypes = $this->employeeService->getStatusesAndPositionsAndContractTypes();

        return Inertia::render('Employee/Index',[
            'employees' => $employees,
            'statusesAndPositionsAndContractTypes' => $statusesAndPositionsAndContractTypes,
            'query' => $request->query()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $formOptions = $this->employeeService->getFormOptions();

        return Inertia::render('Employee/Create', [
            'contractType' => $formOptions['contractType'],
            'positions' => $formOptions['positions'],
            'employeeStatus' => $formOptions['employeeStatus']
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreEmployeeRequest $request)
    {
        if (!$this->employeeService->createNewEmployee($request->validated()))
        {
            return redirect()->back()->with('error', 'Failed to create employee.');
        }

        return redirect()->route('employee.index')->with('success', 'Employee successfully created');
    }

    /**
     * Display the specified resource.
     */
    public function show(Employee $employee)
    {
        $statusesAndPositionsAndContractTypes = $this->employeeService->getStatusesAndPositionsAndContractTypes();
        $salaryHistory = $this->employeeService->getSalaryHistory($employee);

        return Inertia::render('Employee/Show', [
            'employee' => $employee->load('status', 'position', 'salary', 'contract', 'contract.contractType', 'contract.document'),
            'statusesAndPositionsAndContractTypes' => $statusesAndPositionsAndContractTypes,
            'salaryHistory' => $salaryHistory
        ] );
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Employee $employee)
    {
        $statusesAndPositionsAndContractTypes = $this->employeeService->getStatusesAndPositionsAndContractTypes();

        return Inertia::render('Employee/Edit', [
            'employee' => $employee->load('salary', 'contract', 'contract.document', 'contract.contractType'),
            'statusesAndPositionsAndContractTypes' => $statusesAndPositionsAndContractTypes]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEmployeeRequest $request, Employee $employee)
    {
        if (!$this->employeeService->updateEmployee($request->validated(), $employee)){
            return redirect()->back()->with('error', 'Failed to update employee.');
        }

        return redirect()->route('employee.index')->with('success', 'Employee updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Employee $employee)
    {

        if (!$this->employeeService->deleteEmployee($employee)){
            return redirect()->back()->with('error', 'Failed to delete employee.');
        }

        return redirect()->route('employee.index')->with('success', 'Employee deleted successfully.');
    }
}
