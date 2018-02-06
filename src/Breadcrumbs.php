<?php

namespace NkeHr\Services\Breadcrumbs;

use IteratorAggregate;
use ArrayIterator;
use Countable;
use Illuminate\Contracts\Support\Arrayable;

class Breadcrumbs implements IteratorAggregate, Countable, Arrayable
{
    protected $items = [];

    public function __construct()
    {
        $this->add('Kezdőlap', url('/'));
    }

    public function push($item)
    {
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
        return end($this->items);
    }

    protected function arrayPush($item)
    {
        if (!is_a($item, BreadcrumbItem::class)) {
            throw new \Exception('You can push only BreadcrumbItems to Breadcrumbs collection');
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
}