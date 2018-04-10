<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
//        $contacts = ['tel1', 'tel2', 'email1', 'email2', 'geometry', 'address'];
//        $settings = FundamentalSetting::whereIn('key' , $contacts)->pluck('value', 'key');
        return view('pages.home');
    }
}
