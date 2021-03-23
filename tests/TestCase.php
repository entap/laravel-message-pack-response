<?php
namespace Tests;

use Entap\Laravel\Response\MessagePack\ServiceProvider;
use Orchestra\Testbench\TestCase as BaseTestCase;

class TestCase extends BaseTestCase
{
    protected function setUp(): void
    {
        parent::setUp();

        // $this->artisan('vendor:publish', [
        //   '--force' => true,
        //   '--provider' => ServiceProvider::class,
        // ]);
    }

    protected function getPackageProviders($app)
    {
        return [ServiceProvider::class];
    }

    protected function getPackageAliases($app)
    {
        return [];
    }
}
