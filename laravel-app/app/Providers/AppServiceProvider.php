<?php

illuminate\Paginator\Paginator
// namespace App\Providers;

use Illuminate\Support\Facades\Paginator; // Corrected import statement
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        // Your code here, if any
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Paginator::useBootstrap();
    }
}