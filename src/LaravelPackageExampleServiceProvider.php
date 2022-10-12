<?php

namespace Iamopk\LaravelPackageExample;

use Iamopk\LaravelPackageExample\Commands\LaravelPackageExampleCommand;
use Iamopk\LaravelPackageExample\Http\Controllers\MyController;
use Illuminate\Support\Facades\Route;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LaravelPackageExampleServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-package-example')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_my_models_table')
            ->hasCommand(LaravelPackageExampleCommand::class);
    }

    public function packageRegistered()
    {
        Route::macro('example', function (string $baseUrl = 'example', string $nameUrl = 'package-example.',) {
            Route::prefix($baseUrl)->name($nameUrl)->group(function () {
                Route::get('/', [MyController::class, 'index'])->name('my-route');
            });
        });
    }
}
