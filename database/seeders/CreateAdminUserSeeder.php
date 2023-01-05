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
            'name'      => 'Super Admin',
            'email'     => 'hrmis.pip@gmail.com',
            'location'  => "HQ",
            'password'  => bcrypt('password'),
        ]);

        $user = User::create([
            'name'      => 'BPIP',
            'email'     => 'bpip@gmail.com',
            'location'  => "HQ",
            'password'  => bcrypt('password'),
        ]);

        $user = User::create([
            'name'      => 'BPW',
            'email'     => 'bpw@gmail.com',
            'location'  => "HQ",
            'password'  => bcrypt('password'),
        ]);

        $user = User::create([
            'name'      => 'Wilayah 1',
            'email'     => 'w1@gmail.com',
            'location'  => 'WILAYAH',
            'password'  => bcrypt('password'),
        ]);

        $user = User::create([
            'name'      => 'Wilayah 2',
            'email'     => 'w2@gmail.com',
            'location'  => 'WILAYAH',
            'password'  => bcrypt('password'),
        ]);

        $user = User::create([
            'name'      => 'Wilayah 4',
            'email'     => 'w3@gmail.com',
            'location'  => 'WILAYAH',
            'password'  => bcrypt('password'),
        ]);

        $user = User::create([
            'name'      => 'Wilayah 4',
            'email'     => 'w4@gmail.com',
            'location'  => 'WILAYAH',
            'password'  => bcrypt('password'),
        ]);
    

        $user = User::create([
            'name'      => 'A1 - Arau',
            'location'  => 'PPK',
            'email'     => 'a1@mada.gov.my',
            'password'  => bcrypt('password'),
        ]);

        $user = User::create([
            'name'      => 'B1 - Kayang',
            'location'  => 'PPK',
            'email'     => 'b1@mada.gov.my',
            'password'  => bcrypt('password'),
        ]);

        $user = User::create([
            'name'      => 'C1 - Kangar',
            'location'  => 'PPK',
            'email'     => 'c1@mada.gov.my',
            'password'  => bcrypt('password'),
        ]);

        $user = User::create([
            'name'      => 'D1 - Tambun Tulang',
            'location'  => 'PPK',
            'email'     => 'd1@mada.gov.my',
            'password'  => bcrypt('password'),
        ]);

        $user = User::create([
            'name'      => 'E1 -Simpang Empat',
            'location'  => 'PPK',
            'email'     => 'e1@mada.gov.my',
            'password'  => bcrypt('password'),
        ]);

        $user = User::create([
            'name'      => 'A2 -Kodiang',
            'location'  => 'PPK',
            'email'     => 'a2@mada.gov.my',
            'password'  => bcrypt('password'),
        ]);

        $user = User::create([
            'name'      => 'B2 -Kodiang',
            'location'  => 'PPK',
            'email'     => 'b2@mada.gov.my',
            'password'  => bcrypt('password'),
        ]);

        $user = User::create([
            'name'      => 'C2 - Kerpan',
            'location'  => 'PPK',
            'email'     => 'c2@mada.gov.my',
            'password'  => bcrypt('password'),
        ]);

        $user = User::create([
            'name'      => 'D2 - Tunjang',
            'location'  => 'PPK',
            'email'     => 'd2@mada.gov.my',
            'password'  => bcrypt('password'),
        ]);

        $user = User::create([
            'name'      => 'E2 - Kubang Sepat',
            'location'  => 'PPK',
            'email'     => 'e2@mada.gov.my',
            'password'  => bcrypt('password'),
        ]);

        $user = User::create([
            'name'      => 'F2 - Jerlun',
            'location'  => 'PPK',
            'email'     => 'f2@mada.gov.my',
            'password'  => bcrypt('password'),
        ]);

        $user = User::create([
            'name'      => 'G2 - Jitra',
            'location'  => 'PPK',
            'email'     => 'g2@mada.gov.my',
            'password'  => bcrypt('password'),
        ]);

        $user = User::create([
            'name'      => 'H2 - Kepala Batas',
            'location'  => 'PPK',
            'email'     => 'h2@mada.gov.my',
            'password'  => bcrypt('password'),
        ]);

        $user = User::create([
            'name'      => 'I2 - Kuala Sungai',
            'location'  => 'PPK',
            'email'     => 'i2@mada.gov.my',
            'password'  => bcrypt('password'),
        ]);

        $user = User::create([
            'name'      => 'A3 - Hutan Kampong',
            'location'  => 'PPK',
            'email'     => 'a3@mada.gov.my',
            'password'  => bcrypt('password'),
        ]);

        $user = User::create([
            'name'      => 'B3 - Alor Senibong',
            'location'  => 'PPK',
            'email'     => 'b3@mada.gov.my',
            'password'  => bcrypt('password'),
        ]);

        $user = User::create([
            'name'      => 'C3 - Tajar',
            'location'  => 'PPK',
            'email'     => 'c3@mada.gov.my',
            'password'  => bcrypt('password'),
        ]);

        $user = User::create([
            'name'      => 'D3 - Titi Haji Idris',
            'location'  => 'PPK',
            'email'     => 'd3@mada.gov.my',
            'password'  => bcrypt('password'),
        ]);

        $user = User::create([
            'name'      => 'E3 - Kobah',
            'location'  => 'PPK',
            'email'     => 'e3@mada.gov.my',
            'password'  => bcrypt('password'),
        ]);

        $user = User::create([
            'name'      => 'F3 - Pendang',
            'location'  => 'PPK',
            'email'     => 'f3@mada.gov.my',
            'password'  => bcrypt('password'),
        ]);

        $user = User::create([
            'name'      => 'A4 - Batas Paip',
            'location'  => 'PPK',
            'email'     => 'a4@mada.gov.my',
            'password'  => bcrypt('password'),
        ]);

        $user = User::create([
            'name'      => 'B4 - Pengkalan Kundor',
            'location'  => 'PPK',
            'email'     => 'b4@mada.gov.my',
            'password'  => bcrypt('password'),
        ]);

        $user = User::create([
            'name'      => 'C4 - Kangkong',
            'location'  => 'PPK',
            'email'     => 'c4@mada.gov.my',
            'password'  => bcrypt('password'),
        ]);

        $user = User::create([
            'name'      => 'D4 - Permatang Buluh',
            'location'  => 'PPK',
            'email'     => 'd4@mada.gov.my',
            'password'  => bcrypt('password'),
        ]);

        $user = User::create([
            'name'      => 'E4 - Bukit Besar',
            'location'  => 'PPK',
            'email'     => 'e4@mada.gov.my',
            'password'  => bcrypt('password'),
        ]);

        $user = User::create([
            'name'      => 'F4 - Sungai Limau Dalam',
            'location'  => 'PPK',
            'email'     => 'f4@mada.gov.my',
            'password'  => bcrypt('password'),
        ]);

        $user = User::create([
            'name'      => 'G4 - Guar Chempedak',
            'location'  => 'PPK',
            'email'     => 'g4@mada.gov.my',
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
