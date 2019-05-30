<?php

use Illuminate\Database\Seeder;

class KesuburanTanahTableSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'uraian_kesuburan_tanah' => 'Sangat Subur', 
                'luas_ha' => '-',
                'keterangan_kesuburan_tanah' => '-'
            ],
            [
                'uraian_kesuburan_tanah' => 'Subur', 
                'luas_ha' => '65,084',
                'keterangan_kesuburan_tanah' => 'Tadah Hujan'
            ],
            [
                'uraian_kesuburan_tanah' => 'Sedang', 
                'luas_ha' => '95,390',
                'keterangan_kesuburan_tanah' => 'Tadah Hujan'
            ],
            [
                'uraian_kesuburan_tanah' => 'Lahan Kritis', 
                'luas_ha' => '-',
                'keterangan_kesuburan_tanah' => '-'
            ]
        ];

        DB::table('kesuburan_tanah')->insert($data);
        
        $this->command->info('Berhasil Menambahkan 4 baris di tabel kesuburan_tanah');
    }
}
