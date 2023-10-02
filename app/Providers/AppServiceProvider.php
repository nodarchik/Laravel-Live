<?php

namespace App\Providers;

use App\Interfaces\CurrencyRepositoryInterface;
use App\Interfaces\UserRepositoryInterface;
use App\Repositories\UserRepository;
use App\Repositories\CurrencyRepository;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;
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
        $this->app->bind(UserRepositoryInterface::class, UserRepository::class);
        $this->app->bind(CurrencyRepositoryInterface::class, CurrencyRepository::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Response::macro('apiResponse', function ($status, $message, $data = null) {
            return response()->json([
                'status' => $status,
                'message' => $message,
                'data' => $data,
            ]);
        });
    }
}
