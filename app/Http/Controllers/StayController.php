<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StayController extends Controller
{
    public function index()
    {
        return view('stay.index');
    }

    public function showSell()
    {
        return view('stay.stay-sell');
    }

    public function showVendor()
    {
        return view('stay.vendor-sell');
    }

    public function showProfile()
    {
        return view('stay.profile');
    }
}
