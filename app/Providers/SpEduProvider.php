<?php

namespace App\Providers;

use App\Services\SpEdu\SumLogic;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Support\ServiceProvider;

class SpEduProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(SumLogic::class, function (Application $app) {
            return new SumLogic(3);
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
