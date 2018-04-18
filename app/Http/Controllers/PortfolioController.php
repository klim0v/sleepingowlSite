<?php

namespace App\Http\Controllers;

use App\Model\Gallery;
use App\Model\Page;
use App\Model\Service;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function portfolio(Request $request)
    {
        $page = Page::where('key', 'portfolio')->firstOrFail();
        $galleries = Gallery::when($request->has('service'), function (Builder $query) use ($request) {
            $query->where('service_id', Service::whereSlug($request->input('service'))->first()->id);
        })
            ->paginate(6);
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
