<?php

namespace App\Filament\Resources\SeoDetailResource\Pages;

use Filament\Resources\Pages\CreateRecord;
use App\Filament\Resources\SeoDetailResource;
use Filament\Actions;

class CreateSeoDetail extends CreateRecord
{
    use CreateRecord\Concerns\Translatable;
    protected static string $resource = SeoDetailResource::class;
    protected function getHeaderActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),
            // ...
        ];
    }
}
