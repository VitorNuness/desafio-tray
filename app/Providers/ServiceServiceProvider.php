<?php

namespace App\Providers;

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
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
