<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PostResource\Pages;
use App\Filament\Resources\PostResource\RelationManagers;
use App\Models\Post;
use App\Models\Service;
use Filament\Forms;
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Form;
use Filament\Resources\Concerns\Translatable;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PostResource extends Resource
{
    use Translatable;
    protected static ?string $model = Post::class;

    protected static ?string $navigationIcon = 'heroicon-o-pencil-square';
    public static function getNavigationLabel(): string
    {
        return __('Posts');
    }
    public static function getLabel(): string
    {
        return __('Posts');
    }
    public static function getNavigationGroup(): ?string
    {
        return __('Website');
    }
    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }
    protected static ?int $navigationSort=2;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->label(__('Title'))
                    ->required()
                    ->maxLength(255),
                Forms\Components\TagsInput::make('tags')
                    ->label(__('Tags'))
                    ->default(null),
                Forms\Components\Textarea::make('info')
                    ->label(__('Information'))
                    ->required()
                    ->maxLength(255)
                ->columnSpanFull(),
                Forms\Components\MarkdownEditor::make('description')
                    ->label(__('Description'))
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\Section::make('Covers')
            ->schema([
                Forms\Components\FileUpload::make('fa_cover')
                    ->image()
                    ->optimize('webp')
                    ->resize(50)
                    ->imageEditor(),
                Forms\Components\FileUpload::make('en_cover')
                    ->image()
                    ->optimize('webp')
                    ->resize(50)
                    ->imageEditor(),
                Forms\Components\FileUpload::make('ar_cover')
                    ->image()
                    ->optimize('webp')
                    ->resize(50)
                    ->imageEditor(),
            ])->columns(3),


            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->searchable(),
                Tables\Columns\TextColumn::make('info')
                    ->searchable(),
                Tables\Columns\TextColumn::make('description')
                    ->searchable(),
                Tables\Columns\TextColumn::make('fa_cover')
                    ->searchable(),
                Tables\Columns\TextColumn::make('en_cover')
                    ->searchable(),
                Tables\Columns\TextColumn::make('ar_cover')
                    ->searchable(),
                Tables\Columns\TextColumn::make('tags')
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
            'index' => Pages\ListPosts::route('/'),
            'create' => Pages\CreatePost::route('/create'),
            'edit' => Pages\EditPost::route('/{record}/edit'),
        ];
    }
}
