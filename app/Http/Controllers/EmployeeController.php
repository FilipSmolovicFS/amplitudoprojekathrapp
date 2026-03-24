<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Http\Requests\StoreEmployeeRequest;
use App\Http\Requests\UpdateEmployeeRequest;
use App\Service\EmployeeService;
use Illuminate\Http\Request;

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


        return view('employee.index', compact("employees", "statusesAndPositionsAndContractTypes"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $formOptions = $this->employeeService->getFormOptions();

        return view('employee.create', [
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
        $this->employeeService->createNewEmployee($request->validated());

        return redirect()->route('employee.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Employee $employee)
    {
        $salaryHistory = $this->employeeService->getSalaryHistory($employee);

        return view('employee.show', compact('employee', 'salaryHistory'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Employee $employee)
    {
        $statusesAndPositionsAndContractTypes = $this->employeeService->getStatusesAndPositionsAndContractTypes();

        return view('employee.edit' , compact('employee', 'statusesAndPositionsAndContractTypes'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEmployeeRequest $request, Employee $employee)
    {
       $this->employeeService->updateEmployee($request->validated(), $employee);

       return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Employee $employee)
    {
        $employee->delete();

        return redirect()->route('employee.index');
    }
}
