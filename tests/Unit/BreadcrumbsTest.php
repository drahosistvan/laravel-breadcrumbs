<?php
namespace BreadcrumbsTests\Unit;

use BreadcrumbsTests\TestCase;
use Isti\Laravel\Breadcrumbs\Breadcrumbs;
use Isti\Laravel\Breadcrumbs\Exceptions\InvalidBreadcrumbItemException;

class BreadcrumbsTest extends TestCase
{
    private $breadcrumbs;

    public function setUp()
    {
        parent::setUp();
        $this->breadcrumbs = new Breadcrumbs();
    }

    /** @test */
    public function it_can_throw_exception_if_pushed_item_is_not_breadcrumbitem()
    {
        $this->expectException(InvalidBreadcrumbItemException::class);
        $this->breadcrumbs->push('a');
    }
}
