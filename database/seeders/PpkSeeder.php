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
            'address'       => 'Pertubuhan Peladang Kawasan Harapan Mewah,',
            'address2'      => 'MADA A-I Arau,',
            'address3'      => 'KM. 11.15, Guar Sanji,',
            'address4'      => '02600 Arau, Perlis.',
            'phone'         => '04-9861 109 / 04-9862 524',
            'wilayah_id'    => 1,
        ]);

        Ppk::create([
            'name'          => 'Kayang',
            'code'          => 'B1',
            'address'       => 'Pertubuhan Peladang Kawasan Muda Sepakat,',
            'address2'      => 'MADA B-I Kayang,',
            'address3'      => 'Kampung Tanjung Buluh,',
            'address4'      => '01000 Kangar, Perlis.',
            'phone'         => '04-9761 055 / 04-9764 158',
            'wilayah_id'    => 1,
        ]);

        Ppk::create([
            'name'          => 'Kangar',
            'code'          => 'C1',
            'address'       => 'Pertubuhan Peladang Kawasan Bahagia,',
            'address2'      => 'MADA C-I Kangar, ',
            'address3'      => 'KM. 1, Jalan Syed Alwi,',
            'address4'      => '01000 Kangar, Perlis.',
            'phone'         => '04-9762 467 / 04-9764 399',
            'wilayah_id'    => 1,
        ]);

        Ppk::create([
            'name'          => 'Tambun Tulang',
            'code'          => 'D1',
            'address'       => 'Pertubuhan Peladang Kawasan Setiajaya,',
            'address2'      => 'MADA D-I Tambun Tulang,',
            'address3'      => '02600 Arau, Perlis.',
            'phone'         => '04-9861 068 / 04-9864 399',
            'wilayah_id'    => 1,
        ]);

        Ppk::create([
            'name'          => 'Simpang Empat',
            'code'          => 'E1',
            'address'       => 'Pertubuhan Peladang Kawasan Jayadiri,',
            'address2'      => 'MADA E-I Simpang Empat,',
            'address3'      => '02700 Simpang Empat, Perlis.',
            'phone'         => '04-9807 248 / 04-9807 741',
            'wilayah_id'    => 1,
        ]);

        


        // PPK - WILAYAH 2
        Ppk::create([
            'name'          => 'Kodiang',
            'code'          => 'A2',
            'address'       => 'Pertubuhan Peladang Kawasan,',
            'address2'      => 'MADA A-II Kodiang,',
            'address3'      => 'Jalan Stesyen,',
            'address4'      => '06100 Kodiang, Kedah Darul Aman.',
            'phone'         => '04-9255 208 / 04-9255 570',
            'wilayah_id'    => 2,
        ]);

        Ppk::create([
            'name'          => 'Sanglang',
            'code'          => 'B2',
            'address'       => 'Pertubuhan Peladang Kawasan,',
            'address2'       => 'MADA B-II Sanglang, ',
            'address3'       => 'Batu 4, Jalan Sanglang,',
            'address4'       => '06150 Ayer Hitam, Kedah Darul Aman.',
            'phone'         => '04-9254 176 / 04-9153 320',
            'wilayah_id'    => 2,
        ]);

        Ppk::create([
            'name'          => 'Kerpan',
            'code'          => 'C2',
            'address'       => 'Pertubuhan Peladang Kawasan,',
            'address2'      => 'MADA C-II Kerpan, ',
            'address3'      => 'Simpang Empat Kerpan,',
            'address4'      => '06100 Kodiang, Kedah Darul Aman.',
            'phone'         => '04-7940 044 / 04-7949 301',
            'wilayah_id'    => 2,
        ]);

        Ppk::create([
            'name'          => 'Tunjang',
            'code'          => 'D2',
            'address'       => 'Pertubuhan Peladang Kawasan Sinar Bahagia,',
            'address2'      => 'MADA D-II Tunjang, ',
            'address3'      => 'KM.27, Jalan Kodiang,',
            'address4'      => '06000 Jitra, Kedah Darul Aman.',
            'phone'         => '04-9291 813 / 04-9291 429',
            'wilayah_id'    => 2,
        ]);

        Ppk::create([
            'name'          => 'Kubang Sepat',
            'code'          => 'E2',
            'address'       => 'Pertubuhan Peladang Kawasan Usahajaya,',
            'address2'      => 'MADA E-II Kubang Sepat,',
            'address3'      => 'KM. 15, Alor Biak,',
            'address4'      => '06150 Ayer Hitam, Alor Setar, Kedah Darul Aman.',
            'phone'         => '04-7940 084 / 04-7949 291',
            'wilayah_id'    => 2,
        ]);

        Ppk::create([
            'name'          => 'Jerlun',
            'code'          => 'F2',
            'address'       => 'Pertubuhan Peladang Kawasan Semangat Baru,',
            'address2'      => 'MADA F-II Jerlun, ',
            'address3'      => 'KM. 15, Jalan Putra,',
            'address4'      => '06150 Ayer Hitam, Kedah Darul Aman.',
            'phone'         => '04-7940 263 / 04-7949 290',
            'wilayah_id'    => 2,
        ]);

        Ppk::create([
            'name'          => 'Jitra',
            'code'          => 'G2',
            'address'       => 'Pertubuhan Peladang Kawasan Empat Serangkai,',
            'address2'      => 'MADA G-II Jitra, ',
            'address3'      => 'KM. 21, Jalan Kodiang,',
            'address4'      => '06000 Jitra, Kedah Darul Aman.',
            'phone'         => '04-9171 313 / 04-9174 570',
            'wilayah_id'    => 2,
        ]);

        Ppk::create([
            'name'          => 'Kepala Batas',
            'code'          => 'H2',
            'address'       => 'Pertubuhan Peladang Kawasan Telaga Baru,',
            'address2'      => 'MADA H-II Kepala Batas, ',
            'address3'      => 'Jalan Bukit Tinggi,',
            'address4'      => '06200 Kepala Batas, Kedah Darul Aman.',
            'phone'         => '04-7144 324 / 04-7144 743',
            'wilayah_id'    => 2,
        ]);

        Ppk::create([
            'name'          => 'Kuala Sungai',
            'code'          => 'I2',
            'address'       => 'Pertubuhan Peladang Kawasan,',
            'address2'      => 'MADA I-II Kepala Batas, ',
            'address3'      => 'Jalan Bukit Tinggi,',
            'address4'      => '06200 Kepala Batas, Kedah Darul Aman.',
            'phone'         => '04-7338 118 / 04-7339 493',
            'wilayah_id'    => 2,
        ]);
    

        // PPK - WILAYAH 3
        Ppk::create([
            'name'          => 'Hutan Kampong',
            'code'          => 'A3',
            'address'       => 'Pertubuhan Peladang Kawasan Muda Jaya Kinabalu,',
            'address2'      => 'MADA A-III Hutan Kampong,',
            'address3'      => 'KM.6, Jalan Hutan Kampong,',
            'address4'      => '05350 Alor Setar, Kedah Darul Aman.',
            'phone'         => '04-7331 544 / 04-7339 001',
            'wilayah_id'    => 3,
        ]);

        Ppk::create([
            'name'          => 'Alor Senibong',
            'code'          => 'B3',
            'address'       => 'Pertubuhan Peladang Kawasan Gerak Maju,',
            'address2'      => 'MADA B-III,Alor Senibong,',
            'address3'      => 'KM. 14, Jalan Haji Idris,',
            'address4'      => '06550 Langgar, Kedah Darul Aman.',
            'phone'         => '04-7876 252 / 04-7877 548',
            'wilayah_id'    => 3,
        ]);

        Ppk::create([
            'name'          => 'Tajar',
            'code'          => 'C3',
            'address'       => 'Pertubuhan Peladang Kawasan Aman,',
            'address2'      => 'MADA C-III Tajar, ',
            'address3'      => 'Batu 8, Jalan Datuk Kumbar,',
            'address4'      => '06500 Langgar, Kedah Darul Aman.',
            'phone'         => '04-7302 520 / 04-7307 278',
            'wilayah_id'    => 3,
        ]);

        Ppk::create([
            'name'          => 'Titi Haji Idris',
            'code'          => 'D3',
            'address'       => 'Pertubuhan Peladang Kawasan Silaturrahim,',
            'address2'      => 'MADA D-III Titi Haji Idris,',
            'address3'      => '06500 Langgar, ',
            'address4'      => 'Kedah Darul Aman.',
            'phone'         => '04-7346 272 / 04-7347 148',
            'wilayah_id'    => 3,
        ]);

        Ppk::create([
            'name'          => 'Kobah',
            'code'          => 'E3',
            'address'       => 'Pertubuhan Peladang Kawasan,',
            'address2'      => 'MADA E-III Kobah, ',
            'address3'      => 'KM. 22.5, Jalan Pendang,',
            'address4'      => '06700 Pendang, Kedah Darul Aman.',
            'phone'         => '04-7596 254 / 04-7597 960',
            'wilayah_id'    => 3,
        ]);

        Ppk::create([
            'name'          => 'Pendang',
            'code'          => 'F3',
            'address'       => 'Pertubuhan Peladang Kawasan,',
            'address2'      => 'MADA F-III Pendang,',
            'address3'      => '06700 Pendang, ',
            'address4'      => 'Kedah Darul Aman.',
            'phone'         => '04-7596 107 / 04-7594 939',
            'wilayah_id'    => 3,
        ]);


        // PPK - WILAYAH 4
        Ppk::create([
            'name'          => 'Batas Paip',
            'code'          => 'A4',
            'address'       => 'Pertubuhan Peladang Kawasan Seri Pantai,',
            'address2'      => 'MADA A-IV Batas Paip, ',
            'address3'      => 'KM. 9, Jalan Kuala Kedah',
            'address4'      => '06600 Kuala Kedah, Kedah Darul Aman.',
            'phone'         => '04-7623 240 / 04-7622 263',
            'wilayah_id'    => 4,
        ]);

        Ppk::create([
            'name'          => 'Pengkalan Kundor',
            'code'          => 'B4',
            'address'       => 'Pertubuhan Peladang Kawasan Tun Adam Malik,',
            'address2'      => 'MADA B-IV Pengkalan Kundur, ',
            'address3'      => 'KM. 6, Jalan Sungai Korok,',
            'address4'      => '05460 Alor Setar, Kedah Darul Aman.',
            'phone'         => '04-7715 961 / 04-7713 316',
            'wilayah_id'    => 4,
        ]);

        Ppk::create([
            'name'          => 'Kangkong',
            'code'          => 'C4',
            'address'       => 'Pertubuhan Peladang Kawasan Suka Setia,',
            'address2'      => 'MADA C-IV Kangkong, ',
            'address3'      => 'KM. 11.5, Jalan Kuala Kangkong,',
            'address4'      => '06550 Simpang Empat, Alor Setar, Kedah Darul Aman.',
            'phone'         => '04-7641 493 / 04-7642 881',
            'wilayah_id'    => 4,
        ]);

        Ppk::create([
            'name'          => 'Permatang Buluh',
            'code'          => 'D4',
            'address'       => 'Pertubuhan Peladang Kawasan Usaha Padu,',
            'address2'      => 'MADA D-IV Permatang Buluh,',
            'address3'      => '06800 Kota Sarang Semut, Alor Setar,',
            'address4'      => 'Kedah Darul Aman.',
            'phone'         => '04-7691 331 / 04 7691 051',
            'wilayah_id'    => 4,
        ]);

        Ppk::create([
            'name'          => 'Bukit Besar',
            'code'          => 'E4',
            'address'       => 'Pertubuhan Peladang Kawasan,',
            'address2'      => 'MADA E-IV Bukit Besar,',
            'address3'      => '06800 Kota Sarang Semut, Alor Setar,',
            'address4'      => 'Kedah Darul Aman.',
            'phone'         => '04-7691 359',
            'wilayah_id'    => 4,
        ]);

        Ppk::create([
            'name'          => 'Sungai Limau Dalam',
            'code'          => 'F4',
            'address'       => 'Pertubuhan Peladang Kawasan,',
            'address2'      => 'MADA F-IV Sungai Limau Dalam,',
            'address3'      => '06910 Yan, ',
            'address4'      => 'Kedah Darul Aman.',
            'phone'         => '04-7691 395 / 04-7692 796',
            'wilayah_id'    => 4,
        ]);

        Ppk::create([
            'name'          => 'Guar Chempedak',
            'code'          => 'G4',
            'address'       => 'Pertubuhan Peladang Kawasan,',
            'address2'      => 'MADA G-IV Guar Chempedak,',
            'address3'      => 'KM. 0.6, Jalan Yan,',
            'address4'      => '08000 Gurun, Kedah Darul Aman.',
            'phone'         => '04-4686 140 / 04-4687 945',
            'wilayah_id'    => 4,
        ]);

        
    }
}
