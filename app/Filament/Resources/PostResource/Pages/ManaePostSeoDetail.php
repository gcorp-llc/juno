<?php

namespace App\Filament\Resources\PostResource\Pages;

use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Pages\ManageRelatedRecords;
use Filament\Tables;
use Filament\Tables\Table;
use App\Filament\Resources\PostResource;
use Illuminate\Contracts\Support\Htmlable;
use Filament\Resources\RelationManagers\Concerns\Translatable;
class ManaePostSeoDetail extends ManageRelatedRecords
{
    use Translatable;
    protected static string $resource = PostResource::class;

    protected static string $relationship = 'seoDetail';

    protected static ?string $navigationIcon = 'heroicon-o-globe-alt';

    public function getTitle(): string|Htmlable
    {

        $recordTitle = $this->getRecordTitle();

        $recordTitle = $recordTitle instanceof Htmlable ? $recordTitle->toHtml() : $recordTitle;

        return 'Manage Seo Detail';
    }

    public static function getNavigationLabel(): string
    {
        return 'Manage Seo Detail';
    }

    protected function canCreate(): bool
    {
        return ! $this->getRelationship()->count();
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title')
                    ->required()
                    ->maxLength(255)
                    ->columnSpanFull(),
                TagsInput::make('keywords')
                    ->columnSpanFull(),
                Textarea::make('description')
                    ->required()
                    ->maxLength(65535)
                    ->columnSpanFull(),
            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('title')
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->limit(20),
                Tables\Columns\TextColumn::make('description')
                    ->limit(40),
                Tables\Columns\TextColumn::make('keywords')->badge(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->headerActions([
                Tables\Actions\CreateAction::make(),
                Tables\Actions\LocaleSwitcher::make(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\ViewAction::make(),
            ])->paginated(false);
    }
}
