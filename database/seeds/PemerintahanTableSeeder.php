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
                'foto_pemerintahan' => 'default.jpg',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama_pemerintahan' => 'Febrianto Lasunte', 
                'jabatan_pemerintahan' => 'Sekretaris Desa',
                'foto_pemerintahan' => 'default.jpg',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama_pemerintahan' => 'Tiko Thiran', 
                'jabatan_pemerintahan' => 'Kasi Pemerintahan',
                'foto_pemerintahan' => 'default.jpg',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama_pemerintahan' => 'Mirza Kurnia', 
                'jabatan_pemerintahan' => 'Kasi Kesejahteraan',
                'foto_pemerintahan' => 'default.jpg',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama_pemerintahan' => 'Azhar Mirza', 
                'jabatan_pemerintahan' => 'Kasi Tata Usaha & Umum',
                'foto_pemerintahan' => 'default.jpg',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama_pemerintahan' => 'Hidayat Chandra', 
                'jabatan_pemerintahan' => 'Kaur Keuangan',
                'foto_pemerintahan' => 'default.jpg',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama_pemerintahan' => 'Julisa A. Tapola', 
                'jabatan_pemerintahan' => 'Kaur Perencanaan',
                'foto_pemerintahan' => 'default.jpg',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama_pemerintahan' => 'Sandra Lihawa', 
                'jabatan_pemerintahan' => 'Kaur Pelayanan',
                'foto_pemerintahan' => 'default.jpg',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama_pemerintahan' => 'Anissa Nurdin', 
                'jabatan_pemerintahan' => 'Sub Urusan Kependudukan',
                'foto_pemerintahan' => 'default.jpg',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama_pemerintahan' => 'Shania A. Paudi', 
                'jabatan_pemerintahan' => 'Sub Urusan Pertanahan',
                'foto_pemerintahan' => 'default.jpg',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama_pemerintahan' => 'Lusi A. Makalalag', 
                'jabatan_pemerintahan' => 'Sub Urusan Layanan Sosial',
                'foto_pemerintahan' => 'default.jpg',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama_pemerintahan' => 'Murni S. Gusti', 
                'jabatan_pemerintahan' => 'Kepala Dusun ABC',
                'foto_pemerintahan' => 'default.jpg',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama_pemerintahan' => 'Sukardi R. Dali', 
                'jabatan_pemerintahan' => 'Kepala Dusun DEF',
                'foto_pemerintahan' => 'default.jpg',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama_pemerintahan' => 'Rahawati Huntoyungo', 
                'jabatan_pemerintahan' => 'Kepala Dusun GHI',
                'foto_pemerintahan' => 'default.jpg',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama_pemerintahan' => 'Yunus Hasan', 
                'jabatan_pemerintahan' => 'Kepala Dusun JKL',
                'foto_pemerintahan' => 'default.jpg',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama_pemerintahan' => 'Agitama Bintara Putera', 
                'jabatan_pemerintahan' => 'Ketua Karang Taruna',
                'foto_pemerintahan' => 'default.jpg',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama_pemerintahan' => 'Adrian Tuhumuri', 
                'jabatan_pemerintahan' => 'Ketua LPMD',
                'foto_pemerintahan' => 'default.jpg',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama_pemerintahan' => 'Rizki Tuharea', 
                'jabatan_pemerintahan' => 'Ketua BPD',
                'foto_pemerintahan' => 'default.jpg',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama_pemerintahan' => 'Sitti Rahmiar', 
                'jabatan_pemerintahan' => 'Ketua PKK',
                'foto_pemerintahan' => 'default.jpg',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ];

        DB::table('pemerintahan')->insert($data);
        
        $this->command->info('Berhasil Menambahkan 19 baris di tabel pemerintahan');
    }
}
