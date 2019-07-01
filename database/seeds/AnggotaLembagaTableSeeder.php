<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class AnggotaLembagaTableSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'nama' => 'Adnan Kasim', 
                'jabatan' => 'Kepala Kelurahan',
                'foto' => 'default.jpg',
                'id_lembaga' => '1',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama' => 'Mohammad Fikri Luawo', 
                'jabatan' => 'Sekretaris Kelurahan',
                'foto' => 'default.jpg',
                'id_lembaga' => '1',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama' => 'Mohammad Ilham Hamzah', 
                'jabatan' => 'Bendahara Kelurahan',
                'foto' => 'default.jpg',
                'id_lembaga' => '1',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama' => 'Zulkifli Bantali', 
                'jabatan' => 'Kepala Lingkungan 1',
                'foto' => 'default.jpg',
                'id_lembaga' => '1',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama' => 'Mirza Kurnia', 
                'jabatan' => 'Kepala Lingkungan 2',
                'foto' => 'default.jpg',
                'id_lembaga' => '1',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama' => 'Mohammad Krisdewanto', 
                'jabatan' => 'Kepala Lingkungan 3',
                'foto' => 'default.jpg',
                'id_lembaga' => '1',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama' => 'Reka Savira Zees', 
                'jabatan' => 'Kepala Lingkungan 4',
                'foto' => 'default.jpg',
                'id_lembaga' => '1',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama' => 'Mohammad Hidayat Chandra', 
                'jabatan' => 'Kepala Lingkungan 5',
                'foto' => 'default.jpg',
                'id_lembaga' => '1',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama' => 'Abrianto Nusi', 
                'jabatan' => 'Ketua PKK',
                'foto' => 'default.jpg',
                'id_lembaga' => '2',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama' => 'Rian Sulistio', 
                'jabatan' => 'Sekretaris PKK',
                'foto' => 'default.jpg',
                'id_lembaga' => '2',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama' => 'Shania A. Paudi', 
                'jabatan' => 'Bendahara PKK',
                'foto' => 'default.jpg',
                'id_lembaga' => '2',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama' => 'Mohammad Ilham Akbar', 
                'jabatan' => 'Ketua Karang Taruna',
                'foto' => 'default.jpg',
                'id_lembaga' => '3',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama' => 'Agung Akuba', 
                'jabatan' => 'Sekretaris Karang Taruna',
                'foto' => 'default.jpg',
                'id_lembaga' => '3',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama' => 'Agung Pakaya', 
                'jabatan' => 'Bendahara Karang Taruna',
                'foto' => 'default.jpg',
                'id_lembaga' => '3',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ];

        DB::table('anggota_lembaga')->insert($data);
        
        $this->command->info('Berhasil Menambahkan 4 baris di tabel anggota_lembaga');
    }
}
