<?php

namespace Isti\Laravel\Breadcrumbs;

use Illuminate\Support\ServiceProvider;
use View;

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

        $this->publishes([
            __DIR__ . '/../config/breadcrumbs.php' => config_path('courier.php'),
        ]);
        
        View::share('breadcrumbs', $this->app['Breadcrumbs']);
    }
}
