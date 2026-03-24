<?php

namespace App\Filament\Resources\Employees\Pages;

use App\Filament\Resources\Employees\EmployeeResource;
use Filament\Resources\Pages\CreateRecord;

class CreateEmployee extends CreateRecord
{
    protected static string $resource = EmployeeResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {

        if (!empty($data['contract'])) {

            $firstContract = reset($data['contract']);

            if (isset($firstContract['started_at'])) {
                $data['started_at'] = $firstContract['started_at'];
            }
        }

        return $data;
    }
}
