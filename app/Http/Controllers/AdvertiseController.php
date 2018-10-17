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

    public function showBusinessEventsContact()
    {
        return view('advertise.business-events-contact');
    }
    
    public function showList()
    {
        return view('advertise.list');
    }

    public function showEventList()
    {
        return view('advertise.event-listing');
    }

    public function showEventContact()
    {
        return view('advertise.event-contact');
    }

    public function showSellProducts()
    {
        return view('advertise.sell-products');
    }

    public function showSellProductsContact()
    {
        return view('advertise.sell-products-contact');
    }

    public function showFeatureTalent() 
    {
        return view('advertise.feature-talent');
    }

    public function showFeatureTalentContact()
    {
        return view('advertise.feature-talent-contact');
    }
}
