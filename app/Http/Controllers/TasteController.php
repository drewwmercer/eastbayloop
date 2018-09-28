<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TasteController extends Controller
{
    public function index()
    {
        return view('taste.index');
    }

    public function showBar()
    {
        return view('taste.bar');
    }

    public function showBars()
    {
        return view('taste.bars-breweries-distilaries');
    }

    public function showBarWineLoopContact()
    {
        return view('taste.bars-wine-loop-contact');
    }

    public function showWinery()
    {
        return view('taste.wineries-visit');
    }

    public function showBuyWine()
    {
        return view('taste.buy-wine');
    }

    public function showPartner()
    {
        return view('taste.community-partners');
    }

    public function showWineryEvents()
    {
        return view('taste.event');
    }

    public function showCoffeeShops()
    {
        return view('taste.coffee-shops');
    }

    public function showFoodTruck()
    {
        return view('taste.food-truck');
    }

    public function showRestaurants()
    {
        return view('taste.restaurants');
    }

    public function showBookTasting()
    {
        return view('taste.book-your-tasting');
    }

    public function showChefsCorner()
    {
        return view('taste.chefs-corner');
    }

    public function showChefsCornerProfile()
    {
        return view('taste.chefs-corner-profile');        
    }

    public function showMixology()
    {
        return view('taste.mixology');
    }

    public function showGallery()
    {
        return view('taste.gallery');
    }

    public function showWineLoop()
    {
        return view('taste.wine-loop');
    }

    public function showWineLoopContact()
    {
        return view('taste.wine-loop-contact');
    }
}
