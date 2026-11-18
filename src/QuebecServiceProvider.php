<?php

namespace JeffersonGoncalves\Filament\Quebec;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class QuebecServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('filament-quebec')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigrations();
    }
}
