<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ServiceResource\Pages;
use App\Filament\Resources\ServiceResource\RelationManagers;
use App\Models\Service;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Concerns\Translatable;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ServiceResource extends Resource
{
    use Translatable;
    protected static ?string $model = Service::class;

    protected static ?string $navigationIcon = 'heroicon-c-arrow-path-rounded-square';
    public static function getNavigationLabel(): string
    {
        return __('Services');
    }
    public static function getLabel(): string
    {
        return __('Services');
    }
    public static function getNavigationGroup(): ?string
    {
        return __('Website');
    }
    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }
    protected static ?int $navigationSort=3;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->label(__('Title'))
                    ->required()
                    ->maxLength(255),
                Forms\Components\Textarea::make('info')
                    ->label(__('Information'))
                    ->required()
                    ->maxLength(255),
                Forms\Components\MarkdownEditor::make('description')
                    ->label(__('Description'))
                    ->required()
                   ->columnSpanFull(),
                Forms\Components\FileUpload::make('logo')
                    ->label(__('Logo'))
                    ->image()
                    ->optimize('webp')
                    ->resize(50)
                    ->imageEditor(),
                Forms\Components\FileUpload::make('cover')
                    ->label(__('Cover'))
                    ->image()
                    ->optimize('webp')
                    ->resize(50)
                    ->imageEditor(),
                Forms\Components\FileUpload::make('after')
                    ->label(__('After'))
                    ->image()
                    ->optimize('webp')
                    ->resize(50)
                    ->imageEditor(),
                Forms\Components\FileUpload::make('before')
                    ->label(__('Before'))
                    ->image()
                    ->optimize('webp')
                    ->resize(50)
                    ->imageEditor(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->searchable(),

                Tables\Columns\ImageColumn::make('logo')
                    ->searchable(),
                Tables\Columns\ImageColumn::make('cover')
                    ->searchable(),


            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListServices::route('/'),
            'create' => Pages\CreateService::route('/create'),
            'edit' => Pages\EditService::route('/{record}/edit'),
        ];
    }
}
