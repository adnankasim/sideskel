<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class PendudukTableSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();
        foreach(range(1, 100) as $index){
            DB::insert('insert into penduduk (nik, nama_penduduk, alamat_penduduk, status_menikah, tempat_lahir, tanggal_lahir, foto_penduduk, pendidikan_terakhir, golongan_darah, status_hidup, agama, pekerjaan) values (:nik, :nama_penduduk, :alamat_penduduk, :status_menikah, :tempat_lahir, :tanggal_lahir, :foto_penduduk, :pendidikan_terakhir, :golongan_darah, :status_hidup, :agama, :pekerjaan)',
            [
              'nik' => mt_rand(0000000000000001, 6666666666666666),
              'nama_penduduk' => $faker->name,
              'alamat_penduduk' => $faker->address,
              'status_menikah' => $faker->randomElement(['belum', 'sudah']),
              'tempat_lahir' => $faker->city,
              'tanggal_lahir' => $faker->date(),
              'foto_penduduk' => 'default.jpg',
              'pendidikan_terakhir' => $faker->randomElement(['sd', 'smp', 'sma', 'd1', 'd2', 'd3', 's1', 's2', 's3']),
              'golongan_darah' => $faker->randomElement(['o', 'a', 'b', 'ab']),
              'status_hidup' => $faker->randomElement(['hidup', 'meninggal']),
              
              'agama' => $faker->randomElement(['islam', 'katolik', 'hindu', 'budha', 'protestan', 'kong hu cu']),
              'pekerjaan' => $faker->randomElement(['Guru', 'Karyawan Swasta', 'PNS', 'Pengemudi Bentor', 'Nelayan', 'Petani'])
            ]);
        }
        $this->command->info('Berhasil Menambahkan 100 baris di tabel penduduk');
    }
}
