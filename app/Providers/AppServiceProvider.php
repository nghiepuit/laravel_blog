<?php

namespace App\Providers;

use App\Repositories\Blog\BlogEloquentRepository;
use App\Repositories\Blog\IBlogRepository;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            IBlogRepository::class,
            BlogEloquentRepository::class
        );
    }
}
