<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BannerResource\Pages;
use App\Filament\Resources\BannerResource\RelationManagers;
use App\Models\Banner;
use Faker\Provider\Image;
use Filament\Actions\DeleteAction;
use Filament\Forms;
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Form;
use Filament\Resources\Concerns\Translatable;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Validation\Rules\ImageFile;

class BannerResource extends Resource
{
    use Translatable;

    protected static ?string $model = Banner::class;
    protected static ?string $navigationIcon = 'heroicon-c-rectangle-stack';
    public static function getNavigationLabel(): string
    {
        return __('Banners');
    }
    public static function getLabel(): string
    {
        return __('Banners');
    }
    public static function getNavigationGroup(): ?string
    {
        return __('Website');
    }
    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }
    protected static ?int $navigationSort=1;



    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title'),
                Fieldset::make('Persian Banner')
                    ->schema([

                        Forms\Components\FileUpload::make('fa_pc_cover')
                            ->image()
                            ->optimize('webp')
                            ->resize(80)
                            ->imageEditor(),
                        Forms\Components\FileUpload::make('fa_mb_cover')
                            ->image()
                            ->optimize('webp')
                            ->resize(80)
                            ->imageEditor(),
                    ])
                    ->columns(2),
                Fieldset::make('English Banner')
                    ->schema([
                        Forms\Components\FileUpload::make('en_pc_cover')
                            ->image()
                            ->optimize('webp')
                            ->resize(80)
                            ->imageEditor(),
                        Forms\Components\FileUpload::make('en_mb_cover')
                            ->image()
                            ->optimize('webp')
                            ->resize(80)
                            ->imageEditor(),
                    ])
                    ->columns(2),
                Fieldset::make('Arabic Banner')
                    ->schema([
                        Forms\Components\FileUpload::make('ar_pc_cover')
                            ->image()
                            ->optimize('webp')
                            ->resize(80)
                            ->imageEditor(),
                        Forms\Components\FileUpload::make('ar_mb_cover')
                            ->image()
                            ->optimize('webp')
                            ->resize(80)
                            ->imageEditor(),
                    ])
                    ->columns(2),


            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title'),
                Tables\Columns\ImageColumn::make('fa_pc_cover'),
                Tables\Columns\ImageColumn::make('fa_mb_cover'),
//                Tables\Columns\TextColumn::make('created_at')
//                    ->jalaliDate(),

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
            'index' => Pages\ListBanners::route('/'),
            'create' => Pages\CreateBanner::route('/create'),
            'edit' => Pages\EditBanner::route('/{record}/edit'),
        ];
    }
}
