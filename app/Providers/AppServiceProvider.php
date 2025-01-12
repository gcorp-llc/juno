<?php

namespace App\Providers;

use App\Settings\GeneralSettings;
use BezhanSalleh\FilamentLanguageSwitch\LanguageSwitch;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        // ...existing code...
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(GeneralSettings $settings): void
    {
        $data = match (app()->getLocale()) {
            'en' => [
                "auth" => $settings->auth,
                "locales" => $settings->locales,
                "tune" => $settings->tune,

                "favicon" => $settings->favicon,
                "nav_icon" => $settings->nav_icon,
                "footer_logo" => $settings->footer_logo,

                "site_name" => $settings->site_name_en ?? $settings->site_name,
                "info" => $settings->info_en ?? $settings->$settings->info,
                "description" => $settings->description_en ?? $settings->$settings->description,
                "pc_banner" => $settings->pc_banner_en ?? $settings->pc_banner,
                "mb_banner" => $settings->mb_banner_en ?? $settings->mb_banner,
                "teaser_cover" => $settings->teaser_cover_en ?? $settings->teaser_cover,
                "teaser_video" => $settings->teaser_video_en ?? $settings->teaser_video,

                "instagram" => $settings->instagram,
                "telegram" => $settings->telegram,
                "whatsapp" => $settings->whatsapp,
                "eitaa" => $settings->eitaa,
                "bale" => $settings->bale,
                "robika" => $settings->robika,
                "enamad" => $settings->enamad,
            ],
            'ar' => [
                "auth" => $settings->auth,
                "locales" => $settings->locales,
                "tune" => $settings->tune,

                "favicon" => $settings->favicon,
                "nav_icon" => $settings->nav_icon,
                "footer_logo" => $settings->footer_logo,

                "site_name" => $settings->site_name_ar ?? $settings->site_name,
                "info" => $settings->info_ar ?? $settings->$settings->info,
                "description" => $settings->description_ar ?? $settings->$settings->description,
                "pc_banner" => $settings->pc_banner_ar ?? $settings->pc_banner,
                "mb_banner" => $settings->mb_banner_ar ?? $settings->mb_banner,
                "teaser_cover" => $settings->teaser_cover_ar ?? $settings->teaser_cover,
                "teaser_video" => $settings->teaser_video_ar ?? $settings->teaser_video,

                "instagram" => $settings->instagram,
                "telegram" => $settings->telegram,
                "whatsapp" => $settings->whatsapp,
                "eitaa" => $settings->eitaa,
                "bale" => $settings->bale,
                "robika" => $settings->robika,
                "enamad" => $settings->enamad,
            ],
            default => [

                "auth" => $settings->auth,
                "locales" => $settings->locales,
                "tune" => $settings->tune,

                "favicon" => $settings->favicon,
                "nav_icon" => $settings->nav_icon,
                "footer_logo" => $settings->footer_logo,
                "site_name" => $settings->site_name,
                "info" => $settings->info,
                "description" => $settings->description,
                "pc_banner" => $settings->pc_banner,
                "mb_banner" => $settings->mb_banner,
                "teaser_cover" => $settings->teaser_cover,
                "teaser_video" => $settings->teaser_video,
                "instagram" => $settings->instagram,
                "telegram" => $settings->telegram,
                "whatsapp" => $settings->whatsapp,
                "eitaa" => $settings->eitaa,
                "bale" => $settings->bale,
                "robika" => $settings->robika,
                "enamad" => $settings->enamad,
            ],
        };

        View::share('settings', (object)$data);
        LanguageSwitch::configureUsing(function (LanguageSwitch $switch) {
            $switch->locales(['fa', 'ar', 'en']); // also accepts a closure
        });
    }
}
