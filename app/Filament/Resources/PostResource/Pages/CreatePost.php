<?php

namespace App\Filament\Resources\PostResource\Pages;

use App\Filament\Resources\PostResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Database\Eloquent\Model;
use Stichoza\GoogleTranslate\GoogleTranslate;

class CreatePost extends CreateRecord
{
    protected static string $resource = PostResource::class;
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
        $translate['tags'] = [
            'en' => GoogleTranslate::trans($data['tags'], 'en'),
            'ar' => GoogleTranslate::trans($data['tags'], 'ar'),
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
