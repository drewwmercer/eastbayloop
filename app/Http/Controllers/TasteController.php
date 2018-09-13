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
}
