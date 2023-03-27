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
            'role-show',
            'position-list',
            'position-edit',
            'position-create',
            'position-delete',
            'position-show',
            'employee-list',
            'employee-edit',
            'employee-create',
            'employee-delete',            
            'employee-show',            
            'leave-list',
            'leave-create',
            'leave-edit',
            'leave-delete',
            'leave-show',
            

        ];

        foreach($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }
    }
}
