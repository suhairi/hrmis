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
            'email'     => 'bpip@mada.gov.my',
            'location'  => "HQ",
            'password'  => bcrypt('password'),
        ]);

        $user = User::create([
            'name'      => 'BPW',
            'email'     => 'bpw@mada.gov.my',
            'location'  => "HQ",
            'password'  => bcrypt('password'),
        ]);

        $user = User::create([
            'name'      => 'Wilayah 1',
            'email'     => 'w1@mada.gov.my',
            'location'  => 'WILAYAH 1',
            'password'  => bcrypt('password'),
        ]);

        $user = User::create([
            'name'      => 'Wilayah 2',
            'email'     => 'w2@mada.gov.my',
            'location'  => 'WILAYAH 2',
            'password'  => bcrypt('password'),
        ]);

        $user = User::create([
            'name'      => 'Wilayah 4',
            'email'     => 'w3@mada.gov.my',
            'location'  => 'WILAYAH 3',
            'password'  => bcrypt('password'),
        ]);

        $user = User::create([
            'name'      => 'Wilayah 4',
            'email'     => 'w4@mada.gov.my',
            'location'  => 'WILAYAH 4',
            'password'  => bcrypt('password'),
        ]);
    

        $user = User::create([
            'name'      => 'A1 - Arau',
            'location'  => 'PPK',
            'ppk_id'    => 1,
            'email'     => 'a1@mada.gov.my',
            'password'  => bcrypt('password'),
        ]);

        $user = User::create([
            'name'      => 'B1 - Kayang',
            'location'  => 'PPK',
            'ppk_id'    => 2,
            'email'     => 'b1@mada.gov.my',
            'password'  => bcrypt('password'),
        ]);

        $user = User::create([
            'name'      => 'C1 - Kangar',
            'location'  => 'PPK',
            'ppk_id'    => 3,
            'email'     => 'c1@mada.gov.my',
            'password'  => bcrypt('password'),
        ]);

        $user = User::create([
            'name'      => 'D1 - Tambun Tulang',
            'location'  => 'PPK',
            'ppk_id'    => 4,
            'email'     => 'd1@mada.gov.my',
            'password'  => bcrypt('password'),
        ]);

        $user = User::create([
            'name'      => 'E1 -Simpang Empat',
            'location'  => 'PPK',
            'ppk_id'    => 5,
            'email'     => 'e1@mada.gov.my',
            'password'  => bcrypt('password'),
        ]);

        $user = User::create([
            'name'      => 'A2 -Kodiang',
            'location'  => 'PPK',
            'ppk_id'    => 6,
            'email'     => 'a2@mada.gov.my',
            'password'  => bcrypt('password'),
        ]);

        $user = User::create([
            'name'      => 'B2 -Kodiang',
            'location'  => 'PPK',
            'ppk_id'    => 7,
            'email'     => 'b2@mada.gov.my',
            'password'  => bcrypt('password'),
        ]);

        $user = User::create([
            'name'      => 'C2 - Kerpan',
            'location'  => 'PPK',
            'ppk_id'    => 8,
            'email'     => 'c2@mada.gov.my',
            'password'  => bcrypt('password'),
        ]);

        $user = User::create([
            'name'      => 'D2 - Tunjang',
            'location'  => 'PPK',
            'ppk_id'    => 9,
            'email'     => 'd2@mada.gov.my',
            'password'  => bcrypt('password'),
        ]);

        $user = User::create([
            'name'      => 'E2 - Kubang Sepat',
            'location'  => 'PPK',
            'ppk_id'    => 10,
            'email'     => 'e2@mada.gov.my',
            'password'  => bcrypt('password'),
        ]);

        $user = User::create([
            'name'      => 'F2 - Jerlun',
            'location'  => 'PPK',
            'ppk_id'    => 11,
            'email'     => 'f2@mada.gov.my',
            'password'  => bcrypt('password'),
        ]);

        $user = User::create([
            'name'      => 'G2 - Jitra',
            'location'  => 'PPK',
            'ppk_id'    => 12,
            'email'     => 'g2@mada.gov.my',
            'password'  => bcrypt('password'),
        ]);

        $user = User::create([
            'name'      => 'H2 - Kepala Batas',
            'location'  => 'PPK',
            'ppk_id'    => 13,
            'email'     => 'h2@mada.gov.my',
            'password'  => bcrypt('password'),
        ]);

        $user = User::create([
            'name'      => 'I2 - Kuala Sungai',
            'location'  => 'PPK',
            'ppk_id'    => 14,
            'email'     => 'i2@mada.gov.my',
            'password'  => bcrypt('password'),
        ]);

        $user = User::create([
            'name'      => 'A3 - Hutan Kampong',
            'location'  => 'PPK',
            'ppk_id'    => 15,
            'email'     => 'a3@mada.gov.my',
            'password'  => bcrypt('password'),
        ]);

        $user = User::create([
            'name'      => 'B3 - Alor Senibong',
            'location'  => 'PPK',
            'ppk_id'    => 16,
            'email'     => 'b3@mada.gov.my',
            'password'  => bcrypt('password'),
        ]);

        $user = User::create([
            'name'      => 'C3 - Tajar',
            'location'  => 'PPK',
            'ppk_id'    => 17,
            'email'     => 'c3@mada.gov.my',
            'password'  => bcrypt('password'),
        ]);

        $user = User::create([
            'name'      => 'D3 - Titi Haji Idris',
            'location'  => 'PPK',
            'ppk_id'    => 18,
            'email'     => 'd3@mada.gov.my',
            'password'  => bcrypt('password'),
        ]);

        $user = User::create([
            'name'      => 'E3 - Kobah',
            'location'  => 'PPK',
            'ppk_id'    => 19,
            'email'     => 'e3@mada.gov.my',
            'password'  => bcrypt('password'),
        ]);

        $user = User::create([
            'name'      => 'F3 - Pendang',
            'location'  => 'PPK',
            'ppk_id'    => 20,
            'email'     => 'f3@mada.gov.my',
            'password'  => bcrypt('password'),
        ]);

        $user = User::create([
            'name'      => 'A4 - Batas Paip',
            'location'  => 'PPK',
            'ppk_id'    => 21,
            'email'     => 'a4@mada.gov.my',
            'password'  => bcrypt('password'),
        ]);

        $user = User::create([
            'name'      => 'B4 - Pengkalan Kundor',
            'location'  => 'PPK',
            'ppk_id'    => 22,
            'email'     => 'b4@mada.gov.my',
            'password'  => bcrypt('password'),
        ]);

        $user = User::create([
            'name'      => 'C4 - Kangkong',
            'location'  => 'PPK',
            'ppk_id'    => 23,
            'email'     => 'c4@mada.gov.my',
            'password'  => bcrypt('password'),
        ]);

        $user = User::create([
            'name'      => 'D4 - Permatang Buluh',
            'location'  => 'PPK',
            'ppk_id'    => 24,
            'email'     => 'd4@mada.gov.my',
            'password'  => bcrypt('password'),
        ]);

        $user = User::create([
            'name'      => 'E4 - Bukit Besar',
            'location'  => 'PPK',
            'ppk_id'    => 25,
            'email'     => 'e4@mada.gov.my',
            'password'  => bcrypt('password'),
        ]);

        $user = User::create([
            'name'      => 'F4 - Sungai Limau Dalam',
            'location'  => 'PPK',
            'ppk_id'    => 26,
            'email'     => 'f4@mada.gov.my',
            'password'  => bcrypt('password'),
        ]);

        $user = User::create([
            'name'      => 'G4 - Guar Chempedak',
            'location'  => 'PPK',
            'ppk_id'    => 27,
            'email'     => 'g4@mada.gov.my',
            'password'  => bcrypt('password'),
        ]);


        // Role
        $user = User::find(1);
        $role = Role::create(['name' => 'Admin']);
        $permissions = Permission::pluck('id', 'id')->all();
        $role->syncPermissions($permissions);
        $user->assignRole([$role->id]);

        // $user = User::find(2);
        // $permissions = [9, 10, 11, 12, 13, 14, 15, 16];
        // $role->syncPermissions($permissions);
        // $user->assignRole([$role->id]);

        // $user = User::find(3);
        // $permissions = Permission::where('id', '>', 8)->pluck('id', 'id');
        // $role->syncPermissions($permissions);
        // $user->assignRole([$role->id]);


        $role = Role::create(['name' => 'PPK']);
        // $permissions = Permission::where('id', '>', 8)->pluck('id', 'id');
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
