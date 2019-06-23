<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class AdminTableSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();
        foreach(range(1, 10) as $index){
            DB::insert('insert into admin (email_admin, nama_admin, password_admin, jenis_kelamin, no_hp, created_at, updated_at) values (:email_admin, :nama_admin, :password_admin, :jenis_kelamin, :no_hp, :created_at, :updated_at)',
            [
              'email_admin' => $faker->email,
              'nama_admin' => $faker->name,
              'password_admin' => $faker->password,
              'jenis_kelamin' => $faker->randomElement(['perempuan', 'laki-laki']),
              'no_hp' => $faker->numberBetween(000000000000, 999999999999),
              'created_at' => now(),
              'updated_at' => now()
            ]);
        }
        $this->command->info('Berhasil Menambahkan 10 baris di tabel admin');
    }
}
