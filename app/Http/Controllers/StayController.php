<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StayController extends Controller
{
    public function index()
    {
        return view('stay.index');
    }
}
