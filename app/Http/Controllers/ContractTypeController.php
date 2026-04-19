<?php

namespace App\Http\Controllers;

use App\Models\ContractType;
use App\Http\Requests\StoreContractTypeRequest;
use App\Http\Requests\UpdateContractTypeRequest;
use App\Service\ContractService;
use App\Service\ContractTypeService;
use Inertia\Inertia;

class ContractTypeController extends Controller
{

    protected $contractTypeService;

    public function __construct(ContractTypeService $contractService)
    {
        $this->contractTypeService = $contractService;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contractType = $this->contractTypeService->getContractType();

        return Inertia::render('ContractType/Index', [
            'contractTypes' => $contractType
        ]);
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
    public function store(StoreContractTypeRequest $request)
    {
        if (!$this->contractTypeService->createContractType($request->validated()))
        {
            return redirect()->back()->with('error', 'Failed to create contract type.');
        }

        return redirect()->back()->with('success', 'ContractType type created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(ContractType $contractType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ContractType $contractType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateContractTypeRequest $request, ContractType $contractType)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ContractType $contractType)
    {
        if (!$this->contractTypeService->deleteContractType($contractType))
        {
            return redirect()->back()->with('error', 'Failed to delete contract type. It may be associated with existing contracts.');
        }

        return redirect()->back()->with('success', 'ContractType type deleted successfully.');

    }
}
