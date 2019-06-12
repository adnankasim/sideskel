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
                'tahun' => '2018'
            ],
            [
                'uraian_belanja' => 'Beli Barang ABC', 
                'nominal_belanja' => '5000000',
                'tahun' => '2019'
            ],
        ];

        DB::table('belanja')->insert($data);
        
        $this->command->info('Berhasil Menambahkan 2 baris di tabel belanja');
    }
}
