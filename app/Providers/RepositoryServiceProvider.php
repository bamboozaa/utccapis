<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Interfaces\ProductRepositoryInterface;
use App\Repositories\ProductRepository;
use App\Interfaces\DownloadRepositoryInterface;
use App\Repositories\DownloadRepository;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(ProductRepositoryInterface::class,ProductRepository::class);
        $this->app->bind(DownloadRepositoryInterface::class,DownloadRepository::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
