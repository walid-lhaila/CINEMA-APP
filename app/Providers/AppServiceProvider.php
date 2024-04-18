<?php

    namespace App\Providers;

    use App\Http\Controllers\RoomController;
    use App\Repositories\AdminRepository;
    use App\Repositories\CategoryRepository;
    use App\Repositories\CinemaRepository;
    use App\Repositories\LoginRepository;
    use App\Repositories\RegisterRepository;
    use App\Repositories\RoomRepository;
    use App\Services\AdminService;
    use App\Services\CategoryService;
    use App\Services\CinemaService;
    use App\Services\LoginService;
    use App\Services\RegisterService;
    use App\Services\RoomService;
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
        public function cinema(): void
        {
            $this->app->bind(
                CinemaService::class,
                function ($app) {
                    return new CinemaService(new CinemaRepository());
                }
            );
        }

        public function category(): void
        {
            $this->app->bind(
                CategoryService::class,
                function ($app) {
                    return new CategoryService(new CategoryRepository());
                }
            );
        }
        public function login(): void
        {
            $this->app->bind(
                LoginService::class,
                function ($app) {
                    return new LoginService(new LoginRepository());
                }
            );
        }
        public function room(): void
        {
            $this->app->bind(
                RoomService::class,
                function ($app) {
                    return new RoomService(new RoomRepository());
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
