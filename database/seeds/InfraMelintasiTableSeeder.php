<?php

use Illuminate\Database\Seeder;

class InfraMelintasiTableSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'uraian_infra_melintasi' => 'Sungai', 
                'panjang_infra_melintasi' => '1.300 M',
                'lebar_infra_melintasi' => '5 M',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'uraian_infra_melintasi' => 'Jalan Kecamatan', 
                'panjang_infra_melintasi' => '1.500 M',
                'lebar_infra_melintasi' => '6 M',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'uraian_infra_melintasi' => 'Jalan Kabupaten', 
                'panjang_infra_melintasi' => '1.800 M',
                'lebar_infra_melintasi' => '6 M',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ];

        DB::table('infra_melintasi')->insert($data);
        
        $this->command->info('Berhasil Menambahkan 3 baris di tabel infra_melintasi');
    }
}
