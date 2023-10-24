<?php

namespace App\Providers;

use App\Interfaces\{
    EssentialRepositoryInterface,
    ProductRepositoryInterface,
    CategoryRepositoryInterface
};
use App\Repositories\{
    EssentialRepository,
    ProductRepository,
    CategoryRepository
};
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
        $this->app->bind(EssentialRepositoryInterface::class, EssentialRepository::class);
        $this->app->bind(ProductRepositoryInterface::class, ProductRepository::class);
        $this->app->bind(CategoryRepositoryInterface::class, CategoryRepository::class);
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
