<?php

use Illuminate\Database\Seeder;

class FasilitasPrasaranaTableSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'jenis_fasilitas_prasarana' => 'Jalan Aspal', 
                'keterangan_fasilitas_prasarana' => '3 KM',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'jenis_fasilitas_prasarana' => 'Jalan Telford', 
                'keterangan_fasilitas_prasarana' => '5 KM',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'jenis_fasilitas_prasarana' => 'Jalan Makadam', 
                'keterangan_fasilitas_prasarana' => '1,5 KM',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'jenis_fasilitas_prasarana' => 'Jalan Rabat Beton', 
                'keterangan_fasilitas_prasarana' => '1 KM',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'jenis_fasilitas_prasarana' => 'Jalan Tanah', 
                'keterangan_fasilitas_prasarana' => '10 KM',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'jenis_fasilitas_prasarana' => 'Jembatan Beton', 
                'keterangan_fasilitas_prasarana' => '10 M',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'jenis_fasilitas_prasarana' => 'Jembatan Besi', 
                'keterangan_fasilitas_prasarana' => '15 M',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'jenis_fasilitas_prasarana' => 'Jembatan Kayu', 
                'keterangan_fasilitas_prasarana' => '5 M',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'jenis_fasilitas_prasarana' => 'Pangkalan Ojek', 
                'keterangan_fasilitas_prasarana' => '1 Unit',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ];

        DB::table('fasilitas_prasarana')->insert($data);
        
        $this->command->info('Berhasil Menambahkan 9 baris di tabel fasilitas_prasarana');
    }
}
