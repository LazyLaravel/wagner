<?php

namespace LazyLaravel\Wagner\Tests;


use LazyLaravel\Wagner\WagnerRegisterServiceProvider;

class TestCase extends \Orchestra\Testbench\TestCase
{

    public function setUp(): void
    {
        parent::setUp();
        // additional setup
    }


    protected function getPackageProviders($app)
    {
        return [
            WagnerRegisterServiceProvider::class
        ];
    }

    protected function getEnvironmentSetUp($app)
    {
        // perform environment setup
    }

}
