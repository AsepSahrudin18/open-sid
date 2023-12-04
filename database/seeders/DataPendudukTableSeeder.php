<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use DB;

class DataPendudukTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('data_penduduks')->delete();
        $data_penduduk = [
            [
                'id' => 1,
                'foto' => 'user_1.png',
                'nik' => '35353535353531',
                'tag_idcard' => '342423483937893',
                'name' => 'Akhyar',
                'jenis_kelamin' => 'L',
                'ttl' => 'Bandung, 20 Agustus 2000',
                'golongan_darah' => 'A',
                'pendidikan' => 'S1'
            ],
            [
                'id' => 2,
                'foto' => 'user_2.png',
                'nik' => '353535123423',
                'tag_idcard' => '34242223937893',
                'name' => 'Syarif',
                'jenis_kelamin' => 'L',
                'ttl' => 'Bandung, 22 Agustus 2000',
                'golongan_darah' => 'A',
                'pendididkan' => 'S1'
            ],
            [
                'id' => 3,
                'foto' => 'user_3.png',
                'nik' => '4443535353531',
                'tag_idcard' => '43423483937893',
                'name' => 'Keny Belle',
                'jenis_kelamin' => 'P',
                'ttl' => 'Bandung, 19 Agustus 2000',
                'golongan_darah' => 'A',
                'pendididkan' => 'S1'
            ],
            [
                'id' => 4,
                'foto' => 'user_4.png',
                'nik' => '3535359993531',
                'tag_idcard' => '340000483937893',
                'name' => 'Sahrudin',
                'jenis_kelamin' => 'L',
                'ttl' => 'Bandung, 14 Agustus 2000',
                'golongan_darah' => 'A',
                'pendididkan' => 'S1'
            ],
            [
                'id' => 5,
                'foto' => 'user_5.png',
                'nik' => '353535354444',
                'tag_idcard' => '999923483937893',
                'name' => 'Bayu',
                'jenis_kelamin' => 'L',
                'ttl' => 'Bandung, 13 Agustus 2000',
                'golongan_darah' => 'A',
                'pendididkan' => 'S1'
            ],
        ];
        DB::table('data_penduduks')->insert($data_penduduk);
    }
}
