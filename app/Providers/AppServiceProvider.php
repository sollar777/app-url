<?php

namespace App\Providers;

use App\Contracts\Url\UrlConsumer;
use App\Contracts\Url\UrlInterface;
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
        $this->app->bind(
            UrlInterface::class,
            UrlConsumer::class     
        );
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
