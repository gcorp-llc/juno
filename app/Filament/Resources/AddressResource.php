<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AddressResource\Pages;
use App\Filament\Resources\AddressResource\RelationManagers;
use App\Models\Address;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Concerns\Translatable;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AddressResource extends Resource
{
    use Translatable;
    protected static ?string $model = Address::class;

    protected static ?string $navigationIcon = 'heroicon-o-map';

    public static function getNavigationLabel(): string
    {
        return __('Address');
    }
    public static function getLabel(): string
    {
        return __('Address');
    }
    public static function getNavigationGroup(): ?string
    {
        return __('Information');
    }
    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('address')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('cover')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('location')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\Toggle::make('saturday')
                    ->required(),
                Forms\Components\TextInput::make('start_saturday_time')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('end_saturday_time')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\Toggle::make('sunday')
                    ->required(),
                Forms\Components\TextInput::make('star_sunday_time')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('end_sunday_time')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\Toggle::make('monday')
                    ->required(),
                Forms\Components\TextInput::make('start_monday_time')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('end_monday_time')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\Toggle::make('tuesday')
                    ->required(),
                Forms\Components\TextInput::make('start_tuesday_time')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('end_tuesday_time')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\Toggle::make('wednesday')
                    ->required(),
                Forms\Components\TextInput::make('start_wednesday_time')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('end_wednesday_time')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\Toggle::make('thursday')
                    ->required(),
                Forms\Components\TextInput::make('start_thursday_time')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('end_thursday_time')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\Toggle::make('friday')
                    ->required(),
                Forms\Components\TextInput::make('start_friday_time')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('end_friday_time')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\Textarea::make('phones')
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('time_delay')
                    ->required()
                    ->maxLength(255)
                    ->default(30),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->searchable(),
                Tables\Columns\TextColumn::make('address')
                    ->searchable(),
                Tables\Columns\TextColumn::make('cover')
                    ->searchable(),
                Tables\Columns\TextColumn::make('location')
                    ->searchable(),
                Tables\Columns\IconColumn::make('saturday')
                    ->boolean(),
                Tables\Columns\TextColumn::make('start_saturday_time')
                    ->searchable(),
                Tables\Columns\TextColumn::make('end_saturday_time')
                    ->searchable(),
                Tables\Columns\IconColumn::make('sunday')
                    ->boolean(),
                Tables\Columns\TextColumn::make('star_sunday_time')
                    ->searchable(),
                Tables\Columns\TextColumn::make('end_sunday_time')
                    ->searchable(),
                Tables\Columns\IconColumn::make('monday')
                    ->boolean(),
                Tables\Columns\TextColumn::make('start_monday_time')
                    ->searchable(),
                Tables\Columns\TextColumn::make('end_monday_time')
                    ->searchable(),
                Tables\Columns\IconColumn::make('tuesday')
                    ->boolean(),
                Tables\Columns\TextColumn::make('start_tuesday_time')
                    ->searchable(),
                Tables\Columns\TextColumn::make('end_tuesday_time')
                    ->searchable(),
                Tables\Columns\IconColumn::make('wednesday')
                    ->boolean(),
                Tables\Columns\TextColumn::make('start_wednesday_time')
                    ->searchable(),
                Tables\Columns\TextColumn::make('end_wednesday_time')
                    ->searchable(),
                Tables\Columns\IconColumn::make('thursday')
                    ->boolean(),
                Tables\Columns\TextColumn::make('start_thursday_time')
                    ->searchable(),
                Tables\Columns\TextColumn::make('end_thursday_time')
                    ->searchable(),
                Tables\Columns\IconColumn::make('friday')
                    ->boolean(),
                Tables\Columns\TextColumn::make('start_friday_time')
                    ->searchable(),
                Tables\Columns\TextColumn::make('end_friday_time')
                    ->searchable(),
                Tables\Columns\TextColumn::make('time_delay')
                    ->searchable(),
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
            'index' => Pages\ListAddresses::route('/'),
            'create' => Pages\CreateAddress::route('/create'),
            'edit' => Pages\EditAddress::route('/{record}/edit'),
        ];
    }
}
