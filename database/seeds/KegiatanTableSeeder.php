<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class KegiatanTableSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();
        foreach(range(1, 15) as $index){
            DB::insert('insert into kegiatan (nama_kegiatan, slug_kegiatan, deskripsi_kegiatan, poster_kegiatan, created_at, updated_at) values (:nama_kegiatan, :slug_kegiatan, :deskripsi_kegiatan, :poster_kegiatan, :created_at, :updated_at)',
            [
              'nama_kegiatan' => $faker->sentence(),
              'slug_kegiatan' => $faker->slug,
              'deskripsi_kegiatan' => $faker->paragraph(),
              'poster_kegiatan' => 'img_1.jpg',
              'created_at' => $faker->dateTime(),
              'updated_at' => $faker->dateTime()
            ]);
        }
        $this->command->info('Berhasil Menambahkan 15 baris di tabel kegiatan');
    }
}
