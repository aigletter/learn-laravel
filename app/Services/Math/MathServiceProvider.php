<?php

namespace App\Services\Math;

use Illuminate\Support\ServiceProvider;
use Psr\Log\LoggerInterface;

class MathServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton('math', function () {
            return new Math(
                $this->app->get(LoggerInterface::class)
            );
        });

        $this->app->alias('math', MathInterface::class);
    }

    public function boot(LoggerInterface $logger, Math $math)
    {
        //$logger = $this->app->get(LoggerInterface::class);
        $logger->debug("Registering our services");
    }
}
