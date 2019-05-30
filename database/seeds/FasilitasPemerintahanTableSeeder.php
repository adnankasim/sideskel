<?php

use Illuminate\Database\Seeder;

class FasilitasPemerintahanTableSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'jenis_fasilitas_pemerintahan' => 'Kantor Desa', 
                'keterangan_fasilitas_pemerintahan' => '1'
            ],
            [
                'jenis_fasilitas_pemerintahan' => 'Kantor BPD', 
                'keterangan_fasilitas_pemerintahan' => '1'
            ],
            [
                'jenis_fasilitas_pemerintahan' => 'Karang Taruna', 
                'keterangan_fasilitas_pemerintahan' => '1'
            ],
            [
                'jenis_fasilitas_pemerintahan' => 'PKK', 
                'keterangan_fasilitas_pemerintahan' => '1'
            ],
        ];

        DB::table('fasilitas_pemerintahan')->insert($data);
        
        $this->command->info('Berhasil Menambahkan 4 baris di tabel fasilitas_pemerintahan');
    }
}
