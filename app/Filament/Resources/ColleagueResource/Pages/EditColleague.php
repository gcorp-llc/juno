<?php

namespace App\Filament\Resources\ColleagueResource\Pages;

use App\Filament\Resources\ColleagueResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditColleague extends EditRecord
{
    protected static string $resource = ColleagueResource::class;
    use EditRecord\Concerns\Translatable;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
            Actions\LocaleSwitcher::make(),
        ];
    }
}
