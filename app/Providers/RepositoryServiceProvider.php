<?php

namespace App\Providers;

use App\Repositories\Contracts\SellerRepositoryInterface;
use App\Repositories\SellerRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(
            SellerRepositoryInterface::class,
            SellerRepository::class,
        );
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
