<?php

namespace App\Filament\Resources\TagResource\Pages;

use Filament\Resources\Pages\CreateRecord;
use App\Filament\Resources\TagResource;
use Filament\Actions;

class CreateTag extends CreateRecord
{
    use CreateRecord\Concerns\Translatable;
    protected static string $resource = TagResource::class;


    protected function getHeaderActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),
            // ...
        ];
    }
}
