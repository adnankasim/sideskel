<?php

use Illuminate\Database\Seeder;

class BatasTableSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'utara' => 'Desa ABC', 
                'selatan' => 'Desa DEF',
                'barat' => 'Desa GHI',
                'timur' => 'Desa JKL'
            ],
        ];

        DB::table('batas')->insert($data);
        
        $this->command->info('Berhasil Menambahkan 1 baris di tabel batas');
    }
}
