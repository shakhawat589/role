<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $perissions = Permission::all();

        Role::updateOrCreate([
            'name' => 'Admin',
            'slug' => 'admin',
            'deletable' => 0
        ])->permission()->sync($perissions->pluck('id'));

        Role::updateOrCreate([
            'name' => 'User',
            'slug' => 'user',
            'deletable' => 0
        ]);
    }
}
