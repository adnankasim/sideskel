<?php

use Illuminate\Database\Seeder;

class OrbitasiTableSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'jarak_ke_kecamatan' => '7 KM', 
                'lama_tempuh_ke_kecamatan' => '30 Menit',
                'jarak_ke_kabupaten' => '20 KM',
                'lama_tempuh_ke_kabupaten' => '1 Jam',
                'jarak_ke_kota' => '25 KM',
                'lama_tempuh_ke_kota' => '1,5 Jam',
            ],
        ];

        DB::table('orbitasi')->insert($data);
        
        $this->command->info('Berhasil Menambahkan 1 baris di tabel orbitasi');
    }
}
