<?php

namespace JeffersonGoncalves\Filament\Quebec\Pages;

use BackedEnum;
use Filament\Pages\Page;
use Filament\Panel;
use JeffersonGoncalves\Filament\Quebec\QuebecPlugin;
use JeffersonGoncalves\Quebec\Quebec;

/**
 * Read-only view of laravel-quebec's inventory: one card per model, one row per declared column.
 */
class PersonalDataInventory extends Page
{
    protected string $view = 'filament-quebec::pages.inventory';

    /**
     * @return array<class-string, list<array<string, mixed>>>
     */
    public function getInventory(): array
    {
        $models = [];

        foreach (app(Quebec::class)->inventory() as $row) {
            $models[$row['model']][] = $row;
        }

        return $models;
    }

    public static function label(string $group, ?string $value): ?string
    {
        return $value === null ? null : __("filament-quebec::filament-quebec.{$group}.{$value}");
    }

    public function getTitle(): string
    {
        return __('filament-quebec::filament-quebec.page.title');
    }

    public static function getNavigationLabel(): string
    {
        return __('filament-quebec::filament-quebec.page.navigation_label');
    }

    public static function getNavigationGroup(): ?string
    {
        return QuebecPlugin::get()->getNavigationGroup();
    }

    public static function getNavigationSort(): ?int
    {
        return QuebecPlugin::get()->getNavigationSort();
    }

    public static function getNavigationIcon(): string|BackedEnum|null
    {
        return QuebecPlugin::get()->getNavigationIcon();
    }

    public static function getSlug(?Panel $panel = null): string
    {
        return QuebecPlugin::get()->getSlug();
    }
}
