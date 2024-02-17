<?php

namespace App\Http\Controllers;

use App\DTOs\Sales\SaleStoreDTO;
use App\Http\Requests\SaleStoreRequest;
use App\Models\Sale;
use App\Repositories\Contracts\SaleRepositoryInterface;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class SaleController extends Controller
{
    public function __construct(
        protected SaleRepositoryInterface $saleRepository,
    ) {
        //
    }

    /**
     * Display a listing of the sales by seller id.
     * 
     * @param  string $sellerId
     * 
     * @return View
     */
    public function show(string $sellerId): View
    {
        $sales = $this->saleRepository->findSalesBySeller($sellerId);
        return view('sales.sales', compact('sales'));
    }

    /**
     * Show the form for creating a new sale.
     * 
     * @return  View
     */
    public function create(): View
    {
        return view('sales.create');
    }

    /**
     * Store a newly created sale in storage.
     * 
     * @param  SaleStoreRequest $request
     * 
     * @return RedirectResponse
     */
    public function store(SaleStoreRequest $request): RedirectResponse
    {
        $data = $request->validated();
        $this->saleRepository->storeSaleToSeller($data);
        return redirect()->back();
    }
}
