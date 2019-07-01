<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Profil;
use App\Penduduk;
use App\Pengaturan;
use App\Artikel;
use App\Lembaga;

class ProfilServiceProvider extends ServiceProvider
{
    public function register()
    {
        //
    }

    public function boot()
    {
        view()->composer('*', function($view){
            $view->with('profil', Profil::find(1));
        });

        view()->composer('penduduk.cari', function($view){
            $view->with('daftar_agama', Penduduk::distinct('agama')->pluck('agama', 'agama'));
        });

        view()->composer('beranda.*', function($view){
            $view->with('pengaturan', Pengaturan::findOrFail(1));
        });

        view()->composer('*', function($view){
            $view->with('artikel_invalid', Artikel::where('is_valid', 'tidak'));
        });

        view()->composer('anggota-lembaga.form', function($view){
            $view->with('daftar_lembaga', Lembaga::pluck('nama', 'id'));
        });

    }
}
