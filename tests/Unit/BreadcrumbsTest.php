<?php
namespace Isti\Laravel\Breadcrumbs\Test\Unit;

use Isti\Laravel\Breadcrumbs\Breadcrumbs;
use Isti\Laravel\Breadcrumbs\Exceptions\InvalidBreadcrumbItemException;
use PHPUnit\Framework\TestCase;

class LanguageApiTest extends TestCase
{
    private $breadcrumbs;

    public function setUp()
    {
        $this->breadcrumbs = new Breadcrumbs();
    }

    /** @test */
    public function it_can_throw_exception_if_pushed_item_is_not_breadcrumbitem()
    {
        $this->expectException(InvalidBreadcrumbItemException::class);
        $this->breadcrumbs->push('a');
    }
}