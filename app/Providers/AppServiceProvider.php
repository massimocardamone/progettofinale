<?php

namespace App\Providers;

use App\Models\Score;
use App\Models\Genre;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;


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
    public function boot():void
    {
        if (Schema::hasTable('genres')) {
            View::share('genres',Genre::all());
            View::share('score',Score::all());
        }
        Paginator::useBootstrap();
    }
}
