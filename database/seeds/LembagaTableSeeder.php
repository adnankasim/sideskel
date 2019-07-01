<?php

use Illuminate\Database\Seeder;

class LembagaTableSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'nama' => 'Pemerintah Kelurahan', 
                'deskripsi' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Itaque, illum? Expedita aliquam sint aspernatur quae, voluptatum doloremque perspiciatis ipsum laboriosam pariatur error tenetur officiis alias, voluptas quibusdam temporibus modi? Numquam.Soluta autem, commodi sed tenetur vero quia sequi doloribus totam. Accusantium explicabo numquam debitis magni obcaecati odio dicta hic soluta excepturi maiores provident, dolorum molestias qui aut ut eligendi at.',
                'logo' => 'LOGOKABGOR.png',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama' => 'PKK', 
                'deskripsi' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Itaque, illum? Expedita aliquam sint aspernatur quae, voluptatum doloremque perspiciatis ipsum laboriosam pariatur error tenetur officiis alias, voluptas quibusdam temporibus modi? Numquam.Soluta autem, commodi sed tenetur vero quia sequi doloribus totam. Accusantium explicabo numquam debitis magni obcaecati odio dicta hic soluta excepturi maiores provident, dolorum molestias qui aut ut eligendi at.',
                'logo' => 'LOGOKABGOR.png',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama' => 'Karang Taruna', 
                'deskripsi' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Itaque, illum? Expedita aliquam sint aspernatur quae, voluptatum doloremque perspiciatis ipsum laboriosam pariatur error tenetur officiis alias, voluptas quibusdam temporibus modi? Numquam.Soluta autem, commodi sed tenetur vero quia sequi doloribus totam. Accusantium explicabo numquam debitis magni obcaecati odio dicta hic soluta excepturi maiores provident, dolorum molestias qui aut ut eligendi at.',
                'logo' => 'LOGOKABGOR.png',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ];

        DB::table('lembaga')->insert($data);
        
        $this->command->info('Berhasil Menambahkan 3 baris di tabel lembaga');
    }
}
