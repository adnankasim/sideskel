<?php

use Illuminate\Database\Seeder;

class OrbitasiTableSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'uraian' => 'jarak_ke_kecamatan',
                'keterangan' => '7 KM' 
            ],
            [
                'uraian' => 'lama_tempuh_ke_kecamatan', 
                'keterangan' => '30 Menit'
            ],
            [
                'uraian' => 'jarak_ke_kabupaten',
                'keterangan' => '20 KM'
            ],
            [
                'uraian' => 'lama_tempuh_ke_kabupaten',
                'keterangan' => '1 Jam'
            ],
            [
                'uraian' => 'jarak_ke_kota', 
                'keterangan' => '25 KM'
            ],
            [
                'uraian' => 'lama_tempuh_ke_kota', 
                'keterangan' => '1,5 Jam',
            ]
        ];

        DB::table('orbitasi')->insert($data);
        
        $this->command->info('Berhasil Menambahkan 6 baris di tabel orbitasi');
    }
}
