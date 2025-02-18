<?php

namespace Daftarcha\DaftarchaBase;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Daftarcha\DaftarchaBase\Commands\DaftarchaBaseCommand;

class DaftarchaBaseServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-projects-base')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel_projects_base_table')
            ->hasCommand(DaftarchaBaseCommand::class);
    }
}
