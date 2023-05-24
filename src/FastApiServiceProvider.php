<?php

namespace Tetra\FastApi;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Tetra\FastApi\Commands\FastApiCommand;

class FastApiServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('fastapi')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_fastapi_table')
            ->hasCommand(FastApiCommand::class);
    }
}
