<?php

namespace Apertus\Laravel\Breadcrumbs;

use Illuminate\Support\Collection;

class Breadcrumbs extends Collection
{

    public function __construct()
    {
        $this->add('Kezdőlap', url('/'));
    }

    public function push($item)
    {
        if (!is_a($item, BreadcrumbItem::class) ) {
            throw new \Exception('You can push only BreadcrumbItems to Breadcrumbs collection');
        }
        $this->offsetSet(null, $item);

        return $this;
    }

    public function put($title, $url)
    {
        $this->push(new BreadcrumbItem($title, $url));

        return $this;
    }

    public function add($title, $url = false)
    {
        $this->push(new BreadcrumbItem($title, $url));

        return $this;
    }
}