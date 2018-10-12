<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventsController extends Controller
{
    public function index()
    {
        return view('events.index');
    }

    public function showProfile()
    {
        return view('events.profile');
    }

    public function showMore()
    {
        return view('events.more');
    }

    public function showProducts()
    {
        return view('events.products');
    }

    public function showProduct()
    {
        return view('events.product');
    }
}
