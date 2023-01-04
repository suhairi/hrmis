<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Education;

class EducationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Education::create(['name' => 'SIJIL']); // 1
        Education::create(['name' => 'PMR']); // 2
        Education::create(['name' => 'SPM']); // 3
        Education::create(['name' => 'STPM']); // 4
        Education::create(['name' => 'DIPLOMA']); // 5 
        Education::create(['name' => 'IJAZAH']); // 6
        Education::create(['name' => 'SARJANA']); // 7
        Education::create(['name' => 'PHD']); // 8
    }
}
