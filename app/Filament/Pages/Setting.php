<?php

namespace App\Filament\Pages;

use AmidEsfahani\FilamentTinyEditor\TinyEditor;
use App\Settings\GeneralSettings;
use Filament\Actions;
use Filament\Forms;
use Filament\Forms\Components\Checkbox;
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Tabs;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Wizard;
use Filament\Forms\Form;
use Filament\Pages\SettingsPage;
use BezhanSalleh\FilamentShield\Traits\HasPageShield;
class Setting extends SettingsPage
{
    use HasPageShield;
    protected static ?string $navigationIcon = 'heroicon-o-cog-6-tooth';
    protected static ?int $navigationSort = 3;

    protected static string $settings = GeneralSettings::class;
    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Tabs::make('Tabs')
                    ->tabs([

                        Tabs\Tab::make('Information')
                            ->icon('heroicon-m-identification')
                            ->schema([
                                Wizard::make([
                                    Wizard\Step::make('Persian')
                                        ->description('For Persian Language')
                                        ->schema([
                                            TextInput::make('site_name')
                                                ->label('Site Name')
                                                ->required()->columns(2),
                                            Textarea::make('info')
                                                ->label('Information ')
                                                ->required()
                                                ->columns(1),
                                            TinyEditor::make('description')
                                                ->columnSpanFull(),

                                            Section::make('Site Banners')
                                                ->description('Prevent abuse by limiting the number of requests per period')
                                                ->schema([
                                                    FileUpload::make('pc_banner')
                                                        ->label('Pc Banner Size 1440* 500 ')
                                                        ->image()
                                                        ->optimize('webp')
                                                        ->imageEditor(),
                                                    FileUpload::make('mb_banner')
                                                        ->label('Mobile Banner Size 500* 300 ')
                                                        ->image()
                                                        ->optimize('webp')
                                                        ->imageEditor(),
                                                    FileUpload::make('teaser_cover')
                                                        ->label('Teaser Cover Size Fix Video Size')
                                                        ->image()
                                                        ->optimize('webp')
                                                        ->imageEditor(),
                                                    FileUpload::make('teaser_video')
                                                        ->label('Teaser Video Size')
                                                        ->moveFiles()
                                                        ->acceptedFileTypes(['video/mp4']),

                                                ])->columns(2),
                                            Section::make('Site Logo')
                                                ->description('Prevent abuse by limiting the number of requests per period')
                                                ->schema([
                                                    FileUpload::make('favicon')
                                                        ->label('Favicon Size 70*70')
                                                        ->image()
                                                        ->optimize('webp')
                                                        ->imageEditor(),
                                                    FileUpload::make('nav_icon')
                                                        ->label('Navbar Icon Size 190* 190 ')
                                                        ->image()
                                                        ->optimize('webp')
                                                        ->imageEditor(),
                                                    FileUpload::make('footer_logo')
                                                        ->label('Footer Icon Size 190*190')
                                                        ->image()
                                                        ->optimize('webp')
                                                        ->imageEditor(),


                                                ])->columns(3),
                                        ]),
                                    Wizard\Step::make('English')
                                        ->description('For English Language')
                                        ->schema([
                                            TextInput::make('site_name_en')
                                                ->label('Site Name')
                                                ->columns(2),
                                            Textarea::make('info_en')
                                                ->label('Information ')
                                                ->columns(1),
                                            TinyEditor::make('description_en')
                                                ->columnSpanFull(),

                                            Section::make('Site Banners')
                                                ->description('Prevent abuse by limiting the number of requests per period')
                                                ->schema([
                                                    FileUpload::make('pc_banner_en')
                                                        ->label('Pc Banner Size 1440* 500 ')
                                                        ->image()
                                                        ->optimize('webp')
                                                        ->imageEditor(),
                                                    FileUpload::make('mb_banner_en')
                                                        ->label('Mobile Banner Size 500* 300 ')
                                                        ->image()
                                                        ->optimize('webp')
                                                        ->imageEditor(),
                                                    FileUpload::make('teaser_cover_en')
                                                        ->label('Teaser Cover Size Fix Video Size')
                                                        ->image()
                                                        ->optimize('webp')
                                                        ->imageEditor(),
                                                    FileUpload::make('teaser_video_en')
                                                        ->label('Teaser Video Size')
                                                        ->moveFiles()
                                                        ->acceptedFileTypes(['video/mp4']),

                                                ])->columns(2),

                                        ]),
                                    Wizard\Step::make('Arabic')
                                        ->description('For Arabic Language')
                                        ->schema([
                                            TextInput::make('site_name_ar')
                                                ->label('Site Name')
                                                ->columns(2),
                                            Textarea::make('info_ar')
                                                ->label('Information ')
                                                ->columns(1),
                                            TinyEditor::make('description_ar')
                                                ->columnSpanFull(),

                                            Section::make('Site Banners')
                                                ->description('Prevent abuse by limiting the number of requests per period')
                                                ->schema([
                                                    FileUpload::make('pc_banner_ar')
                                                        ->label('Pc Banner Size 1440* 500 ')
                                                        ->image()
                                                        ->optimize('webp')
                                                        ->imageEditor(),
                                                    FileUpload::make('mb_banner_ar')
                                                        ->label('Mobile Banner Size 500* 300 ')
                                                        ->image()
                                                        ->optimize('webp')
                                                        ->imageEditor(),
                                                    FileUpload::make('teaser_cover_ar')
                                                        ->label('Teaser Cover Size Fix Video Size')
                                                        ->image()
                                                        ->optimize('webp')
                                                        ->imageEditor(),
                                                    FileUpload::make('teaser_video_ar')
                                                        ->label('Teaser Video Size')
                                                        ->moveFiles()
                                                        ->acceptedFileTypes(['video/mp4']),

                                                ])->columns(2),
                                        ]),


                                ])
                                    ->skippable()
                            ]),
                        Tabs\Tab::make('Network')
                            ->icon('heroicon-m-paper-airplane')
                            ->schema([
                                Section::make('Rate limiting')
                                    ->description('Prevent abuse by limiting the number of requests per period')
                                    ->schema([
                                        TextInput::make('instagram')
                                            ->label('Instagram Link'),
                                        TextInput::make('whatsapp')
                                            ->label('Whatsapp Link'),
                                        TextInput::make('telegram')
                                            ->label('Telegram Link'),

                                        TextInput::make('eitaa')
                                            ->label('Eitaa Link'),
                                        TextInput::make('bale')
                                            ->label('Bale Link'),
                                        TextInput::make('robika')
                                            ->label('Robika Link'),

                                    ])->columns(3)

                            ]),
                        Tabs\Tab::make('Seo')
                            ->icon('heroicon-m-globe-alt')
                            ->schema([
                                TextInput::make('google_tag_manager_id')
                                    ->label('Google Tag Manager Id')
                                ,
                                TagsInput::make('seo_tags')
                                    ->label('Seo tags')
                                    ->separator(',')
                            ]),
                        Tabs\Tab::make('Payment')
                            ->icon('heroicon-m-banknotes')
                            ->schema([
                                Section::make('ZarinPal Payment')
                                    ->description('https://www.zarinpal.com/')
                                    ->schema([
                                        TextInput::make('merchantID')
                                            ->label('Merchant ID'),
                                        Toggle::make('zarinGate')
                                            ->label('zarin Gate')
                                            ->inline(false)
                                            ->onIcon('heroicon-o-light-bulb')
                                            ->offIcon('heroicon-s-light-bulb'),
                                        Toggle::make('sandbox')
                                            ->label('SandBox')
                                            ->inline(false)
                                            ->onIcon('heroicon-o-light-bulb')
                                            ->offIcon('heroicon-s-light-bulb'),
                                        Textarea::make('enamad')
                                        ->label("Enamad Code")
                                        ->columnSpanFull()
                                    ])->columns(3)
                            ]),
                        Tabs\Tab::make('Sms')
                            ->icon('heroicon-m-chat-bubble-bottom-center-text')
                            ->schema([
                                Section::make('Rate limiting')
                                    ->description('Prevent abuse by limiting the number of requests per period')
                                    ->schema([
                                        TextInput::make('sms_username')
                                            ->label('Username'),
                                        TextInput::make('sms_password')
                                            ->label('Password'),
                                        TextInput::make('sms_number')
                                            ->label('Number'),
                                    ])->columns(3)

                            ]),
                        Tabs\Tab::make('Ai')
                            ->icon('heroicon-m-sparkles')
                            ->schema([
                                Section::make('Rate limiting')
                                    ->description('Prevent abuse by limiting the number of requests per period')
                                    ->schema([
                                        TextInput::make('ai_key')
                                            ->label('Chatgpt Api Key'),
                                        TextInput::make('ai_duration')
                                            ->label('Day Duration For Article'),
                                        TagsInput::make('ai_title')
                                            ->label('Title For Make Ai Article')
                                            ->separator(',')
                                    ])


                            ]),
                        Tabs\Tab::make('Config')
                            ->icon('heroicon-m-check-badge')
                            ->schema([

                                Section::make('Config base Site')
                                    ->columns([
                                        'defaults' => 2,
                                        'sm' => 2,
                                        'xl' => 4,
                                    ])
                                    ->description('Prevent abuse by limiting the number of requests per period')
                                    ->schema([
                                        Toggle::make('maintenance')
                                            ->label('Website Maintenance')
                                            ->onIcon('heroicon-o-light-bulb')
                                            ->offIcon('heroicon-s-light-bulb'),
                                        Toggle::make('auth')
                                            ->label('Authentication')
                                            ->onIcon('heroicon-o-light-bulb')
                                            ->offIcon('heroicon-s-light-bulb'),
                                        Toggle::make('locales')
                                            ->label('Multi Language')
                                            ->onIcon('heroicon-o-light-bulb')
                                            ->offIcon('heroicon-s-light-bulb'),
                                        Toggle::make('tune')
                                            ->label('Tune System')
                                            ->onIcon('heroicon-o-light-bulb')
                                            ->offIcon('heroicon-s-light-bulb')

                                    ]),

                            ]),
                    ])->columnSpanFull()

            ]);
    }
}
