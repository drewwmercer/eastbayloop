<?php

namespace App\Http\Controllers;

use App\Page;

class StaticPagesController extends Controller
{
    public function index(Page $page)
    {
        return view('pages.' . $page->slug)->with([
            'page' => $page
        ]);
    }
}
