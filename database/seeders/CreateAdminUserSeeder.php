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
        // User 
        $user = User::create([
            'name'      => 'Admin HRMIS PIP',
            'email'     => 'hrmis.pip@gmail.com',
            'password'  => bcrypt('Password.123'),
        ]);

        $user = User::create([
            'name'      => 'A1 - Arau',
            'email'     => 'a1@mada.gov.my',
            'password'  => bcrypt('password'),
        ]);

        $user = User::create([
            'name'      => 'B1 - Kayang',
            'email'     => 'b1@mada.gov.my',
            'password'  => bcrypt('password'),
        ]);

        $user = User::create([
            'name'      => 'C1 - Kangar',
            'email'     => 'c1@mada.gov.my',
            'password'  => bcrypt('password'),
        ]);

        $user = User::create([
            'name'      => 'D1 - Tambun Tulang',
            'email'     => 'd1@mada.gov.my',
            'password'  => bcrypt('password'),
        ]);

        $user = User::create([
            'name'      => 'E1 -Simpang Empat',
            'email'     => 'e1@mada.gov.my',
            'password'  => bcrypt('password'),
        ]);

        $user = User::create([
            'name'      => 'A2 -Kodiang',
            'email'     => 'a2@mada.gov.my',
            'password'  => bcrypt('password'),
        ]);

        $user = User::create([
            'name'      => 'B2 -Kodiang',
            'email'     => 'b2@mada.gov.my',
            'password'  => bcrypt('password'),
        ]);

        $user = User::create([
            'name'      => 'C2 - Kerpan',
            'email'     => 'c2@mada.gov.my',
            'password'  => bcrypt('password'),
        ]);

        $user = User::create([
            'name'      => 'D2 - Tunjang',
            'email'     => 'd2@mada.gov.my',
            'password'  => bcrypt('password'),
        ]);

        $user = User::create([
            'name'      => 'E2 - Kubang Sepat',
            'email'     => 'e2@mada.gov.my',
            'password'  => bcrypt('password'),
        ]);

        $user = User::create([
            'name'      => 'F2 - Jerlun',
            'email'     => 'f2@mada.gov.my',
            'password'  => bcrypt('password'),
        ]);

        $user = User::create([
            'name'      => 'G2 - Jitra',
            'email'     => 'g2@mada.gov.my',
            'password'  => bcrypt('password'),
        ]);

        $user = User::create([
            'name'      => 'H2 - Kepala Batas',
            'email'     => 'h2@mada.gov.my',
            'password'  => bcrypt('password'),
        ]);

        $user = User::create([
            'name'      => 'I2 - Kuala Sungai',
            'email'     => 'i2@mada.gov.my',
            'password'  => bcrypt('password'),
        ]);



        // Role
        $user = User::find(1);
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
