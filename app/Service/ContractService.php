<?php

namespace App\Service;
use App\Models\Contract;
use App\Models\ContractType;
use App\Models\Employee;
use App\Models\Documents;
use Illuminate\Http\Request;
use Storage;
use function RectorPrefix202603\React\Promise\all;

class ContractService
{

    public function deleteContract(Contract $contract)
    {
        $contract->delete();

        Storage::disk('public')->delete($contract->document->file_path);
    }

    public function updateEmployeeContract(array $data, Contract $contract)
    {
        if (isset($data['contract-document'])) {
            if ($contract->document) {
                Storage::delete($contract->document->file_path);
                $contract->document()->delete();
            }

            $path = $data['contract-document']->store('contract-type', 'public');

            $contract->document()->create([
                'file_name' => $data['contract-document']->getClientOriginalName(),
                'file_path' => $path,
            ]);
        }
        $contract->update(collect($data)->except('contract-document')->toArray());
    }

    public function createNewContract(array $contractData)
    {

        $employee = Employee::query()->where('id', $contractData['employee_id'])->first();

        $contracts = $employee->contract()->create([
            'contract_type_id' => $contractData['contract_type_id'],
            'started_at' => $contractData['started_at'],
            'ended_at' => $contractData['ended_at']
        ]);

        $file = $contractData['contracts_document'];
        $name = $file->getClientOriginalName();
        $fileName = time() . '_' . $name;

        $path = $file->storeAs('contract-type', $fileName, 'public');

        $contracts->document()->create([
            'file_path' => $path,
            'file_name' => $name,
        ]);
    }

    public function download($documentId)
    {
        $document = Documents::findOrFail($documentId);

        return Storage::disk('public')->download(
            $document->file_path,
            $document->file_name
        );
    }
}
