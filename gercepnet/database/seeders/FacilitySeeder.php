<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FacilitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $facilities = [
            [
                'namaFasilitas' => 'Ruang Bermain 1',
                'descFasilitas' => 'Ruang untuk bermain Komputer',
                'jenisFasilitas' => 'Komputer',
            ],
            [
                'namaFasilitas' => 'Ruang Bermain 2',
                'descFasilitas' => 'Ruang untuk bermain Console',
                'jenisFasilitas' => 'Console',
            ],
            [
                'namaFasilitas' => 'Ruang Bermain 3',
                'descFasilitas' => 'Ruangan untuk bermain VR',
                'jenisFasilitas' => 'VR',
            ],
        ];

        DB::table('facilities')->insert($facilities);
    }
}
