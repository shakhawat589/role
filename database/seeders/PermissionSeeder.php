<?php

namespace Database\Seeders;

use App\Models\Modules;
use App\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dashboardAccess = Modules::updateOrCreate(['name' => 'Access Dashboard']);

        Permission::updateOrCreate([
            'module_id' => $dashboardAccess->id,
            'name' => 'Access Dashboard',
            'slug' => 'app.index'
        ]);

        $roleAccess = Modules::updateOrCreate(['name' => 'Access Roles']);

        Permission::updateOrCreate([
            'module_id' => $roleAccess->id,
            'name' => 'Access Role',
            'slug' => 'app.role.index'
        ]);
        Permission::updateOrCreate([
            'module_id' => $roleAccess->id,
            'name' => 'Create Role',
            'slug' => 'app.role.create'
        ]);
        Permission::updateOrCreate([
            'module_id' => $roleAccess->id,
            'name' => 'Edit Role',
            'slug' => 'app.role.edit'
        ]);
        Permission::updateOrCreate([
            'module_id' => $roleAccess->id,
            'name' => 'Delete Role',
            'slug' => 'app.role.delete'
        ]);

        $userAccess = Modules::updateOrCreate(['name' => 'Access User']);

        Permission::updateOrCreate([
            'module_id' => $userAccess->id,
            'name' => 'Access User',
            'slug' => 'app.user.index'
        ]);
        Permission::updateOrCreate([
            'module_id' => $userAccess->id,
            'name' => 'Create User',
            'slug' => 'app.user.create'
        ]);
        Permission::updateOrCreate([
            'module_id' => $userAccess->id,
            'name' => 'Edit User',
            'slug' => 'app.user.edit'
        ]);
        Permission::updateOrCreate([
            'module_id' => $userAccess->id,
            'name' => 'Delete User',
            'slug' => 'app.user.delete'
        ]);
    }
}
