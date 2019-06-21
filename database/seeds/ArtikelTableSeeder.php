<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ArtikelTableSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();
        foreach(range(1, 15) as $index){
            DB::insert('insert into artikel (judul_artikel, slug_artikel, isi_artikel, gambar_artikel, is_valid, id_pengguna, created_at, updated_at) values (:judul_artikel, :slug_artikel, :isi_artikel, :gambar_artikel, :is_valid, :id_pengguna, :created_at, :updated_at)',
            [
              'judul_artikel' => $faker->sentence(),
              'slug_artikel' => $faker->slug,
              'isi_artikel' => $faker->paragraph(),
              'gambar_artikel' => 'img_1.jpg',
              'is_valid' => $faker->randomElement(['ya', 'tidak']),
              'id_pengguna' => mt_rand(1, 10),
              'created_at' => $faker->dateTime(),
              'updated_at' => $faker->dateTime()
            ]);
        }
        $this->command->info('Berhasil Menambahkan 15 baris di tabel artikel');
    }
}
