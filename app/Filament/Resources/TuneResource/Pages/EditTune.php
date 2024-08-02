<?php

namespace App\Filament\Resources\TuneResource\Pages;

use App\Filament\Resources\TuneResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTune extends EditRecord
{
    protected static string $resource = TuneResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
