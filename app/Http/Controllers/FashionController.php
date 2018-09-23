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

    public function showHautreCoutre()
    {
        return view('fashion.hautre-coutre');
    }

    public function showMustHaves()
    {
        return view('fashion.must-haves');
    }

    public function showSpotlightOn()
    {
        return view('fashion.spotlight-on');
    }
}
