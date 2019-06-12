<?php

use Illuminate\Database\Seeder;

class OrbitasiTableSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'uraian' => 'Jarak ke kecamatan',
                'keterangan' => '7 KM' 
            ],
            [
                'uraian' => 'Lama tempuh ke kecamatan', 
                'keterangan' => '30 Menit'
            ],
            [
                'uraian' => 'Jarak ke kabupaten',
                'keterangan' => '20 KM'
            ],
            [
                'uraian' => 'lama tempuh ke kabupaten',
                'keterangan' => '1 Jam'
            ],
            [
                'uraian' => 'Jarak ke kota', 
                'keterangan' => '25 KM'
            ],
            [
                'uraian' => 'Lama tempuh ke_kota', 
                'keterangan' => '1,5 Jam',
            ]
        ];

        DB::table('orbitasi')->insert($data);
        
        $this->command->info('Berhasil Menambahkan 6 baris di tabel orbitasi');
    }
}
