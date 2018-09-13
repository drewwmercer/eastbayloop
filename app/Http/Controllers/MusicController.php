<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MusicController extends Controller
{
    public function index()
    {
        return view('music.index');
    }

    public function showProducts()
    {
        return view('music.product-page');
    }

    public function showProduct()
    {
        return view('music.per-product');
    }
}
