<?php

namespace Tests;

use LemonSqueezy\Laravel\LemonSqueezyServiceProvider;
use Orchestra\Testbench\Attributes\WithMigration;
use Orchestra\Testbench\TestCase as OrchestraTestCase;

#[WithMigration]
class TestCase extends OrchestraTestCase
{
    protected function getPackageProviders($app)
    {
        return [
            LemonSqueezyServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');
    }
}
