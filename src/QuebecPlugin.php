<?php

namespace JeffersonGoncalves\Filament\Quebec;

use Filament\Panel;
use JeffersonGoncalves\Filament\Quebec\Pages\PersonalDataInventory;
use JeffersonGoncalves\FilamentPluginCore\BasePlugin;

class QuebecPlugin extends BasePlugin
{
    protected ?string $navigationGroup = null;

    protected ?int $navigationSort = null;

    protected string $navigationIcon = 'heroicon-o-finger-print';

    protected string $slug = 'personal-data-inventory';

    public function getId(): string
    {
        return 'filament-quebec';
    }

    public function register(Panel $panel): void
    {
        $panel->pages([
            PersonalDataInventory::class,
        ]);
    }

    public function navigationGroup(?string $group): static
    {
        $this->navigationGroup = $group;

        return $this;
    }

    public function getNavigationGroup(): ?string
    {
        return $this->navigationGroup;
    }

    public function navigationSort(?int $sort): static
    {
        $this->navigationSort = $sort;

        return $this;
    }

    public function getNavigationSort(): ?int
    {
        return $this->navigationSort;
    }

    public function navigationIcon(string $icon): static
    {
        $this->navigationIcon = $icon;

        return $this;
    }

    public function getNavigationIcon(): string
    {
        return $this->navigationIcon;
    }

    public function slug(string $slug): static
    {
        $this->slug = $slug;

        return $this;
    }

    public function getSlug(): string
    {
        return $this->slug;
    }
}
