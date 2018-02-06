<?php
namespace BreadcrumbsTests;

use Config;
use Isti\Laravel\Breadcrumbs\Facades\Breadcrumbs;
use Isti\Laravel\Breadcrumbs\BreadcrumbsServiceProvider;
use Orchestra\Testbench\TestCase as OrchestraTestCase;
use View;

abstract class TestCase extends OrchestraTestCase
{
    /**
     * Load package service provider
     * @param  \Illuminate\Foundation\Application $app
     * @return array
     */
    protected function getPackageProviders($app)
    {
        return [BreadcrumbsServiceProvider::class];
    }
    /**
     * Load package alias
     * @param  \Illuminate\Foundation\Application $app
     * @return array
     */
    protected function getPackageAliases($app)
    {
        return [
            'MyPackage' => Breadcrumbs::class,
        ];
    }
}
