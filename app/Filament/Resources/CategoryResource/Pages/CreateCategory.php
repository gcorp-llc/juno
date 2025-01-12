<?php

namespace App\Filament\Resources\CategoryResource\Pages;

use Filament\Resources\Pages\CreateRecord;
use Filament\Actions;
use App\Filament\Resources\CategoryResource;


class CreateCategory extends CreateRecord
{
    protected static string $resource = CategoryResource::class;
    use CreateRecord\Concerns\Translatable;

    protected function getHeaderActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),
        ];
    }
}
