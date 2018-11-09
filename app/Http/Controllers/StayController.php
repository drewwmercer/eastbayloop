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

    public function showClients($category)
    {
        $categories_clients = [
            'HotelsandResorts' => 'Hotels / Resorts',
            'BBandHostels' => 'B&B/HOSTELS',
            'LoopExclusiveVacationPackages' => 'LOOP EXCLUSIVE VACATION PACKAGES',
            'GroupOffersandSpecials' => 'GROUP OFFERS & SPECIALS',
        ];
        $categories_vendors = [
            'shortandlongstayrentals' => 'SHORT & LONG STAY RENTALS',
            'stayforsale' => 'STAY FOR SALE',
        ];
        if (array_key_exists($category, $categories_clients)) {
            return view('stay.stay-sell')->with([
                'category' => $category,
                'category_name' => $categories_clients[$category]
            ]);
        } elseif (array_key_exists($category, $categories_vendors)) {
            return view('stay.vendor-sell')->with([
                'category' => $category,
                'category_name' => $categories_vendors[$category]
            ]);
        } else {
            return abort(404);
        }

    }

    public function showClientsProfile($category)
    {
        return view('stay.profile');
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
