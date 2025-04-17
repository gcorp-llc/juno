<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ColleagueResource\Pages;
use App\Filament\Resources\ColleagueResource\RelationManagers;
use App\Models\Colleague;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Concerns\Translatable;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ColleagueResource extends Resource
{
    use Translatable;
    protected static ?string $model = Colleague::class;

    protected static ?string $navigationIcon = 'heroicon-o-user-group';
    public static function getNavigationLabel(): string
    {
        return __('Colleagues');
    }
    public static function getLabel(): string
    {
        return __('Colleagues');
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
                // Basic Information Section (Full Size)
                Forms\Components\Section::make(__('Basic Information'))
                    ->schema([
                        Forms\Components\Select::make('address_id')
                            ->relationship('address', 'title')
                            ->required()
                            ->label(__('Address')),

                        Forms\Components\TextInput::make('name')
                            ->required()
                            ->maxLength(255)
                            ->label(__('Name')),

                        Forms\Components\FileUpload::make('avatar')
                            ->image()
                            ->label(__('Avatar')),
                    ])
                    ->columns(2), // Split into two columns

                // Info Section (Full Width)
                Forms\Components\Section::make(__('Details'))
                    ->schema([
                        Forms\Components\RichEditor::make('info')
                            ->label(__('Information'))
                            ->columnSpanFull(), // Full width
                    ]),

                // Other Details Section
                Forms\Components\Section::make(__('Additional Information'))
                    ->schema([
                        Forms\Components\TextInput::make('experience')
                            ->maxLength(255)
                            ->label(__('Experience')),

                        Forms\Components\TextInput::make('position')
                            ->maxLength(255)
                            ->label(__('Position')),

                        Forms\Components\TextInput::make('order')
                            ->numeric()
                            ->required()
                            ->label(__('Order')),
                    ])
                    ->columns(2), // Split into two columns
            ]);

    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('address_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('avatar')
                    ->searchable(),
                Tables\Columns\TextColumn::make('info')
                    ->searchable(),
                Tables\Columns\TextColumn::make('experience')
                    ->searchable(),
                Tables\Columns\TextColumn::make('position')
                    ->searchable(),
                Tables\Columns\TextColumn::make('order')
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
            'index' => Pages\ListColleagues::route('/'),
            'create' => Pages\CreateColleague::route('/create'),
            'edit' => Pages\EditColleague::route('/{record}/edit'),
        ];
    }
}
