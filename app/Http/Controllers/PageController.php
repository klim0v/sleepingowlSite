<?php

namespace App\Http\Controllers;

use App\Model\Page;

class PageController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $page = Page::where('key', 'home')->firstOrFail();
        return view('pages.home')
            ->with('page', $page);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function aboutAs()
    {
        $page = Page::where('key', 'about_us')->firstOrFail();
        return view('pages.about_us')
            ->with('page', $page);
    }

}
