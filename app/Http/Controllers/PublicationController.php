<?php

namespace App\Http\Controllers;

use App\Model\Page;

class PublicationController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function blog()
    {
        $page = Page::where('key', 'blog')->firstOrFail();
        return view('pages.publications.strips')->with('page', $page);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function blogSingle()
    {
        return view('pages.publications.single');
    }
}
