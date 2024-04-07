<?php

namespace App\Providers;

use App\Repositories\RegisterRepository;
use App\Services\RegisterService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(
            RegisterService::class,
            function ($app) {
                return new RegisterService(new RegisterRepository());
            }
        );
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
