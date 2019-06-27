<?php

use Illuminate\Database\Seeder;

class PengaturanTableSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'gambar' => 'bg2.jpg', 
                'warna' => '#34495e',
                'created_at' => now(), 
                'updated_at' => now()
            ]
        ];

        DB::table('pengaturan')->insert($data);
        
        $this->command->info('Berhasil Menambahkan 1 baris di tabel pengaturan');
    }
}
