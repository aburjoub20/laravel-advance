<?php

namespace App\Providers;
use App\Http\Interfaces\ClientsInterface;
use App\Http\Repositories\ClientsRepositories;

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
        $this->app->bind(ClientsInterface::class, ClientsRepositories::class);

    }
}
