<?php

namespace App\Repositories\Contracts;

use Illuminate\Database\Eloquent\Collection;

interface SaleRepositoryInterface
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
     * Get all sale by seller and date sale date.
     * 
     * @param  string $sellerId
     * @param  string $date
     * 
     * @return Collection
     */
    public function findSalesBySellerAndDate(string $sellerId, string $date): Collection;

    /**
     * Store a new sale to seller.
     * 
     * @param  array $saleData
     * 
     * @return void
     */
    public function storeSaleToSeller(array $saleData): void;

    /**
     * Get sellerts with have sales on daly.
     * 
     * @return Collection
     */
    public function getSellersWithSales(): Collection;
}