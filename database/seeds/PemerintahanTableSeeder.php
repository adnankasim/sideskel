<?php

use Illuminate\Database\Seeder;

class PemerintahanTableSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'nama_pemerintahan' => 'Alif Perdana Sugeha', 
                'jabatan_pemerintahan' => 'Kepala Desa',
                'masa_bakti_pemerintahan' => '2019 - 2025'
            ],
            [
                'nama_pemerintahan' => 'Febrianto Lasunte', 
                'jabatan_pemerintahan' => 'Sekretaris Desa',
                'masa_bakti_pemerintahan' => '2013 - 2019'
            ],
            [
                'nama_pemerintahan' => 'Tiko Thiran', 
                'jabatan_pemerintahan' => 'Kasi Pemerintahan',
                'masa_bakti_pemerintahan' => '2013 - 2019'
            ],
            [
                'nama_pemerintahan' => 'Mirza Kurnia', 
                'jabatan_pemerintahan' => 'Kasi Kesejahteraan',
                'masa_bakti_pemerintahan' => '2013 - 2019'
            ],
            [
                'nama_pemerintahan' => 'Azhar Mirza', 
                'jabatan_pemerintahan' => 'Kasi Tata Usaha & Umum',
                'masa_bakti_pemerintahan' => '2013 - 2019'
            ],
            [
                'nama_pemerintahan' => 'Hidayat Chandra', 
                'jabatan_pemerintahan' => 'Kaur Keuangan',
                'masa_bakti_pemerintahan' => '2013 - 2019'
            ],
            [
                'nama_pemerintahan' => 'Julisa A. Tapola', 
                'jabatan_pemerintahan' => 'Kaur Perencanaan',
                'masa_bakti_pemerintahan' => '2013 - 2019'
            ],
            [
                'nama_pemerintahan' => 'Sandra Lihawa', 
                'jabatan_pemerintahan' => 'Kaur Pelayanan',
                'masa_bakti_pemerintahan' => '2013 - 2019'
            ],
            [
                'nama_pemerintahan' => 'Anissa Nurdin', 
                'jabatan_pemerintahan' => 'Sub Urusan Kependudukan',
                'masa_bakti_pemerintahan' => '2013 - 2019'
            ],
            [
                'nama_pemerintahan' => 'Shania A. Paudi', 
                'jabatan_pemerintahan' => 'Sub Urusan Pertanahan',
                'masa_bakti_pemerintahan' => '2013 - 2019'
            ],
            [
                'nama_pemerintahan' => 'Lusi A. Makalalag', 
                'jabatan_pemerintahan' => 'Sub Urusan Layanan Sosial',
                'masa_bakti_pemerintahan' => '2013 - 2019'
            ],
            [
                'nama_pemerintahan' => 'Murni S. Gusti', 
                'jabatan_pemerintahan' => 'Kepala Dusun ABC',
                'masa_bakti_pemerintahan' => '2013 - 2019'
            ],
            [
                'nama_pemerintahan' => 'Sukardi R. Dali', 
                'jabatan_pemerintahan' => 'Kepala Dusun DEF',
                'masa_bakti_pemerintahan' => '2013 - 2019'
            ],
            [
                'nama_pemerintahan' => 'Rahawati Huntoyungo', 
                'jabatan_pemerintahan' => 'Kepala Dusun GHI',
                'masa_bakti_pemerintahan' => '2013 - 2019'
            ],
            [
                'nama_pemerintahan' => 'Yunus Hasan', 
                'jabatan_pemerintahan' => 'Kepala Dusun JKL',
                'masa_bakti_pemerintahan' => '2013 - 2019'
            ],
            [
                'nama_pemerintahan' => 'Agitama Bintara Putera', 
                'jabatan_pemerintahan' => 'Ketua Karang Taruna',
                'masa_bakti_pemerintahan' => '2013 - 2019'
            ],
            [
                'nama_pemerintahan' => 'Adrian Tuhumuri', 
                'jabatan_pemerintahan' => 'Ketua LPMD',
                'masa_bakti_pemerintahan' => '2013 - 2019'
            ],
            [
                'nama_pemerintahan' => 'Rizki Tuharea', 
                'jabatan_pemerintahan' => 'Ketua BPD',
                'masa_bakti_pemerintahan' => '2013 - 2019'
            ],
            [
                'nama_pemerintahan' => 'Sitti Rahmiar', 
                'jabatan_pemerintahan' => 'Ketua PKK',
                'masa_bakti_pemerintahan' => '2013 - 2019'
            ]
        ];

        DB::table('pemerintahan')->insert($data);
        
        $this->command->info('Berhasil Menambahkan 19 baris di tabel pemerintahan');
    }
}
