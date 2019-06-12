<?php

use Illuminate\Database\Seeder;

class FasilitasPemukimanTableSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'uraian_fasilitas_pemukiman' => 'Sumur Gali', 
                'jumlah_fasilitas_pemukiman' => '1',
                'pengguna_fasilitas_pemukiman' => '10 KK'
            ],
            [
                'uraian_fasilitas_pemukiman' => 'Perpipaan', 
                'jumlah_fasilitas_pemukiman' => '1',
                'pengguna_fasilitas_pemukiman' => '10 KK'
            ],
            [
                'uraian_fasilitas_pemukiman' => 'Air Sungai', 
                'jumlah_fasilitas_pemukiman' => '1',
                'pengguna_fasilitas_pemukiman' => '10 KK'
            ],
            [
                'uraian_fasilitas_pemukiman' => 'HIPAM', 
                'jumlah_fasilitas_pemukiman' => '1',
                'pengguna_fasilitas_pemukiman' => '10 KK'
            ]
        ];

        DB::table('fasilitas_pemukiman')->insert($data);
        
        $this->command->info('Berhasil Menambahkan 4 baris di tabel fasilitas_pemukian');
    }
}
