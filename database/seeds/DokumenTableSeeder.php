<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class DokumenTableSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();
        foreach(range(1, 25) as $index){
            DB::insert('insert into dokumen (file, keterangan, created_at, updated_at) values (:file, :keterangan,  :created_at, :updated_at)',
            [
              'file' => 'default.pdf',
              'keterangan' => $faker->sentence(),
              'created_at' => $faker->dateTime(),
              'updated_at' => $faker->dateTime()
            ]);
        }
        $this->command->info('Berhasil Menambahkan 25 baris di tabel dokumen');
    }
}
