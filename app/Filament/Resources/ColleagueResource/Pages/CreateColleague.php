<?php

namespace App\Filament\Resources\ColleagueResource\Pages;

use App\Filament\Resources\ColleagueResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateColleague extends CreateRecord
{
    protected static string $resource = ColleagueResource::class;
    use CreateRecord\Concerns\Translatable;

    protected function getHeaderActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),
        ];
    }
}
