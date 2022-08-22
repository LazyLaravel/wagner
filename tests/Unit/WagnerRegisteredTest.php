<?php

namespace LazyLaravel\Wagner\Tests\Unit;

use LazyLaravel\Wagner\Tests\TestCase;
use Wagner\Contracts\ProductContracts;

class WagnerRegisteredTest extends TestCase
{

    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_wagner_is_registered()
    {
        $app = $this->createApplication();
        $result = $app->get(ProductContracts::class);
        $this->assertTrue($result instanceof \Closure, false);
    }
}
