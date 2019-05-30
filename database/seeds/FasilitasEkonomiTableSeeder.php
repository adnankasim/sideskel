<?php

use Illuminate\Database\Seeder;

class FasilitasEkonomiTableSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'jenis_fasilitas_ekonomi' => 'Usaha Peternakan', 
                'keterangan_fasilitas_ekonomi' => '3 Unit'
            ],
            [
                'jenis_fasilitas_ekonomi' => 'Usaha Perkebunan', 
                'keterangan_fasilitas_ekonomi' => '3 Unit'
            ],
            [
                'jenis_fasilitas_ekonomi' => 'Kel. Simpan Pinjam', 
                'keterangan_fasilitas_ekonomi' => '2 Kelompok'
            ],
            [
                'jenis_fasilitas_ekonomi' => 'Usaha Angkutan', 
                'keterangan_fasilitas_ekonomi' => '10 Unit'
            ],
            [
                'jenis_fasilitas_ekonomi' => 'Usaha Industri Kerajinan', 
                'keterangan_fasilitas_ekonomi' => '1 Unit'
            ],
            [
                'jenis_fasilitas_ekonomi' => 'Usaha Pertanian', 
                'keterangan_fasilitas_ekonomi' => '10 HA'
            ]
        ];

        DB::table('fasilitas_ekonomi')->insert($data);
        
        $this->command->info('Berhasil Menambahkan 6 baris di tabel fasilitas_ekonomi');
    }
}
