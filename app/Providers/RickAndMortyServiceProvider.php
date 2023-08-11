<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RickAndMortyServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('rickandmorty', function ($app){
            return new \App\Api\RickAndMorty();
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
