<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class NameProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //it is use to register service provider
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        // it is use to call single service provider
        // that is registered in register
    }
}
