<?php

use Illuminate\Database\Seeder;

class DokumenTableSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'nama_dokumen' => 'File Contoh',
                'file_dokumen' => 'default.pdf',
            ]
        ];

        DB::table('dokumen')->insert($data);
        
        $this->command->info('Berhasil Menambahkan 1 baris di tabel dokumen');
    }
}
