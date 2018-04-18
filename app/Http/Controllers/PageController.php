<?php

namespace App\Http\Controllers;

use App\Model\FundamentalSetting;
use App\Model\Gallery;
use App\Model\Page;
use App\Model\Service;

class PageController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $settings = FundamentalSetting::pluck('value', 'key');
        $galleries = Gallery::latest()->take(6)->get();
        $services = Service::take(6)->get();
        $galleryServices = Service::whereHas('galleries')->get();
        $pages = Page::all();
        $page = $pages->where('key', 'home')->first();
        return view('pages.home')
            ->with('page', $page)
            ->with('pages', $pages)
            ->with('services', $services)
            ->with('galleryServices', $galleryServices)
            ->with('galleries', $galleries)
            ->with('settings', $settings);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @throws \Illuminate\Database\Eloquent\ModelNotFoundException
     */
    public function aboutAs()
    {
        $page = Page::where('key', 'about_us')->firstOrFail();
        return view('pages.about_us')
            ->with('page', $page);
    }

}
