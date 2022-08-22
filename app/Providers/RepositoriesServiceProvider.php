<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoriesServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            \App\Contracts\OwnerContract::class,
            \App\Repositories\OwnerRepository::class
        );

        $this->app->bind(
            \App\Contracts\ClassContract::class,
            \App\Repositories\ClassRepository::class
        );

        $this->app->bind(
            \App\Contracts\RollCallContract::class,
            \App\Repositories\RollCallRepository::class
        );
    }
}
