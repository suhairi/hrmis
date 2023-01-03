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
        Wilayah::create(['name' => 'Wilayah 1']);
        Wilayah::create(['name' => 'Wilayah 2']);
        Wilayah::create(['name' => 'Wilayah 3']);
        Wilayah::create(['name' => 'Wilayah 4']);
    }
}
