<?php

namespace Database\Seeders;

use App\Models\ContractType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContractTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ContractType::query()->create([
            'name'=>'Full Time'
            ]
        );
        ContractType::query()->create([
                'name'=>'Part Time'
            ]
        );
        ContractType::query()->create([
                'name'=>'Contractor'
            ]
        );
    }
}
