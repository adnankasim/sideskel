<?php

use Illuminate\Database\Seeder;

class BatasTableSeeder extends Seeder
{
    public function run()
    {
        $data = [
            ['mata_angin' => 'Utara','uraian' => 'Desa ABC', 'created_at' => now(), 'updated_at' => now()],
            ['mata_angin' => 'Barat','uraian' => 'Desa DEF', 'created_at' => now(), 'updated_at' => now()],
            ['mata_angin' => 'Timur','uraian' => 'Desa GHI', 'created_at' => now(), 'updated_at' => now()],
            ['mata_angin' => 'Selatan','uraian' => 'Desa JKL', 'created_at' => now(), 'updated_at' => now()],
        ];

        DB::table('batas')->insert($data);
        
        $this->command->info('Berhasil Menambahkan 4 baris di tabel batas');
    }
}
