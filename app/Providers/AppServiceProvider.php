<?php

namespace App\Providers;

use App\Services\Math\Math;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //$this->app->instance('log', new \stdClass());

        // $this->app - контейнер
        /*$math = new Math();
        $this->app->instance('math', $math);*/

        /*$this->app->bind('math', function () {
            return new Math();
        });*/

        $this->app->singleton('math', function () {
            return new Math();
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
