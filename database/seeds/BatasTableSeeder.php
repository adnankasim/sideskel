<?php

use Illuminate\Database\Seeder;

class BatasTableSeeder extends Seeder
{
    public function run()
    {
        $data = [
            ['mata_angin' => 'Utara','uraian' => 'Desa ABC'],
            ['mata_angin' => 'Barat','uraian' => 'Desa DEF'],
            ['mata_angin' => 'Timur','uraian' => 'Desa GHI'],
            ['mata_angin' => 'Selatan','uraian' => 'Desa JKL'],
        ];

        DB::table('batas')->insert($data);
        
        $this->command->info('Berhasil Menambahkan 4 baris di tabel batas');
    }
}
