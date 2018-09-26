<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MusicController extends Controller
{
    public function index()
    {
        return view('music.index');
    }

    public function show()
    {
        return view('music.show');
    }

    public function showVenues()
    {
        return view('music.venues');        
    }

    public function showLoopEntertainment()
    {
        return view('music.loop-entertainment');
    }

    public function showProducts()
    {
        return view('music.product-page');
    }

    public function showProduct()
    {
        return view('music.per-product');
    }

    public function showVenuesProfile()
    {
        return view('music.venues-profile');
    }

    public function showRadio()
    {
        return view('music.radio');
    }

    public function showArtistBandDjs()
    {
        return view('music.artist-dj');
    }
}
