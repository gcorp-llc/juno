<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TuneResource\Pages;
use App\Filament\Resources\TuneResource\RelationManagers;
use App\Models\Tune;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TuneResource extends Resource
{
    protected static ?string $model = Tune::class;

    protected static ?string $navigationIcon = 'heroicon-o-ticket';
    protected static ?int $navigationSort = 1;
    public static function getNavigationLabel(): string
    {
        return __('Tunes');
    }
    public static function getLabel(): string
    {
        return __('Tunes');
    }
    public static function getNavigationGroup(): ?string
    {
        return __('Tunes Panel');
    }
    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('user_id')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('service_id')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('address_id')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('status')
                    ->required()
                    ->maxLength(255)
                    ->default('pending'),
                Forms\Components\TextInput::make('price')
                    ->required()
                    ->maxLength(255)
                    ->default(0),
                Forms\Components\Toggle::make('payment')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('user_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('service_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('address_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('status')
                    ->searchable(),
                Tables\Columns\TextColumn::make('price')
                    ->searchable(),
                Tables\Columns\IconColumn::make('payment')
                    ->boolean(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
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
            'index' => Pages\ListTunes::route('/'),
            'create' => Pages\CreateTune::route('/create'),
            'edit' => Pages\EditTune::route('/{record}/edit'),
        ];
    }
}
