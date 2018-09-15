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
