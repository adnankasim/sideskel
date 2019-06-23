<?php

use Illuminate\Database\Seeder;

class PendapatanTableSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'uraian_pendapatan' => 'Piutang Barang ABC', 
                'nominal_pendapatan' => '5000000',
                'tahun' => '2019',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'uraian_pendapatan' => 'Putang Barang ABC', 
                'nominal_pendapatan' => '5000000',
                'tahun' => '2018',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('pendapatan')->insert($data);
        
        $this->command->info('Berhasil Menambahkan 2 baris di tabel pendapatan');
    }
}
