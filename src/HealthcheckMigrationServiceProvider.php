<?php

declare(strict_types=1);

namespace IllumaLaw\HealthCheckMigration;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

final class HealthcheckMigrationServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('healthcheck-migration')
            ->hasConfigFile()
            ->hasTranslations();
    }
}
