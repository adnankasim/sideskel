<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call(PemerintahanTableSeeder::class);
        $this->call(ProfilTableSeeder::class);
        $this->call(FasilitasPrasaranaTableSeeder::class);
        $this->call(FasilitasEkonomiTableSeeder::class);
        $this->call(FasilitasKesehatanTableSeeder::class);
        $this->call(FasilitasPendidikanTableSeeder::class);
        $this->call(FasilitasPeribadatanTableSeeder::class);
        $this->call(FasilitasPemerintahanTableSeeder::class);
        $this->call(FasilitasPemukimanTableSeeder::class);
        $this->call(InfraMelintasiTableSeeder::class);
        $this->call(PenggunaanTanahTableSeeder::class);
        $this->call(KesuburanTanahTableSeeder::class);
        $this->call(IklimTableSeeder::class);
        $this->call(TipologiTableSeeder::class);
        $this->call(BatasTableSeeder::class);
        $this->call(OrbitasiTableSeeder::class);
        $this->call(DokumenTableSeeder::class);
                
        $this->call(PenggunaTableSeeder::class);
        $this->call(ArtikelTableSeeder::class);
        $this->call(KegiatanTableSeeder::class);
        
        $this->call(TanamanKomoditasTableSeeder::class);
        
        $this->call(PendudukTableSeeder::class);

        $this->call(BelanjaTableSeeder::class);
        $this->call(PendapatanTableSeeder::class);
    }
}
