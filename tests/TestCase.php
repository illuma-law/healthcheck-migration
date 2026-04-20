<?php

declare(strict_types=1);

namespace IllumaLaw\HealthCheckMigration\Tests;

use IllumaLaw\HealthCheckMigration\HealthcheckMigrationServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;
use Spatie\Health\HealthServiceProvider;

class TestCase extends Orchestra
{
    protected function getPackageProviders($app): array
    {
        return [
            HealthServiceProvider::class,
            HealthcheckMigrationServiceProvider::class,
        ];
    }
}
