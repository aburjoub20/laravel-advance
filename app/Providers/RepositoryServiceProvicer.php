<?php

namespace App\Providers;
// use App\Http\Interfaces\ClientsInterface;
// use App\Http\Repositories\ClientsRepository;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvicer extends ServiceProvider
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
    public function boot() :void
    {
        // $this->app->bind( ClientsRepository::class ,ClientsInterface::class);



        $this->app->bind('App\Http\Interfaces\ClientsInterface','App\Http\Repositories\ClientsRepository');



    }
}
