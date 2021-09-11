<?php

namespace Isti\Laravel\Breadcrumbs;

use Illuminate\Support\ServiceProvider;
use View;

class BreadcrumbsServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any package services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'breadcrumbs');
    }

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
            __DIR__ . '/../config/breadcrumbs.php' => config_path('breadcrumbs.php'),
        ]);

        View::share('breadcrumbs', $this->app['Breadcrumbs']);
    }
}
