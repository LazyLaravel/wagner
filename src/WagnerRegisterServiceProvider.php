<?php

namespace LazyLaravel\Wagner;

use Illuminate\Support\ServiceProvider;
use LazyLaravel\Wagner\Contracts\ProductContracts;

class WagnerRegisterServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(ProductContracts::class, function () {
            return function () {
                echo "wagner says hello";
            };
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '\migrations\\' => database_path('migrations')
        ], 'migrations');
        $this->loadRoutesFrom(__DIR__ . '/routes/wagner.php');
        $this->mergeConfigFrom(__DIR__ . '/config/wagner.php', 'wagner');
    }
}
