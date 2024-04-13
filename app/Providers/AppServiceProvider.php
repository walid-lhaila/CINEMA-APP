<?php

    namespace App\Providers;

    use App\Repositories\AdminRepository;
    use App\Repositories\RegisterRepository;
    use App\Services\AdminService;
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

        public function admin(): void
        {
            $this->app->bind(
                AdminService::class,
                function ($app) {
                    return new AdminService(new AdminRepository());
                }
            );
        }

        /**
         * Bootstrap any application services.
         */
        public function boot(): void
        {
            $this->admin();
        }
    }
