<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
// app/Providers/VisitorServiceProvider.php


use App\Models\Visitor;

use View;

class VisitorServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $this->app['router']->pushMiddlewareToGroup('web', \App\Http\Middleware\TrackVisitors::class);

        View::share(
            'visitorCount',

            Visitor::count()
        );
    }
}