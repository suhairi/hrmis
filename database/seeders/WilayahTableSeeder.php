<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Wilayah;

class WilayahTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Wilayah::create([
            'name'      => 'WILAYAH 1',
            'code'      => 'W1',
            'address'   => 'Pejabat Pengurus Wilayah I,',
            'address2'  => 'Lembaga Kemajuan Pertanian Muda (MADA),',
            'address3'  => 'KM. 2, Behor Temak, 01000 Kangar, Perlis.',
            'phone'     => '04-9762 601 / 04-9762 611'
        ]);
        
        Wilayah::create([
            'name'      => 'WILAYAH 2',
            'code'      => 'W2',
            'address'   => 'Pejabat Pengurus Wilayah II,',
            'address2'  => 'Lembaga Kemajuan Pertanian Muda (MADA)',
            'address3'  => 'Jalan Changloon,',
            'address4'  => '06000 Jitra, Kedah Darul Aman.',
            'phone'     => '04-91710 280 / 04-9171 467'
        ]);
        
        Wilayah::create([
            'name'      => 'WILAYAH 3',
            'code'      => 'W3',
            'address'   => 'Pejabat Pengurus Wilayah III,',
            'address2'  => 'Lembaga Kemajuan Pertanian Muda (MADA),',
            'address3'  => '06700 Pendang, Kedah Darul Aman.',
            'phone'     => ' 04-7596 250 / 04-7596 089'
        ]);
        
        Wilayah::create([
            'name'      => 'WILAYAH 4',
            'code'      => 'W4',
            'address'   => 'Pejabat Pengurus Wilayah IV,',
            'address2'  => 'Lembaga Kemajuan Pertanian Muda (MADA),',
            'address3'  => '06800 Kota Sarang Semut, Kedah Darul Aman.',
            'phone'     => '04-7691 107 / 04-7691 237'
        ]);
    }

}
