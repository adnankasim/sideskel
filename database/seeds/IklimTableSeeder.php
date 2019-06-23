<?php

use Illuminate\Database\Seeder;

class IklimTableSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'uraian_iklim' => 'Tinggi Kelerengan / Tempat', 
                'keterangan_iklim' => '10 M',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'uraian_iklim' => 'Curah Hujan', 
                'keterangan_iklim' => 'Rendah',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'uraian_iklim' => 'Suhu Rata-Rata Harian', 
                'keterangan_iklim' => '-',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'uraian_iklim' => 'Jumlah Bulan Hujan', 
                'keterangan_iklim' => '6',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'uraian_iklim' => 'Bentang Wilayah', 
                'keterangan_iklim' => 'Dataran / Lautan',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ];

        DB::table('iklim')->insert($data);
        
        $this->command->info('Berhasil Menambahkan 5 baris di tabel iklim');
    }
}
