<?php

namespace App\Http\Controllers;

use App\Model\Gallery;
use App\Model\Page;
use App\Model\Service;

class PortfolioController extends Controller
{

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function portfolio()
    {
        $page = Page::where('key', 'portfolio')->firstOrFail();
        $galleries = Gallery::paginate(6);
        $services = Service::whereHas('galleries')->get();
        return view('pages.portfolio.strips')
            ->with('page', $page)
            ->with('galleries', $galleries)
            ->with('services', $services);
    }

    /**
     * @param string $slug
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function gallery(string $slug)
    {
        $gallery = Gallery::whereSlug($slug)->firstOrFail();
        return view('pages.portfolio.gallery')->with('gallery', $gallery);
    }
}
