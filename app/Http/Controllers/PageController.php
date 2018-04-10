<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
//        $banners = Banner::published()->get();
//        $reviews = Review::published()->onMain()->get();
//        $contacts = ['tel1', 'tel2', 'email1', 'email2', 'geometry', 'address'];
//        $settings = FundamentalSetting::whereIn('key' , $contacts)->pluck('value', 'key');
        return view('home');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function aboutAs()
    {
        return view('about_us');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function portfolio()
    {
        return view('portfolio');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function singleServices()
    {
        return view('single_services');
    }

}
