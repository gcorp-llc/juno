<?php

namespace App\Filament\Resources\CategoryResource\Pages;

use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;
use App\Models\Category;
use App\Filament\Resources\CategoryResource;
use Filament\Actions;
class ViewCategory extends ViewRecord
{
    use ViewRecord\Concerns\Translatable;
    protected static string $resource = CategoryResource::class;

    public function getHeaderActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),
            EditAction::make()
                ->slideOver()
                ->form(Category::getForm()),

        ];
    }
}
