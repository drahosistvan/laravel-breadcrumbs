<?php

namespace Apertus\Laravel\Breadcrumbs\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * Breadcrumbs facade - allows easy access to the Manager instance.
 *
 * @see BreadcrumbsManager
 */
class Breadcrumbs extends Facade
{
    /**
     * Get the name of the class registered in the Application container.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'Breadcrumbs';
    }
}
