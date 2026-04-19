<?php

namespace Database\Seeders;

use App\Permissions\Permissions;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $superAdmin = Role::query()->create([
            'name' => 'Super Admin'
        ]);
        $admin = Role::query()->create([
            'name' => 'Admin'
        ]);
        $hr = Role::query()->create([
            'name' => 'HR'
        ]);


        $superAdmin->syncPermissions([
            Permissions::VIEW_DEFAULT_PAGES,
            Permissions::VIEW_LOGS_PAGE,
            Permissions::MANAGE_USERS,
            Permissions::MANAGE_EMPLOYEES,
            Permissions::MANAGE_STATUS,
            Permissions::MANAGE_CONTRACT_TYPE,
            Permissions::MANAGE_POSITION,
            Permissions::MANAGE_CONTRACT,
            Permissions::MANAGE_SALARY
        ]);

        $admin->syncPermissions([
            Permissions::VIEW_DEFAULT_PAGES,
            Permissions::MANAGE_EMPLOYEES,
            Permissions::MANAGE_STATUS,
            Permissions::MANAGE_CONTRACT_TYPE,
            Permissions::MANAGE_POSITION,
            Permissions::MANAGE_CONTRACT,
            Permissions::MANAGE_SALARY
        ]);

        $hr->syncPermissions([
            Permissions::VIEW_DEFAULT_PAGES,
            Permissions::MANAGE_EMPLOYEES,
            Permissions::MANAGE_CONTRACT,
            Permissions::MANAGE_SALARY
        ]);
    }
}
