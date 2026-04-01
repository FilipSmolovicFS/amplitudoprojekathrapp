<?php

namespace App\Service;
use App\Models\EmployeeStatus;
use Illuminate\Support\Facades\Log;
use function Symfony\Component\Translation\t;

class EmployeeStatusService
{
    public function index()
    {
        return EmployeeStatus::all();
    }

    public function createNewStatus($data)
    {

        return EmployeeStatus::create([
            'name' => $data['status'],
        ]);
    }

    public function deleteStatus(EmployeeStatus $status)
    {
        if($status->employee()->exists()) {
            return false;
        }

        $status->delete();
        return true;
    }
}
