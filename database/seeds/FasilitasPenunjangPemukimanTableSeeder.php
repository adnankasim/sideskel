<?php

use Illuminate\Database\Seeder;

class FasilitasPenunjangPemukimanTableSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'uraian_fasilitas_penunjang_pemukiman' => 'Sumur Gali', 
                'jumlah_fasilitas_penunjang_pemukiman' => '1',
                'pengguna_fasilitas_penunjang_pemukiman' => '10 KK'
            ],
            [
                'uraian_fasilitas_penunjang_pemukiman' => 'Perpipaan', 
                'jumlah_fasilitas_penunjang_pemukiman' => '1',
                'pengguna_fasilitas_penunjang_pemukiman' => '10 KK'
            ],
            [
                'uraian_fasilitas_penunjang_pemukiman' => 'Air Sungai', 
                'jumlah_fasilitas_penunjang_pemukiman' => '1',
                'pengguna_fasilitas_penunjang_pemukiman' => '10 KK'
            ],
            [
                'uraian_fasilitas_penunjang_pemukiman' => 'HIPAM', 
                'jumlah_fasilitas_penunjang_pemukiman' => '1',
                'pengguna_fasilitas_penunjang_pemukiman' => '10 KK'
            ]
        ];

        DB::table('fasilitas_penunjang_pemukiman')->insert($data);
        
        $this->command->info('Berhasil Menambahkan 4 baris di tabel fasilitas_penunjang_pemukian');
    }
}
