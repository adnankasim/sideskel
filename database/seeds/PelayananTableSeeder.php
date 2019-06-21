<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class PelayananTableSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();
        foreach(range(1, 15) as $index){
            DB::insert('insert into pelayanan (nama, keterangan, created_at, updated_at) values (:nama, :keterangan, :created_at, :updated_at)',
            [
              'nama' => $faker->sentence(),
              'keterangan' => $faker->paragraph(),
              'created_at' => $faker->dateTime(),
              'updated_at' => $faker->dateTime()
            ]);
        }
        $this->command->info('Berhasil Menambahkan 15 baris di tabel pelayanan');
    }
}
