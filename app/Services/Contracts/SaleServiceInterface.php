<?php

namespace App\Services\Contracts;

use Illuminate\Database\Eloquent\Collection;

interface SaleServiceInterface
{
    /**
     * Get all sales by seller.
     * 
     * @param  string $sellerId
     * 
     * @return Collection
     */
    public function findSalesBySeller(string $sellerId): Collection;

    /**
     * Store a new sale to seller.
     * 
     * @param  array $saleData
     * 
     * @return void
     */
    public function storeSaleToSeller(array $saleData): void;
}