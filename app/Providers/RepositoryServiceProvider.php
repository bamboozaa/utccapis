<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Interfaces\ProductRepositoryInterface;
use App\Repositories\ProductRepository;
use App\Interfaces\DownloadRepositoryInterface;
use App\Repositories\DownloadRepository;
use App\Interfaces\Competency01RepositoryInterface;
use App\Repositories\Competency01Repository;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(ProductRepositoryInterface::class,ProductRepository::class);
        $this->app->bind(DownloadRepositoryInterface::class,DownloadRepository::class);
        $this->app->bind(Competency01RepositoryInterface::class,Competency01Repository::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
