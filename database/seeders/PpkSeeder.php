<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Ppk;

class PpkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // WILAYAH 1
        Ppk::create([
            'name'          => 'Arau',
            'code'          => 'A1',
            'wilayah_id'    => 1,
        ]);

        Ppk::create([
            'name'          => 'Kayang',
            'code'          => 'B1',
            'wilayah_id'    => 1,
        ]);

        Ppk::create([
            'name'          => 'Kangar',
            'code'          => 'C1',
            'wilayah_id'    => 1,
        ]);

        Ppk::create([
            'name'          => 'Tambun Tulang',
            'code'          => 'D1',
            'wilayah_id'    => 1,
        ]);

        Ppk::create([
            'name'          => 'Simpang Empat',
            'code'          => 'E1',
            'wilayah_id'    => 1,
        ]);

        


        // WILAYAH 2
        Ppk::create([
            'name'          => 'Kodiang',
            'code'          => 'A2',
            'wilayah_id'    => '2',
        ]);

        Ppk::create([
            'name'          => 'Sanglang',
            'code'          => 'B2',
            'wilayah_id'    => '2',
        ]);

        Ppk::create([
            'name'          => 'Kerpan',
            'code'          => 'C2',
            'wilayah_id'    => '2',
        ]);

        Ppk::create([
            'name'          => 'Tunjang',
            'code'          => 'D2',
            'wilayah_id'    => '2',
        ]);

        Ppk::create([
            'name'          => 'Kubang Sepat',
            'code'          => 'E2',
            'wilayah_id'    => '2',
        ]);

        Ppk::create([
            'name'          => 'Jerlun',
            'code'          => 'F2',
            'wilayah_id'    => '2',
        ]);

        Ppk::create([
            'name'          => 'Jitra',
            'code'          => 'G2',
            'wilayah_id'    => '2',
        ]);

        Ppk::create([
            'name'          => 'Kepala Batas',
            'code'          => 'H2',
            'wilayah_id'    => '2',
        ]);

        Ppk::create([
            'name'          => 'Kuala Sungai',
            'code'          => 'I2',
            'wilayah_id'    => '2',
        ]);
    

        // Wilayah 3
        Ppk::create([
            'name'          => 'Hutan Kampong',
            'code'          => 'A3',
            'wilayah_id'    => '3',
        ]);

        Ppk::create([
            'name'          => 'Alor Senibong',
            'code'          => 'B3',
            'wilayah_id'    => '3',
        ]);

        Ppk::create([
            'name'          => 'Tajar',
            'code'          => 'C3',
            'wilayah_id'    => '3',
        ]);

        Ppk::create([
            'name'          => 'Titi Haji Idris',
            'code'          => 'D3',
            'wilayah_id'    => '3',
        ]);

        Ppk::create([
            'name'          => 'Kobah',
            'code'          => 'E3',
            'wilayah_id'    => '3',
        ]);

        Ppk::create([
            'name'          => 'Pendang',
            'code'          => 'F3',
            'wilayah_id'    => '3',
        ]);


        // Wilayah 4
        Ppk::create([
            'name'          => 'Batas Paip',
            'code'          => 'A4',
            'wilayah_id'    => '4',
        ]);

        Ppk::create([
            'name'          => 'Pengkalan Kundor',
            'code'          => 'B4',
            'wilayah_id'    => '4',
        ]);

        Ppk::create([
            'name'          => 'Kangkong',
            'code'          => 'C4',
            'wilayah_id'    => '4',
        ]);

        Ppk::create([
            'name'          => 'Permatang Buluh',
            'code'          => 'D4',
            'wilayah_id'    => '4',
        ]);

        Ppk::create([
            'name'          => 'Bukit Besar',
            'code'          => 'E4',
            'wilayah_id'    => '4',
        ]);

        Ppk::create([
            'name'          => 'Sungai Limau Dalam',
            'code'          => 'F4',
            'wilayah_id'    => '4',
        ]);

        Ppk::create([
            'name'          => 'Guar Chempedak',
            'code'          => 'G4',
            'wilayah_id'    => '4',
        ]);

        
    }
}
