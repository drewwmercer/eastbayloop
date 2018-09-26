<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MarketPlaceController extends Controller
{
    public function index()
    {
        return view('market-place.index');
    }

    public function showRetails()
    {
        return view('market-place.retails-business');
    }

    public function showProducts()
    {
        return view('market-place.product-page');
    }

    public function showProduct()
    {
        return view('market-place.per-product');
    }
}
