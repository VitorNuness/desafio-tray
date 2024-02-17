<?php

namespace App\Providers;

use App\Services\SaleService;
use App\Services\Contracts\SaleServiceInterface;
use App\Services\Contracts\SellerServiceInterface;
use App\Services\SellerService;
use Illuminate\Support\ServiceProvider;

class ServiceServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(
            SellerServiceInterface::class,
            SellerService::class,
        );

        $this->app->bind(
            SaleServiceInterface::class,
            SaleService::class,
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
