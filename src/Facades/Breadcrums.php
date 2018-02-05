<?php

namespace Apertus\Laravel\Breadcrumbs\Facades;

use Illuminate\Support\Facades\Facade;

class Breadcrumbs extends Facade
{
    /**
     * Get the name of the class registered in the Application container.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return static::$app['Breadcrumbs'];
    }
}
