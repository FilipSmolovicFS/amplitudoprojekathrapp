<?php

namespace Database\Seeders;

use App\Models\Position;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PositionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $positions = [
            'Junior Full-Stack Developer',
            'Senior Backend Engineer',
            'UI/UX Designer',
            'Frontend Architect (React/Vue)',
            'Mobile App Developer (iOS/Android)',
            'DevOps Engineer',
            'Site Reliability Engineer (SRE)',
            'QA Automation Engineer',
            'Data Scientist',
            'Machine Learning Engineer',
            'Data Warehouse Architect',
            'Business Intelligence Analyst',
            'Product Manager',
            'Technical Product Owner',
            'Solutions Architect',
            'Cybersecurity Analyst',
            'Cloud Infrastructure Engineer',
            'Database Administrator (DBA)'

        ];


        foreach ($positions as $position) {
            Position::query()->create(['name' => $position]);
        }
    }
}
