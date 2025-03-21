<?php

namespace Tefabi\Example;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Tefabi\Example\Commands\ExampleCommand;

class ExampleServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-example')
            ->hasConfigFile()
            /*
            ->hasViews()
            */
            ->hasMigration('create_my_models_table')
            ->hasCommand(ExampleCommand::class);
    }
}
