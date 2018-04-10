<?php

namespace App\Providers;

use App\Model\FundamentalSetting;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Register bindings in the container.
     *
     * @return void
     */
    public function boot()
    {
        // Using class based composers...
        View::composer('layouts.app', function (\Illuminate\View\View $view) {
            $settings = FundamentalSetting::pluck('value', 'key');
            $view->with('settings', $settings);
        });
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}