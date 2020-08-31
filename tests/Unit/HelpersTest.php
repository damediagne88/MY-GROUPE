<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class HelpersTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @test
     */
    public function page_title()
    {
        $this->assertEquals('About | Laracarte- List of artisans', page_title('About'));
    }

    /**
     * A basic unit test example.
     *
     * @test
     */
    public function set_active_route()
    {
        $this->get(route('pages.home'));
        $this->assertEquals('active', set_active_route('pages.home'));
        $this->assertEquals('', set_active_route('pages.about'));
    }
}
