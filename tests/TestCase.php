<?php

namespace Developer\EmptyProject\Tests;

use Developer\EmptyProject\AppServiceProvider;
use Orchestra\Testbench\TestCase as OrchestraTestCase;

class TestCase extends OrchestraTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    protected function getPackageProviders($app)
    {
        return [
            AppServiceProvider::class,
        ];
    }
}
