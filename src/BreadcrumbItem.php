<?php
namespace Isti\Laravel\Breadcrumbs;

class BreadcrumbItem
{
    public $title;
    public $url;

    public function __construct($title, $url) {
        $this->title = $title;
        $this->url = $url == null ?: url($url);
    }
}
