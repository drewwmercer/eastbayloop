<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FashionController extends Controller
{
    public function index()
    {
        return view('fashion.index');
    }

    public function showProducts()
    {
        return view('fashion.product-page');
    }

    public function showProduct()
    {
        return view('fashion.per-product');
    }

    public function designerHouseShow()
    {
        return view('fashion.designer-house');
    }
}
