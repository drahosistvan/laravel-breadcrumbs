<?php

namespace Isti\Laravel\Breadcrumbs;

use Config;
use Illuminate\Contracts\Support\Arrayable;
use Isti\Laravel\Breadcrumbs\Exceptions\InvalidBreadcrumbItemException;
use IteratorAggregate;
use ArrayIterator;
use Countable;

class Breadcrumbs implements IteratorAggregate, Countable, Arrayable
{
    protected $items = [];

    public function push($item)
    {
        if (empty($this->items)) {
            $this->initTitle();
        }
        $this->arrayPush($item);

        return $this;
    }

    public function add($title, $url = false)
    {
        $this->push(new BreadcrumbItem($title, $url));

        return $this;
    }

    public function count()
    {
        return count($this->items);
    }

    public function last()
    {
        $this->initTitle();
        return end($this->items);
    }

    protected function arrayPush($item)
    {
        if (!is_a($item, BreadcrumbItem::class)) {
            throw new InvalidBreadcrumbItemException('You can push only BreadcrumbItems to Breadcrumbs collection');
        }
        $this->items[] = $item;
    }

    public function getIterator()
    {
        return new ArrayIterator($this->items);
    }

    public function toArray()
    {
        return $this->items;
    }

    protected function initTitle() {
        if (empty($this->items)) {
            $this->items[] = new BreadcrumbItem(__('laravel-breadcrumbs::breadcrumbs.home_title'), Config::get('breadcrumbs.home.url'));
        }
    }
}
