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
              'keterangan' => 
              'Untuk pengurusan layanan ABC silahkan ke kantor dengan ketentuan sebagai berikut : <br>
              1. Nunc vehicula ornare purus in vulputate. Sed congue justo ligula, a fermentum neque ullamcorper vel. Etiam a aliquet mi, vel consectetur ex. <br>
                2. Nunc vehicula ornare purus in vulputate. Sed congue justo ligula, a fermentum neque ullamcorper vel. Etiam a aliquet mi, vel consectetur ex <br>
                3. Nunc vehicula ornare purus in vulputate. Sed congue justo ligula, a fermentum neque ullamcorper vel. Etiam a aliquet mi, vel consectetur ex <br>
                4. Nunc vehicula ornare purus in vulputate. Sed congue justo ligula, a fermentum neque ullamcorper vel. Etiam a aliquet mi, vel consectetur ex <br>
                5. Nunc vehicula ornare purus in vulputate. Sed congue justo ligula, a fermentum neque ullamcorper vel. Etiam a aliquet mi, vel consectetur ex <br>
                6. Nunc vehicula ornare purus in vulputate. Sed congue justo ligula, a fermentum neque ullamcorper vel. Etiam a aliquet mi, vel consectetur ex <br>
                7. Nunc vehicula ornare purus in vulputate. Sed congue justo ligula, a fermentum neque ullamcorper vel. Etiam a aliquet mi, vel consectetur ex <br>',
              'created_at' => $faker->dateTime(),
              'updated_at' => $faker->dateTime()
            ]);
        }
        $this->command->info('Berhasil Menambahkan 15 baris di tabel pelayanan');
    }
}
