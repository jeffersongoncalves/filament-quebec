<?php

use JeffersonGoncalves\Filament\Quebec\Pages\PersonalDataInventory;
use JeffersonGoncalves\Filament\Quebec\QuebecPlugin;
use JeffersonGoncalves\Filament\Quebec\Tests\Fixtures\TestUser;
use Livewire\Livewire;

beforeEach(function () {
    $this->actingAs(TestUser::create(['name' => 'Admin', 'email' => 'admin@example.com']));
});

it('lists every declared column grouped by model', function () {
    Livewire::test(PersonalDataInventory::class)
        ->assertSuccessful()
        ->assertSee('Personal information inventory')
        ->assertSee('TestUser')
        ->assertSee('email')
        ->assertSee('Account login')
        ->assertSee('Outside Quebec (s. 17)')
        ->assertSee('Profiling (s. 8.1)')
        ->assertSee('5 years')
        ->assertSee('Hash')
        ->assertSee('Sensitive (s. 12)');
});

it('flags columns without a purpose', function () {
    Livewire::test(PersonalDataInventory::class)
        ->assertSee('Not declared');
});

it('explains how to register models when the inventory is empty', function () {
    config()->set('quebec.models', []);

    Livewire::test(PersonalDataInventory::class)
        ->assertSee('No models registered');
});

it('applies the fluent plugin options', function () {
    QuebecPlugin::get()->navigationGroup('QUEBEC')->navigationSort(3)->slug('inventory');

    expect(PersonalDataInventory::getNavigationGroup())->toBe('QUEBEC')
        ->and(PersonalDataInventory::getNavigationSort())->toBe(3)
        ->and(PersonalDataInventory::getSlug())->toBe('inventory');
});
