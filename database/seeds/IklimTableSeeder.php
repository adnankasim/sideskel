<?php

use Illuminate\Database\Seeder;

class IklimTableSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'uraian_iklim' => 'Tinggi Kelerengan / Tempat', 
                'keterangan_iklim' => '10 M'
            ],
            [
                'uraian_iklim' => 'Curah Hujan', 
                'keterangan_iklim' => 'Rendah'
            ],
            [
                'uraian_iklim' => 'Suhu Rata-Rata Harian', 
                'keterangan_iklim' => '-'
            ],
            [
                'uraian_iklim' => 'Jumlah Bulan Hujan', 
                'keterangan_iklim' => '6'
            ],
            [
                'uraian_iklim' => 'Bentang Wilayah', 
                'keterangan_iklim' => 'Dataran / Lautan'
            ]
        ];

        DB::table('iklim')->insert($data);
        
        $this->command->info('Berhasil Menambahkan 5 baris di tabel iklim');
    }
}
