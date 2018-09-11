<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FashionController extends Controller
{
    public function index()
    {
        return view('fashion.index');
    }

    public function showProduct()
    {
        return view('fashion.product-page');
    }
}
