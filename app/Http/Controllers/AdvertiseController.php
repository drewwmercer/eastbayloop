<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdvertiseController extends Controller
{
    public function index()
    {
        return view('advertise.index');
    }

    public function showBecomeUser()
    {
        return view('advertise.become-user');
    }

    public function showBecomeBusiness()
    {
        return view('advertise.become-business');
    }

    public function showBusinessContact()
    {
        return view('advertise.business-contact');
    }

    public function showBusinessContactSubmit()
    {
        return view('advertise.business-contact-submit');
    }
    
    public function showList()
    {
        return view('advertise.list');
    }
}
