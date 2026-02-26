<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Str;

class CustomProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        Str::macro('app_name', function ($name) {
            return strtoupper(str_replace(" ", '-', $name));
        });
    }
}
