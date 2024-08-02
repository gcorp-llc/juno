<?php

namespace App\Filament\Resources\ServiceResource\Pages;

use App\Filament\Resources\ServiceResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Database\Eloquent\Model;
use Stichoza\GoogleTranslate\GoogleTranslate;

class CreateService extends CreateRecord
{
    protected static string $resource = ServiceResource::class;
    use CreateRecord\Concerns\Translatable;
    protected function handleRecordCreation(array $data): Model
    {
        $translate=static::getModel()::create($data);
        $translate['title'] = [
            'en' => GoogleTranslate::trans($data['title'], 'en'),
            'ar' => GoogleTranslate::trans($data['title'], 'ar'),
        ];
        $translate['info'] = [
            'en' => GoogleTranslate::trans($data['info'], 'en'),
            'ar' => GoogleTranslate::trans($data['info'], 'ar'),
        ];
        $translate['description'] = [
            'en' => GoogleTranslate::trans($data['description'], 'en'),
            'ar' => GoogleTranslate::trans($data['description'], 'ar'),
        ];
        $translate->save();
        return $translate;
    }
    protected function getHeaderActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),
        ];
    }
}
