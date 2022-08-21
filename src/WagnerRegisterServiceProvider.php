<?php

namespace LazyLaravel\Wagner;

use Illuminate\Support\ServiceProvider;

class WagnerRegisterServiceProvider extends ServiceProvider
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
        $this->publishes([
            __DIR__ . '\migrations\\' => database_path('migrations')
        ], 'migrations');
    }
}
