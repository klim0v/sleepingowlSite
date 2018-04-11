<?php

namespace App\Http\Controllers;

use App\Model\Gallery;
use App\Model\Service;

class PortfolioController extends Controller
{

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function portfolio()
    {
        $galleries = Gallery::paginate(6);
        $services = Service::whereHas('galleries')->get();
        return view('pages.portfolio.strips')
            ->with('galleries', $galleries)
            ->with('services', $services);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function gallery(string $slug)
    {
        $gallery = Gallery::whereSlug($slug)->firstOrFail();
        return view('pages.portfolio.gallery')->with('gallery', $gallery);
    }
}
