<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('admin.layouts.dashboard', 'App\Http\ViewComposers\DashboardComposer');
        view()->composer('front_end.layouts.site', 'App\Http\ViewComposers\SiteComposer');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
