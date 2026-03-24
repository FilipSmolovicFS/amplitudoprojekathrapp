<?php

namespace App\Service;

use App\Models\Contract;
use App\Models\ContractType;

class ContractTypeService
{
    public function getContractType()
    {
        return ContractType::all();
    }

    public function createContractType(array $request)
    {
        ContractType::query()->create([
            'name' => $request['contractType']
        ]);
    }

    public function deleteContractType(Contract $contract)
    {
        $contractType->delete();
    }
}
