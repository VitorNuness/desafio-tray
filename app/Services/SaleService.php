<?php

namespace App\Services;

use App\Repositories\Contracts\SaleRepositoryInterface;
use App\Services\Contracts\SaleServiceInterface;
use Illuminate\Database\Eloquent\Collection;

class SaleService implements SaleServiceInterface
{

    public function __construct(
        protected SaleRepositoryInterface $saleRepository,
    )
    {
        //
    }

    /**
     * Get all sales by seller.
     * 
     * @param  string $sellerId
     * 
     * @return Collection
     */
    public function findSalesBySeller(string $sellerId): Collection
    {
        return $this->saleRepository->findSalesBySeller($sellerId);
    }

    /**
     * Store a new sale to seller.
     * 
     * @param  array $saleData
     * 
     * @return void
     */
    public function storeSaleToSeller(array $saleData): void
    {
        $this->saleRepository->storeSaleToSeller($saleData);
    }
}