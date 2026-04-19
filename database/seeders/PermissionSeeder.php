<?php

namespace Database\Seeders;

use App\Models\User;
use Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Permissions\Permissions;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Permission::firstOrCreate([
            'name' =>   Permissions::VIEW_DEFAULT_PAGES,
            'guard_name' => 'web'
        ]);
        Permission::firstOrCreate([
            'name' => Permissions::VIEW_LOGS_PAGE,
            'guard_name' => 'web'
        ]);
        Permission::firstOrCreate([
            'name' => Permissions::MANAGE_USERS,
            'guard_name' => 'web'
        ]);
        Permission::firstOrCreate([
            'name' => Permissions::MANAGE_EMPLOYEES,
            'guard_name' => 'web'
        ]);
        Permission::firstOrCreate([
            'name' => Permissions::MANAGE_STATUS,
            'guard_name' => 'web'
        ]);
        Permission::firstOrCreate([
            'name' => Permissions::MANAGE_CONTRACT_TYPE,
            'guard_name' => 'web'
        ]);
        Permission::firstOrCreate([
            'name' => Permissions::MANAGE_POSITION,
            'guard_name' => 'web'
        ]);
        Permission::firstOrCreate([
            'name' => Permissions::MANAGE_CONTRACT,
            'guard_name' => 'web'
        ]);
        Permission::firstOrCreate([
            'name' => Permissions::MANAGE_SALARY,
            'guard_name' => 'web'
        ]);
    }
}
