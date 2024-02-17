<?php

namespace App\Services\Reports;

use App\Repositories\Contracts\SaleRepositoryInterface;
use App\Repositories\Contracts\SellerRepositoryInterface;
use App\Services\Reports\Contracts\SalesReportServiceInterface;
use Illuminate\Database\Eloquent\Collection;
use stdClass;

class SalesReportService implements SalesReportServiceInterface
{
    public function __construct(
        protected SaleRepositoryInterface $saleRepository,
        protected SellerRepositoryInterface $sellerRepository,
    )
    {
        //
    }

    /**
     * Generate sales report.
     * 
     * @param  string $sellerId
     * 
     * @return Collection
     */
    public function generate(string $sellerId): stdClass
    {
        $data = [
            'seller' => $this->sellerRepository->findOneSeller($sellerId),
            'sales' => $this->saleRepository->findSalesBySeller($sellerId),
        ];
        return (object) $data;
    }
}