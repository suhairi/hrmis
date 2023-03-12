<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
            'role-list',
            'role-create',
            'role-edit',
            'role-delete',
            'product-list',
            'product-edit',
            'product-create',
            'product-delete',
            'employee-list',
            'employee-edit',
            'employee-create',
            'employee-delete',
            'position-list',
            'position-edit',
            'position-create',
            'position-delete',
            'leave-list',
            'leave-create',
            'leave-edit',
            'leave-delete',
            

        ];

        foreach($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }
    }
}
