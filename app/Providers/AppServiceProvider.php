<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot()
    {
        Paginator::defaultView('vendor.pagination.custom');
    
    // Optional: Control how many links are shown on each side of current page
    Paginator::useBootstrapFive();
    Paginator::defaultSimpleView('vendor.pagination.custom');
    }
}
