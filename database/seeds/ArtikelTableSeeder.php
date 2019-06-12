<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ArtikelTableSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();
        foreach(range(1, 15) as $index){
            DB::insert('insert into artikel (judul_artikel, slug_artikel, isi_artikel, gambar_artikel, waktu_artikel, id_pengguna) values (:judul_artikel, :slug_artikel, :isi_artikel, :gambar_artikel, :waktu_artikel, :id_pengguna)',
            [
              'judul_artikel' => $faker->sentence(),
              'slug_artikel' => $faker->slug,
              'isi_artikel' => $faker->paragraph(),
              'gambar_artikel' => 'img_1.jpg',
              'waktu_artikel' => $faker->dateTime(),
              'id_pengguna' => mt_rand(1, 10)
            ]);
        }
        $this->command->info('Berhasil Menambahkan 15 baris di tabel artikel');
    }
}
