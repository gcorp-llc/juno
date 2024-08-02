<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UserResource\Pages;
use App\Filament\Resources\UserResource\RelationManagers;
use App\Models\User;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Validation\Rules\ImageFile;
//use AmidEsfahani\FilamentTinyEditor\TinyEditor;

class UserResource extends Resource
{
    protected static ?string $model = User::class;

    protected static ?string $navigationIcon = 'heroicon-o-user-group';
    public static function getNavigationLabel(): string
    {
        return __('Users');
    }
    public static function getLabel(): string
    {
        return __('Users');
    }
    public static function getNavigationGroup(): ?string
    {
        return __('filament-shield::filament-shield.nav.group');
    }
    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->label(fn (): string => __('Name'))
                    ->required()
                    ->maxLength(255),
                Forms\Components\Select::make('roles')
                    ->relationship('roles', 'name')
                    ->multiple()
                    ->label(fn (): string => __('Switch To Role'))
                    ->preload()
                    ->searchable(),
                Forms\Components\TextInput::make('email')
                    ->email()
                    ->required()
                    ->label(fn (): string => __('Email Address'))
                    ->maxLength(255),
                Forms\Components\TextInput::make('password')
                    ->label(fn (): string => __('Password'))
                    ->hiddenOn('edit')
                    ->password()
                    ->required()
                    ->maxLength(255),

                Forms\Components\FileUpload::make('profile_photo_path')
                    ->image()
                    ->optimize('webp')
                    ->resize(50)
                    ->imageEditor(),

//                Forms\Components\DatePicker::make('created_at')
//                    ->jalali(),
//                TinyEditor::make('name')
//                    ->fileAttachmentsDisk('public')
//                    ->fileAttachmentsVisibility('public')
//                    ->fileAttachmentsDirectory('uploads')
//                    ->profile('default|simple|full|minimal|none|custom')
//                    ->rtl() // Set RTL or use ->direction('auto|rtl|ltr')
//                    ->columnSpan('full')
//                    ->required()
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('profile_photo_path')
                    ->label('avatar')->circular(),
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('roleNames')
                    ->label('roles')
                    ->badge()->separator(','),
                Tables\Columns\TextColumn::make('email')
                    ->searchable(),
            ])
            ->filters([
                //
            ])
            ->actions([
               Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make()
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
            'index' => Pages\ListUsers::route('/'),
            'create' => Pages\CreateUser::route('/create'),
            'view' => Pages\ViewUser::route('/{record}'),
            'edit' => Pages\EditUser::route('/{record}/edit'),
        ];
    }
}
