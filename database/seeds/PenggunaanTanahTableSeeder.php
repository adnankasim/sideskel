<?php

use Illuminate\Database\Seeder;

class PenggunaanTanahTableSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'uraian_penggunaan_tanah' => 'Sawah Irigasi Teknis', 
                'keterangan_penggunaan_tanah' => '2 HA',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'uraian_penggunaan_tanah' => 'Sawah Irigasi Semi Teknis', 
                'keterangan_penggunaan_tanah' => '2 HA',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'uraian_penggunaan_tanah' => 'Sawah Tadah Hujan', 
                'keterangan_penggunaan_tanah' => '2 HA',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'uraian_penggunaan_tanah' => 'Tegal / Ladang', 
                'keterangan_penggunaan_tanah' => '20 HA',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'uraian_penggunaan_tanah' => 'Pemukiman', 
                'keterangan_penggunaan_tanah' => '30 HA',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'uraian_penggunaan_tanah' => 'Tanah Perkebunan Rakyat', 
                'keterangan_penggunaan_tanah' => '2 HA',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'uraian_penggunaan_tanah' => 'Tanah Perkebunan Swasta', 
                'keterangan_penggunaan_tanah' => '2 HA',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'uraian_penggunaan_tanah' => 'Tanah Kas Desa', 
                'keterangan_penggunaan_tanah' => '2 HA',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'uraian_penggunaan_tanah' => 'Lapangan', 
                'keterangan_penggunaan_tanah' => '2 HA',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'uraian_penggunaan_tanah' => 'Perkantoran Pemerintah', 
                'keterangan_penggunaan_tanah' => '2 HA',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ];

        DB::table('penggunaan_tanah')->insert($data);
        
        $this->command->info('Berhasil Menambahkan 10 baris di tabel penggunaan_tanah');
    }
}
