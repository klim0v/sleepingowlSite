<?php

namespace App\Http\Controllers;

use App\Model\Page;
use App\Model\Service;
use \Illuminate\Database\Eloquent\Builder;

class ServiceController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function services()
    {
        $services = Service::limitDepth(0)->get();
        $page = Page::where('key', 'services')->firstOrFail();
        return view('pages.services.strips')
            ->with('page', $page)
            ->with('services', $services);
    }

    /**
     * @param string $slug
     * @param string|null $slug2
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function singleServices(string $slug, string $slug2 = null)
    {
        if (!$slug2) {
            $service = Service::whereSlug($slug)->with('children')->firstOrFail();
            if ($service->children->isNotEmpty()) {
                return view('pages.services.stripsChildren')->with('service', $service);
            }
            return view('pages.services.single')->with('service', $service);
        }
        $service = Service::whereSlug($slug2)->whereHas('parent', function (Builder $query) use ($slug) {
            $query->where('slug', $slug);
        })->with('parent')->firstOrFail();

        return view('pages.services.single')->with('service', $service);
    }
}
