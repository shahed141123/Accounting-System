<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Setting;
use App\Models\Wishlist;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use Exception;
use Illuminate\Support\Facades\Auth;

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
        // Set default values
        View::share('setting', null);
        View::share('wishlistCount', 0);
        View::share('categories', null);

        try {
            // Check for table existence and set actual values
            if (Schema::hasTable('settings')) {
                View::share('setting', Setting::first());
            }

            if (Schema::hasTable('wishlists') && Auth::check()) {
                $userId = Auth::user()->id;
                $wishlistCount = Wishlist::where('user_id', $userId)->count();
                View::share('wishlistCount', $wishlistCount);
            }

            if (Schema::hasTable('categories')) {
                View::share('categories', Category::active()->get());
            }
        } catch (Exception $e) {
            // Log the exception if needed
        }

        Paginator::useBootstrap();
    }
}
