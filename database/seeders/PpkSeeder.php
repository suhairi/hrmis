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
        
        // PPK - WILAYAH 1
        Ppk::create([
            'name'          => 'Arau',
            'code'          => 'A1',
            'address'       => 'Pertubuhan Peladang Kawasan Harapan Mewah,
                                MADA A-I Arau, KM. 11.15, Guar Sanji,
                                02600 Arau, Perlis.',
            'phone'         => '04-9861 109 / 04-9862 524',
            'wilayah_id'    => 1,
        ]);

        Ppk::create([
            'name'          => 'Kayang',
            'code'          => 'B1',
            'address'       => 'Pertubuhan Peladang Kawasan Muda Sepakat,
                                MADA B-I Kayang, Kampung Tanjung Buluh,
                                01000 Kangar, Perlis.',
            'phone'         => '04-9761 055 / 04-9764 158',
            'wilayah_id'    => 1,
        ]);

        Ppk::create([
            'name'          => 'Kangar',
            'code'          => 'C1',
            'address'       => 'Pertubuhan Peladang Kawasan Bahagia,
                                MADA C-I Kangar, KM. 1, Jalan Syed Alwi,
                                01000 Kangar, Perlis.',
            'phone'         => '04-9762 467 / 04-9764 399',
            'wilayah_id'    => 1,
        ]);

        Ppk::create([
            'name'          => 'Tambun Tulang',
            'code'          => 'D1',
            'address'       => 'Pertubuhan Peladang Kawasan Setiajaya,
                                MADA D-I Tambun Tulang,
                                02600 Arau, Perlis.',
            'phone'         => '04-9861 068 / 04-9864 399',
            'wilayah_id'    => 1,
        ]);

        Ppk::create([
            'name'          => 'Simpang Empat',
            'code'          => 'E1',
            'address'       => 'Pertubuhan Peladang Kawasan Jayadiri,
                                MADA E-I Simpang Empat,
                                02700 Simpang Empat, Perlis.',
            'phone'         => ' 04-9807 248 / 04-9807 741',
            'wilayah_id'    => 1,
        ]);

        


        // PPK - WILAYAH 2
        Ppk::create([
            'name'          => 'Kodiang',
            'code'          => 'A2',
            'address'       => 'Pertubuhan Peladang Kawasan,
                                MADA A-II Kodiang, Jalan Stesyen,
                                06100 Kodiang, Kedah Darul Aman.',
            'phone'         => '04-9255 208 / 04-9255 570',
            'wilayah_id'    => 2,
        ]);

        Ppk::create([
            'name'          => 'Sanglang',
            'code'          => 'B2',
            'address'       => 'Pertubuhan Peladang Kawasan,
                                MADA B-II Sanglang, Batu 4, Jalan Sanglang,
                                06150 Ayer Hitam, Kedah Darul Aman.',
            'phone'         => '04-9254 176 / 04-9153 320',
            'wilayah_id'    => 2,
        ]);

        Ppk::create([
            'name'          => 'Kerpan',
            'code'          => 'C2',
            'address'       => 'Pertubuhan Peladang Kawasan,
                                MADA C-II Kerpan, Simpang Empat Kerpan,
                                06100 Kodiang, Kedah Darul Aman.',
            'phone'         => '04-7940 044 / 04-7949 301',
            'wilayah_id'    => 2,
        ]);

        Ppk::create([
            'name'          => 'Tunjang',
            'code'          => 'D2',
            'address'       => 'Pertubuhan Peladang Kawasan Sinar Bahagia,
                                MADA D-II Tunjang, KM.27, Jalan Kodiang,
                                06000 Jitra, Kedah Darul Aman.',
            'phone'         => '04-9291 813 / 04-9291 429',
            'wilayah_id'    => 2,
        ]);

        Ppk::create([
            'name'          => 'Kubang Sepat',
            'code'          => 'E2',
            'address'       => 'Pertubuhan Peladang Kawasan Usahajaya,
                                MADA E-II Kubang Sepat, KM. 15, Alor Biak,
                                06150 Ayer Hitam, Alor Setar, Kedah Darul Aman.',
            'phone'         => ' 04-7940 084 / 04-7949 291',
            'wilayah_id'    => 2,
        ]);

        Ppk::create([
            'name'          => 'Jerlun',
            'code'          => 'F2',
            'address'       => 'Pertubuhan Peladang Kawasan Semangat Baru,
                                MADA F-II Jerlun, KM. 15, Jalan Putra,
                                06150 Ayer Hitam, Kedah Darul Aman.',
            'phone'         => '04-7940 263 / 04-7949 290',
            'wilayah_id'    => 2,
        ]);

        Ppk::create([
            'name'          => 'Jitra',
            'code'          => 'G2',
            'address'       => 'Pertubuhan Peladang Kawasan Empat Serangkai,
                                MADA G-II Jitra, KM. 21, Jalan Kodiang,
                                06000 Jitra, Kedah Darul Aman.',
            'phone'         => '04-9171 313 / 04-9174 570',
            'wilayah_id'    => 2,
        ]);

        Ppk::create([
            'name'          => 'Kepala Batas',
            'code'          => 'H2',
            'address'       => 'Pertubuhan Peladang Kawasan Telaga Baru,
                                MADA H-II Kepala Batas, Jalan Bukit Tinggi,
                                06200 Kepala Batas, Kedah Darul Aman.',
            'phone'         => '04-7144 324 / 04-7144 743',
            'wilayah_id'    => 2,
        ]);

        Ppk::create([
            'name'          => 'Kuala Sungai',
            'code'          => 'I2',
            'address'       => 'Pertubuhan Peladang Kawasan,
                                MADA I-II Kepala Batas, Jalan Bukit Tinggi,
                                06200 Kepala Batas, Kedah Darul Aman.   ',
            'phone'         => '04-7338 118 / 04-7339 493',
            'wilayah_id'    => 2,
        ]);
    

        // PPK - WILAYAH 3
        Ppk::create([
            'name'          => 'Hutan Kampong',
            'code'          => 'A3',
            'address'       => 'Pertubuhan Peladang Kawasan Muda Jaya Kinabalu,
                                MADA A-III Hutan Kampong,
                                KM.6, Jalan Hutan Kampong,
                                05350 Alor Setar, Kedah Darul Aman.',
            'phone'         => '04-7331 544 / 04-7339 001',
            'wilayah_id'    => 3,
        ]);

        Ppk::create([
            'name'          => 'Alor Senibong',
            'code'          => 'B3',
            'address'       => 'Pertubuhan Peladang Kawasan Gerak Maju,
                                MADA B-III,Alor Senibong,KM. 14, Jalan Haji Idris,
                                06550 Langgar, Kedah Darul Aman.',
            'phone'         => '04-7876 252 / 04-7877 548',
            'wilayah_id'    => 3,
        ]);

        Ppk::create([
            'name'          => 'Tajar',
            'code'          => 'C3',
            'address'       => 'Pertubuhan Peladang Kawasan Aman,
                                MADA C-III Tajar, Batu 8, Jalan Datuk Kumbar,
                                06500 Langgar, Kedah Darul Aman.',
            'phone'         => '04-7302 520 / 04-7307 278',
            'wilayah_id'    => 3,
        ]);

        Ppk::create([
            'name'          => 'Titi Haji Idris',
            'code'          => 'D3',
            'address'       => 'Pertubuhan Peladang Kawasan Silaturrahim,
                                MADA D-III Titi Haji Idris,
                                06500 Langgar, Kedah Darul Aman.',
            'phone'         => '04-7346 272 / 04-7347 148',
            'wilayah_id'    => 3,
        ]);

        Ppk::create([
            'name'          => 'Kobah',
            'code'          => 'E3',
            'address'       => 'Pertubuhan Peladang Kawasan,
                                MADA E-III Kobah, KM. 22.5, Jalan Pendang,
                                06700 Pendang, Kedah Darul Aman.',
            'phone'         => '04-7596 254 / 04-7597 960',
            'wilayah_id'    => 3,
        ]);

        Ppk::create([
            'name'          => 'Pendang',
            'code'          => 'F3',
            'address'       => 'Pertubuhan Peladang Kawasan,
                                MADA F-III Pendang,
                                06700 Pendang, Kedah Darul Aman.',
            'phone'         => '04-7596 107 / 04-7594 939',
            'wilayah_id'    => 3,
        ]);


        // PPK - WILAYAH 4
        Ppk::create([
            'name'          => 'Batas Paip',
            'code'          => 'A4',
            'address'       => 'Pertubuhan Peladang Kawasan Seri Pantai,
                                MADA A-IV Batas Paip, KM. 9, Jalan Kuala Kedah
                                06600 Kuala Kedah, Kedah Darul Aman.',
            'phone'         => '04-7623 240 / 04-7622 263',
            'wilayah_id'    => 4,
        ]);

        Ppk::create([
            'name'          => 'Pengkalan Kundor',
            'code'          => 'B4',
            'address'       => 'Pertubuhan Peladang Kawasan Tun Adam Malik,
                                MADA B-IV Pengkalan Kundur, KM. 6,
                                Jalan Sungai Korok,
                                05460 Alor Setar, Kedah Darul Aman.',
            'phone'         => '04-7715 961 / 04-7713 316',
            'wilayah_id'    => 4,
        ]);

        Ppk::create([
            'name'          => 'Kangkong',
            'code'          => 'C4',
            'address'       => 'Pertubuhan Peladang Kawasan Suka Setia,
                                MADA C-IV Kangkong, KM. 11.5,
                                Jalan Kuala Kangkong,
                                06550 Simpang Empat, Alor Setar, Kedah Darul Aman.',
            'phone'         => '04-7641 493 / 04-7642 881',
            'wilayah_id'    => 4,
        ]);

        Ppk::create([
            'name'          => 'Permatang Buluh',
            'code'          => 'D4',
            'address'       => 'Pertubuhan Peladang Kawasan Usaha Padu,
                                MADA D-IV Permatang Buluh,
                                06800 Kota Sarang Semut, Alor Setar,
                                Kedah Darul Aman.',
            'phone'         => '04-7691 331 / 04 7691 051',
            'wilayah_id'    => 4,
        ]);

        Ppk::create([
            'name'          => 'Bukit Besar',
            'code'          => 'E4',
            'address'       => 'Pertubuhan Peladang Kawasan,
                                MADA E-IV Bukit Besar,
                                06800 Kota Sarang Semut, Alor Setar,
                                Kedah Darul Aman.',
            'phone'         => '04-7691 359',
            'wilayah_id'    => 4,
        ]);

        Ppk::create([
            'name'          => 'Sungai Limau Dalam',
            'code'          => 'F4',
            'address'       => 'Pertubuhan Peladang Kawasan,
                                MADA F-IV Sungai Limau Dalam,
                                06910 Yan, Kedah Darul Aman.',
            'phone'         => '04-7691 395 / 04-7692 796',
            'wilayah_id'    => 4,
        ]);

        Ppk::create([
            'name'          => 'Guar Chempedak',
            'code'          => 'G4',
            'address'       => 'Pertubuhan Peladang Kawasan,
                                MADA G-IV Guar Chempedak,
                                KM. 0.6, Jalan Yan,
                                08000 Gurun, Kedah Darul Aman.',
            'phone'         => '04-4686 140 / 04-4687 945',
            'wilayah_id'    => 4,
        ]);

        
    }
}
