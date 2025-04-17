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
use Filament\Forms\Components\{
    Card,
    FileUpload,
    Grid,
    Section,
    TagsInput,
    Textarea,
    TextInput,
    Toggle,
};
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
                Section::make(__('Basic Information'))
                    ->schema([
                        TextInput::make('title')
                            ->label(__('Title'))
                            ->required()
                            ->maxLength(255),

                        Textarea::make('address')
                            ->label(__('Address'))
                            ->required(),

                        FileUpload::make('cover')
                            ->label(__('Cover'))
                            ->image(),

                        TextInput::make('location')
                            ->label(__('Location'))
                            ->maxLength(255)
                            ->nullable(),
                    ]),

                Section::make(__('Weekly Schedule'))
                    ->schema([
                        Grid::make(2) // ایجاد دو ستون اصلی
                        ->schema(
                            collect(['saturday', 'sunday', 'monday', 'tuesday', 'wednesday', 'thursday', 'friday'])
                                ->map(function ($day) {
                                    return Card::make()
                                        ->label(__($day . ' Schedule'))
                                        ->schema([
                                            Toggle::make($day)
                                                ->label(__($day))
                                                ->required(),
                                            TextInput::make('start_' . $day . '_time')
                                                ->label(__('Start Time'))
                                                ->maxLength(255)
                                                ->nullable(),
                                            TextInput::make('end_' . $day . '_time')
                                                ->label(__('End Time'))
                                                ->maxLength(255)
                                                ->nullable(),
                                        ]);
                                })
                                ->toArray()
                        ),
                    ]),

                Section::make(__('Additional Settings'))
                    ->schema([
                        TagsInput::make('phones')
                            ->label(__('Phone Numbers'))
                            ->placeholder(__('Add a phone number')),

                        TextInput::make('time_delay')
                            ->label(__('Time Delay (minutes)'))
                            ->required()
                            ->maxLength(255)
                            ->default(30),
                    ]),
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
