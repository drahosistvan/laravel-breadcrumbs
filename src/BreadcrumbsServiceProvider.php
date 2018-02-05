<?php

namespace Apertus\Laravel\Breadcrumbs;

use Illuminate\Support\ServiceProvider;

class BreadcrumbsServiceProvider extends ServiceProvider
{
    /**
     * Register the Breadcrumbs service.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('Breadcrumbs', function () {
            return new Breadcrumbs();
        });
    }
}