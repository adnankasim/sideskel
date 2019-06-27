<?php

use Illuminate\Database\Seeder;

class BelanjaTableSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'uraian_belanja' => 'Beli Barang ABC', 
                'nominal_belanja' => '5000000',
                'tahun' => '2018',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'uraian_belanja' => 'Beli Barang ABC', 
                'nominal_belanja' => '5000000',
                'tahun' => '2019',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'uraian_belanja' => 'Gaji Aparat Desa', 
                'nominal_belanja' => '7500000',
                'tahun' => '2019',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'uraian_belanja' => 'Maintenance Fasilitas Kantor', 
                'nominal_belanja' => '11250000',
                'tahun' => '2019',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'uraian_belanja' => 'Perbaiki Jalan Setapak', 
                'nominal_belanja' => '17500000',
                'tahun' => '2019',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'uraian_belanja' => 'Perbaiki Jalan Tol', 
                'nominal_belanja' => '50500000',
                'tahun' => '2019',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'uraian_belanja' => 'Perbaiki Alat Produksi', 
                'nominal_belanja' => '12250000',
                'tahun' => '2019',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ];

        DB::table('belanja')->insert($data);
        
        $this->command->info('Berhasil Menambahkan 2 baris di tabel belanja');
    }
}
