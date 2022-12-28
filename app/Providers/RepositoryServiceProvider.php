<?php

namespace App\Providers;

use App\Interfaces\SaleRepositoryInterface;
use App\Interfaces\SalesRepositoryInterface;
use App\Interfaces\UserRepositoryInterface;
use App\Repositories\SaleRepository;
use App\Repositories\SalesRepository;
use App\Repositories\UserRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(UserRepositoryInterface::class, UserRepository::class);
        $this->app->bind(SaleRepositoryInterface::class, SaleRepository::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
