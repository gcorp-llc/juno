<?php

namespace App\Filament\Resources\TuneResource\Pages;

use App\Filament\Resources\TuneResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTunes extends ListRecords
{
    protected static string $resource = TuneResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
