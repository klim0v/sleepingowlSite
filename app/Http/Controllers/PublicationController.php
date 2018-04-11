<?php

namespace App\Http\Controllers;

class PublicationController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function blog()
    {
        return view('pages.publications.strips');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function blogSingle()
    {
        return view('pages.publications.single');
    }
}
