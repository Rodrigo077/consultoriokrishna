<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(\App\Repositories\CidadeEntityRepository::class, \App\Repositories\CidadeEntityRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\MedicoEntityRepository::class, \App\Repositories\MedicoEntityRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\PacienteEntityRepository::class, \App\Repositories\PacienteEntityRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\MedicoPacienteEntityRepository::class, \App\Repositories\MedicoPacienteEntityRepositoryEloquent::class);
        //:end-bindings:
    }
}
