<?php

namespace App\Providers;

use App\Services\BlogService;
use \Carbon\Carbon;
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
        // Set default Locale
       Carbon::setLocale(env('LOCALE', 'pt-br'));
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
//        $this->app->bind(BlogService::class);
    }

//    public function provides()
//    {
//        return [
//            BlogService::class
//        ];
//    }
}
