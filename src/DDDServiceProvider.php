<?php

namespace Taksu\DDD;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Taksu\DDD\Commands\DDDCommand;

class DDDServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('ddd')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_ddd_table')
            ->hasCommand(DDDCommand::class);
    }
}
