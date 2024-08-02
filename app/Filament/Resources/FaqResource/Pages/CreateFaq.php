<?php

namespace App\Filament\Resources\FaqResource\Pages;

use App\Filament\Resources\FaqResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Database\Eloquent\Model;
use Stichoza\GoogleTranslate\GoogleTranslate;

class CreateFaq extends CreateRecord
{
    protected static string $resource = FaqResource::class;
    use CreateRecord\Concerns\Translatable;
    protected function handleRecordCreation(array $data): Model
    {
        $translate=static::getModel()::create($data);
        $translate['question'] = [
            'en' => GoogleTranslate::trans($data['question'], 'en'),
            'ar' => GoogleTranslate::trans($data['question'], 'ar'),
        ];
        $translate['answer'] = [
            'en' => GoogleTranslate::trans($data['answer'], 'en'),
            'ar' => GoogleTranslate::trans($data['answer'], 'ar'),
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
