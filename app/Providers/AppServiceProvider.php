<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\DB;

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
        // Share menus globally to all views
        View::composer('*', function ($view) {
            $menus = DB::table('menus')->get(); // Ambil data dari tabel menus
            $view->with('menus', $menus); // Bagikan ke semua view
        });
    }
}
