<?php

namespace App\Providers;

use App\Interfaces\SaleRepositoryInterface;
use App\Interfaces\ItemsRepositoryInterface;
use App\Interfaces\ExpenseRepositoryInterface;
use App\Interfaces\UserRepositoryInterface;
use App\Repositories\SaleRepository;
use App\Repositories\ItemsRepository;
use App\Repositories\ExpenseRepository;
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
        $this->app->bind(ExpenseRepositoryInterface::class, ExpenseRepository::class);
        $this->app->bind(ItemsRepositoryInterface::class, ItemsRepository::class);
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
