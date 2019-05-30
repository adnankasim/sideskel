<?php

use Illuminate\Database\Seeder;

class ProfilTableSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'nama' => 'Bionga',
                'alamat' => 'Kec. Limboto, Kab. Gorontalo, Provinsi Gorontalo',
                'telepon' => '08xx-xxxx-xxxx',
                'email' => 'contoh@email.com',
                'deskripsi' => 
                'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In leo nibh, ornare id nisl at, rhoncus tincidunt ante. Suspendisse potenti. Vivamus ultricies felis nec pharetra placerat. Cras nec massa varius, scelerisque felis ut, rutrum justo. Curabitur ornare dignissim nulla ac vehicula. Mauris at orci id urna eleifend volutpat feugiat eget justo. Nunc molestie dui sit amet ante pharetra viverra. Maecenas augue ex, lacinia quis nisi eget, ultricies vestibulum turpis. Quisque a sem tristique, tincidunt mi eu, scelerisque nisi. Mauris vitae tempus ex.
                <br>
                Cras sodales rutrum elementum. Aenean luctus, eros sit amet ultrices convallis, turpis orci condimentum purus, nec vehicula est felis at justo. Donec iaculis erat non justo fermentum, vel dapibus justo pulvinar. Mauris vestibulum quam odio, non molestie nunc volutpat eu. Maecenas arcu risus, rhoncus rutrum augue a, ultrices malesuada arcu. Fusce sit amet neque blandit augue semper efficitur. In risus magna, mollis sit amet faucibus vel, tempus sed eros. Aliquam ipsum libero, malesuada et nunc ac, pellentesque tincidunt quam.
                <br>
                Mauris ut mi felis. Vivamus in accumsan elit. Fusce id orci vitae erat varius vestibulum. Fusce ac mattis nisl. Sed in elit tellus. Nunc sodales finibus ipsum, et consequat nibh viverra in. Maecenas at ipsum nisl. Etiam vel nibh eget sapien commodo malesuada quis ut diam. In ac nisi sapien. In auctor rutrum consectetur. Morbi vitae rhoncus sapien. Sed nibh arcu, dictum eu ipsum quis, varius scelerisque nisl. Aliquam at fermentum ante.
                <br>
                Sed vulputate laoreet nisi, in rutrum lacus faucibus a. Proin id auctor lectus, at imperdiet ligula. Aliquam varius, ligula in dapibus dictum, nisi dolor vehicula lacus, ut auctor ipsum eros quis sapien. Suspendisse at semper enim, sit amet ullamcorper magna. Integer nec sodales lorem. Donec turpis massa, semper sit amet massa vitae, accumsan porta augue. Donec in tortor ligula. Sed ultrices arcu sed felis semper commodo. Morbi imperdiet justo eget tristique ornare. Nam cursus sagittis massa, sit amet faucibus purus bibendum sed. Phasellus justo est, efficitur vitae fringilla at, imperdiet at mi. Sed eu nisi consectetur ipsum egestas placerat. Nam ullamcorper elit id magna dictum, elementum efficitur augue finibus. Vestibulum tincidunt in turpis nec vestibulum. Quisque non ex non ipsum vulputate tempus et vitae neque.
                <br>
                Nunc vehicula ornare purus in vulputate. Sed congue justo ligula, a fermentum neque ullamcorper vel. Etiam a aliquet mi, vel consectetur ex. Maecenas sed luctus risus. Nam eu fringilla eros. Quisque interdum pulvinar nisi, eleifend bibendum quam convallis sed. Nulla ultricies massa tellus, nec vehicula eros blandit sed. In malesuada nisi euismod mauris tempus luctus. ',
                'logo' => 'default.jpg',
                'visi_misi' => 
                'VISI : "MENJADIKAN DESA TALANGO DESA YANG BERSINAR“ <br>
                MISI : <br>
                1. Memperbaiki dan menambah sarana dan prasarana yang dibutuhkan untuk meningkatkan SDM melalui pendidikan formal dan informal. <br>
                2. Peningkatann pelayanan administrasi <br>
                3. Peningkatan partisipasi masyarakat <br>
                4. Peningkatan peran serta kaum perempuan dalam segala bidang <br>
                5. Meningkatkan pelayanan kesehatan <br>
                6. Meningkatkan kemitraan dalam pembangunan lembaga-lembaga di desa Bongo <br>
                7. Menciptakan Masyarakat Mandiri Dan Bermartabat serta beriman dan bertaqwa kepada Tuhan Yang Maha Esa <br>'
            ]
        ];

        DB::table('profil')->insert($data);
        
        $this->command->info('Berhasil menambahkan 1 baris di tabel profil');

    }
}
