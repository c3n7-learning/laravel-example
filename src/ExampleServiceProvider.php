<?php

namespace Tefabi\Example;

use Illuminate\Support\Facades\Route;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Tefabi\Example\Commands\ExampleCommand;
use Tefabi\Example\Http\Controllers\MyController;

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

    public function packageRegistered()
    {
        Route::macro('example', function (string $baseUrl = 'example') {
            Route::prefix($baseUrl)->group(function () {
                Route::get('/', [MyController::class, 'index']);
            });
        });

        /**
         * In the project, users can
         * Route::example();
         * or
         * Route::example('custom-base-url')
         */
    }
}
