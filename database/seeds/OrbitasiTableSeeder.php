<?php

use Illuminate\Database\Seeder;

class OrbitasiTableSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'uraian' => 'Jarak ke kecamatan',
                'keterangan' => '7 KM',
                'created_at' => now(), 
                'updated_at' => now() 
            ],
            [
                'uraian' => 'Lama tempuh ke kecamatan', 
                'keterangan' => '30 Menit',
                'created_at' => now(), 
                'updated_at' => now()
            ],
            [
                'uraian' => 'Jarak ke kabupaten',
                'keterangan' => '20 KM',
                'created_at' => now(), 
                'updated_at' => now()
            ],
            [
                'uraian' => 'lama tempuh ke kabupaten',
                'keterangan' => '1 Jam',
                'created_at' => now(), 
                'updated_at' => now()
            ],
            [
                'uraian' => 'Jarak ke kota', 
                'keterangan' => '25 KM',
                'created_at' => now(), 
                'updated_at' => now()
            ],
            [
                'uraian' => 'Lama tempuh ke_kota', 
                'keterangan' => '1,5 Jam',
                'created_at' => now(), 
                'updated_at' => now()
            ]
        ];

        DB::table('orbitasi')->insert($data);
        
        $this->command->info('Berhasil Menambahkan 6 baris di tabel orbitasi');
    }
}
