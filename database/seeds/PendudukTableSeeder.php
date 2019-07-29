<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class PendudukTableSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();
        foreach(range(1, 75) as $index){
            DB::insert('insert into penduduk (nik, nama_penduduk, alamat_penduduk, status_menikah, jenis_kelamin, tempat_lahir, tanggal_lahir, foto_penduduk, pendidikan_terakhir, golongan_darah, agama, pekerjaan, created_at, updated_at, no_kk, lingkungan, rt, rw) values (:nik, :nama_penduduk, :alamat_penduduk, :status_menikah, :jenis_kelamin, :tempat_lahir, :tanggal_lahir, :foto_penduduk, :pendidikan_terakhir, :golongan_darah, :agama, :pekerjaan, :created_at, :updated_at, :no_kk, :lingkungan, :rt, :rw)',
            [
              'nik' => mt_rand(0000000000000001, 6666666666666666),
              'nama_penduduk' => $faker->name,
              'alamat_penduduk' => $faker->address,
              'status_menikah' => $faker->randomElement(['belum', 'sudah']),
              'jenis_kelamin' => $faker->randomElement(['laki-laki', 'perempuan']),
              'tempat_lahir' => $faker->city,
              'tanggal_lahir' => $faker->date(),
              'foto_penduduk' => 'default.jpg',
              'pendidikan_terakhir' => $faker->randomElement(['tidak sekolah', 'tk', 'sd', 'smp', 'sma', 'd1', 'd2', 'd3', 's1', 's2', 's3']),
              'golongan_darah' => $faker->randomElement(['o', 'a', 'b', 'ab', 'tidak diketahui']),              
              'agama' => $faker->randomElement(['islam', 'katolik', 'hindu', 'budha', 'protestan', 'kong hu cu']),
              'pekerjaan' => $faker->randomElement(['Guru', 'Karyawan Swasta', 'PNS', 'Pengemudi Bentor', 'Nelayan', 'Petani']),
              'created_at' => now(),
              'updated_at' => now(),
              'no_kk' => mt_rand(0000000000000001, 6666666666666666),
              'lingkungan' => $faker->randomElement(['1', '2', '3', '4', '5']),
              'rt' => $faker->randomElement(['1', '2', '3', '4', '5']),
              'rw' => $faker->randomElement(['1', '2', '3', '4', '5'])
            ]);
        }
        $this->command->info('Berhasil Menambahkan 75 baris di tabel penduduk');
    }
}
