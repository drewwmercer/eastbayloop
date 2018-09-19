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
        $view = strtolower(str_replace(' ', '-', $category));

        if (View::exists(self::PAGES_FOLDER . $view)) {
            return view(self::PAGES_FOLDER . $view, ['category' => ucfirst($category)]);
        }

        return view(self::DEFAULT_VIEW, ['category' => ucfirst($category)]);
    }

    public function showProfile()
    {
        return view('explore.pages.profile');
    }

    public function showNightLife()
    {
        return view('explore.pages.clubs');
    }

    public function showStore()
    {
        return view('explore.pages.store');
    }

    public function showStoreProducts()
    {
        return view('explore.pages.products');
    }

    public function showStoreProduct()
    {
        return view('explore.pages.product');
    }
}
