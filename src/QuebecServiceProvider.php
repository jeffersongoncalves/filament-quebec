<?php

namespace JeffersonGoncalves\Filament\Quebec;

use JeffersonGoncalves\FilamentPluginCore\BasePackageServiceProvider;
use Spatie\LaravelPackageTools\Package;

class QuebecServiceProvider extends BasePackageServiceProvider
{
    public static string $name = 'filament-quebec';

    public function configurePackage(Package $package): void
    {
        $package
            ->name(static::$name)
            ->hasViews()
            ->hasTranslations();
    }
}
