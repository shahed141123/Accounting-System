<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Setting;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use Exception;

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
    public function boot(): void
    {
        try {
            if (Schema::hasTable('settings')) {
                View::share('setting', Setting::first());
            } else {
                View::share('setting', null);
            }
            if (Schema::hasTable('categories')) {
                View::share('categories', Category::active()->get());
            } else {
                View::share('categories', null);
            }
        } catch (Exception $e) {
            View::share('setting', null);
            View::share('categories', null);
        }
        Paginator::useBootstrap();

    }
}
