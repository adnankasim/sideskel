<?php

use Illuminate\Database\Seeder;

class FasilitasKesehatanTableSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'jenis_fasilitas_kesehatan' => 'Puskesmas Pembantu', 
                'keterangan_fasilitas_kesehatan' => '3 unit',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'jenis_fasilitas_kesehatan' => 'Posyandu', 
                'keterangan_fasilitas_kesehatan' => '1 unit',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ];

        DB::table('fasilitas_kesehatan')->insert($data);
        
        $this->command->info('Berhasil Menambahkan 2 baris di tabel fasilitas_kesehatan');
    }
}
