<?php

namespace App\Http\Controllers;

use App\Model\Banner;
use App\Model\FundamentalSetting;
use App\Model\Gallery;
use App\Model\Review;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $banners = Banner::published()->get();
        $reviews = Review::published()->get();
        $gallery = Gallery::published()->onMain()->get(['title', 'cover'])->first();
        $countGal = Gallery::published()->count() - 1;
        $count_work = trans_choice('my.count_work', $countGal, ['value' => $countGal]);
        $contacts = ['tel1', 'tel2', 'email1', 'email2'];
        $settings = FundamentalSetting::whereIn('key' , $contacts)->pluck('value', 'key');
//        dd($settings->get('tel1'));
        return view('home')
            ->with('banners', $banners)
            ->with('gallery', $gallery)
            ->with('count_work', $count_work)
            ->with('reviews', $reviews)
            ->with('settings', $settings);
    }
}
