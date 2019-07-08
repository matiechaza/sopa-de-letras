<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use SopaDeLetras\Infrastructure\CommandBus\Contracts\CommandBus;
use SopaDeLetras\Infrastructure\CommandBus\SimpleCommandBus;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            CommandBus::class, SimpleCommandBus::class
        );
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
