<?php

namespace App\Http\Controllers;

use App\DTOs\Sales\SaleStoreDTO;
use App\Models\Sale;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class SaleController extends Controller
{
    public function __construct(
        protected Sale $saleModel,
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
        // $sales = $this->saleModel->all()->where('seller_id', $sellerId);
        $sales = $this->saleModel->with('seller')->where('seller_id', $sellerId)->get();
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
     * @param  Request $request
     * 
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        $this->saleModel->create(
            [
                'seller_id' => $request->seller,
                'value' => $request->value,
            ],
        );
        return redirect()->back();
    }
}
