<?php

namespace Jivanf\Genderer\Tests;

use Illuminate\Foundation\Application;
use Jivanf\Genderer\GendererServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class TestCase extends Orchestra
{
    /**
     * @param Application $app
     *
     * @return list<class-string<PackageServiceProvider>>
     */
    protected function getPackageProviders($app): array
    {
        return [
            GendererServiceProvider::class,
        ];
    }
}
