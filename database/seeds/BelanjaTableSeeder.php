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
        ];

        DB::table('belanja')->insert($data);
        
        $this->command->info('Berhasil Menambahkan 2 baris di tabel belanja');
    }
}
