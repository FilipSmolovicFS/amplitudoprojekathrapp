<?php

namespace App\Http\Controllers;

use App\Models\ContractType;
use App\Http\Requests\StoreContractTypeRequest;
use App\Http\Requests\UpdateContractTypeRequest;
use App\Service\ContractService;
use App\Service\ContractTypeService;

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

        return view('contracts.index', compact('contractType'));
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
        $this->contractTypeService->createContractType($request->validated());

        return redirect()->back();
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
        $this->contractTypeService->deleteContractType($contractType);
    }
}
