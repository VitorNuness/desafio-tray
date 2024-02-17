<?php

namespace App\Services\Contracts;

use Illuminate\Database\Eloquent\Collection;
use stdClass;

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

    /**
     * Get the total of sales.
     * 
     * @param  array $values
     * 
     * @return float
     */
    public function getTotalInValues(array $values): float;

    /**
     * Get the commission of sale.
     * 
     * @param  float $saleValue
     * 
     * @return float
     */
    public function getCommission(float $saleValue): float;

    /**
     * A list with sales with commission and seller data.
     * 
     * @param  string $sellerId
     * 
     * @return stdClass
     */
    public function listWithComissionAndSeller(string $sellerId): stdClass;
}