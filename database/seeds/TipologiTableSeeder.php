<?php

use Illuminate\Database\Seeder;

class TipologiTableSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'uraian_tipologi' => 'Desa Sekitar Hutan', 
                'keterangan_tipologi' => 'tidak',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'uraian_tipologi' => 'Desa Terisolasi', 
                'keterangan_tipologi' => 'tidak',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'uraian_tipologi' => 'Desa Perbatasan Kabupaten Lain', 
                'keterangan_tipologi' => 'tidak',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'uraian_tipologi' => 'Desa Perbatasan Kecamatan Lain', 
                'keterangan_tipologi' => 'tidak',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ];

        DB::table('tipologi')->insert($data);
        
        $this->command->info('Berhasil Menambahkan 4 baris di tabel tipologi');

    }
}
