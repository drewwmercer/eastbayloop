<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class ExploreController extends Controller
{
    /**
     * @var string
     */
    const PAGES_FOLDER = 'explore.pages.';

    /**
     * @var string
     */
    const DEFAULT_VIEW = 'explore.pages.default';

    public function index()
    {
        return view('explore.index');
    }

    public function show(string $category)
    {
        if (View::exists(self::PAGES_FOLDER . $category)) {
            return view(self::PAGES_FOLDER . $category, ['category' => ucfirst($category)]);
        }

        return view(self::DEFAULT_VIEW, ['category' => ucfirst($category)]);        
    }
}
