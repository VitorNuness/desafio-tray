<?php

namespace App\Http\Controllers;

use App\Models\Seller;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class SellerController extends Controller
{
    public function __construct(
        protected Seller $sellerModel,
    )
    {
        //
    }

    /**
     * Display a listing of the sellers.
     * 
     * @return View
     */
    public function index(): View
    {
       $sellers = $this->sellerModel->all();
       return view('sellers.index', compact('sellers'));
    }

    /**
     * Show the form for creating a new seller.
     * 
     * @return View
     */
    public function create(): View
    {
        return view('sellers.create');
    }

    /**
     * Store a newly created seller in storage.
     * 
     * @param  Request $request
     * 
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        $data = $request->all();
        $this->sellerModel->create($data);
        return redirect()->route('sellers.index');
    }

    /**
     * Display the specified seller.
     * 
     * @param  string $sellerId
     * 
     * @return View
     */
    public function show(string $sellerId): View
    {
        $seller = $this->sellerModel->findOrFail($sellerId);
        return view('sellers.show', compact('seller'));
    }

    /**
     * Show the form for editing the specified seller.
     * 
     * @param  string $sellerId
     * 
     * @return View
     */
    public function edit(string $sellerId): View
    {
        $seller = $this->sellerModel->findOrFail($sellerId);
        return view('sellers.edit', compact('seller'));
    }

    /**
     * Update the specified seller in storage.
     * 
     * @param  Request $request
     * @param  string $sellerId
     * 
     * @return RedirectResponse
     */
    public function update(Request $request, string $sellerId): RedirectResponse
    {
        $data = $request->all();
        $seller = $this->sellerModel->findOrFail($sellerId);
        $seller->update($data);
        return redirect()->route('sellers.index');
    }

    /**
     * Remove the specified seller from storage.
     * 
     * @param  string $sellerId
     * 
     * @return RedirectResponse
     */
    public function destroy(string $sellerId): RedirectResponse
    {
        $seller = $this->sellerModel->findOrFail($sellerId);
        $seller->delete();
        return redirect()->route('sellers.index');
    }
}
