<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class CreateAdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name'      => 'Admin HRMIS PIP',
            'email'     => 'hrmis.pip@gmail.com',
            'password'  => bcrypt('Password.123'),
        ]);

        $role = Role::create(['name' => 'Admin']);
        $permissions = Permission::pluck('id', 'id')->all();
        $role->syncPermissions($permissions);
        $user->assignRole([$role->id]);


        $role = Role::create(['name' => 'PPK']);
        // $permissions = [1,2,3,4];
        // $role->syncPermissions($permissions);

        $role = Role::create(['name' => 'Wilayah']);
        // $permissions = [5,6,7,8];
        // $role->syncPermissions($permissions);

        $role = Role::create(['name' => 'BPIP']);
        // $permissions = [5,6,7,8];
        // $role->syncPermissions($permissions);

        $role = Role::create(['name' => 'BPW']);
        // $permissions = [5,6,7,8];
        // $role->syncPermissions($permissions);

        

        

    }
}
