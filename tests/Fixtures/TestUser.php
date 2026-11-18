<?php

namespace JeffersonGoncalves\Filament\Quebec\Tests\Fixtures;

use Illuminate\Foundation\Auth\User as Authenticatable;
use JeffersonGoncalves\Quebec\Attributes\PersonalData;
use JeffersonGoncalves\Quebec\Concerns\InteractsWithPersonalData;
use JeffersonGoncalves\Quebec\Contracts\HasPersonalData;
use JeffersonGoncalves\Quebec\Enums\AnonymizeStrategy;
use JeffersonGoncalves\Quebec\Enums\DataCategory;

#[PersonalData('email', purpose: 'Account login', retention: '5 years', anonymize: AnonymizeStrategy::Hash, outsideQuebec: true)]
#[PersonalData('health_notes', category: DataCategory::Sensitive, profiling: true)]
class TestUser extends Authenticatable implements HasPersonalData
{
    use InteractsWithPersonalData;

    protected $table = 'users';

    protected $guarded = [];

    public $timestamps = false;
}
