<?php

namespace App\Service;

use App\Models\Contract;
use App\Models\ContractType;

class   ContractTypeService
{
    public function getContractType()
    {
        return ContractType::all();
    }

    public function createContractType(array $request)
    {
        return ContractType::query()->create([
            'name' => $request['contractType']
        ]);
    }

    public function deleteContractType(ContractType $contractType)
    {
        if($contractType->contract()->exists()) {
            return false;
        }

        $contractType->delete();
        return true;
    }
}
