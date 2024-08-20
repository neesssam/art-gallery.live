<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        // You can leave this method empty if there are no services to register
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // You can leave this method empty if there's nothing to bootstrap
    }
}
