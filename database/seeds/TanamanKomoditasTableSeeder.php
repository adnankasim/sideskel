<?php

use Illuminate\Database\Seeder;

class TanamanKomoditasTableSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'uraian_tanaman_komoditas' => 'Padi', 
                'luas_tanaman_komoditas' => '80 HA',
                'produksi_per_ha' => '4,5 Ton',
                'tahun_anggaran' => '2019'
            ],
            [
                'uraian_tanaman_komoditas' => 'Jagung', 
                'luas_tanaman_komoditas' => '75 HA',
                'produksi_per_ha' => '2,7 Ton',
                'tahun_anggaran' => '2019'
            ],
            [
                'uraian_tanaman_komoditas' => 'Kacang Hijau', 
                'luas_tanaman_komoditas' => '27 HA',
                'produksi_per_ha' => '0,7 Ton',
                'tahun_anggaran' => '2019'
            ],
            [
                'uraian_tanaman_komoditas' => 'Kacang Tanah', 
                'luas_tanaman_komoditas' => '12 HA',
                'produksi_per_ha' => '1 Ton',
                'tahun_anggaran' => '2018'
            ],
            [
                'uraian_tanaman_komoditas' => 'Semangka', 
                'luas_tanaman_komoditas' => '5 HA',
                'produksi_per_ha' => '1 Ton',
                'tahun_anggaran' => '2018'
            ]
        ];

        DB::table('tanaman_komoditas')->insert($data);
        
        $this->command->info('Berhasil Menambahkan 5 baris di tabel tanaman_komoditas');
    }
}
