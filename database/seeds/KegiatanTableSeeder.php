<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class KegiatanTableSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();
        foreach(range(1, 15) as $index){
            DB::insert('insert into kegiatan (judul_kegiatan, slug_kegiatan, waktu_kegiatan, deskripsi_kegiatan, poster_kegiatan) values (:judul_kegiatan, :slug_kegiatan, :waktu_kegiatan, :deskripsi_kegiatan, :poster_kegiatan)',
            [
              'judul_kegiatan' => $faker->sentence(),
              'slug_kegiatan' => $faker->slug,
              'waktu_kegiatan' => $faker->dateTime(),
              'deskripsi_kegiatan' => $faker->paragraph(),
              'poster_kegiatan' => 'default.jpg'
            ]);
        }
        $this->command->info('Berhasil Menambahkan 15 baris di tabel kegiatan');
    }
}
