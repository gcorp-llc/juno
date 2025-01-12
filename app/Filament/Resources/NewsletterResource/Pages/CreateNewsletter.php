<?php

namespace App\Filament\Resources\NewsletterResource\Pages;

use Filament\Resources\Pages\CreateRecord;
use App\Filament\Resources\NewsletterResource;

class CreateNewsletter extends CreateRecord
{
    protected static string $resource = NewsletterResource::class;
}
