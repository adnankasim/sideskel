<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Profil;

class ProfilServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('beranda.*', function($view){
            $view->with('profil', Profil::find(1));
        });
    }
}
