<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ServicesProvider extends ServiceProvider
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
        $this->app->bind(\App\Services\ICidadeService::class, \App\Services\CidadeService::class);
        $this->app->bind(\App\Services\IMedicoService::class, \App\Services\MedicoService::class);
        $this->app->bind(\App\Services\IPacienteService::class , \App\Services\PacienteService::class);
        //:end-bindings:
    }
}
