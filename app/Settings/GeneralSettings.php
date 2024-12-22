<?php

namespace App\Settings;

use Spatie\LaravelSettings\Settings;

class GeneralSettings extends Settings
{
    public bool $maintenance, $auth, $locales, $tune;
    public ?string $favicon , $nav_icon, $footer_logo;
    public ?string $site_name, $info, $description;
    public ?string $site_name_en, $info_en, $description_en;
    public ?string $site_name_ar, $info_ar, $description_ar;
    public ?string $pc_banner, $mb_banner, $teaser_cover, $teaser_video;
    public ?string $pc_banner_en, $mb_banner_en, $teaser_cover_en, $teaser_video_en;
    public ?string $pc_banner_ar, $mb_banner_ar, $teaser_cover_ar, $teaser_video_ar;

    public ?string $instagram, $telegram, $whatsapp, $eitaa, $bale, $robika;

    public ?string $google_tag_manager_id,$seo_tags;

    public ?string $merchantID,$enamad;
    public ?bool $zarinGate, $sandbox;

    public ?string $user, $password, $number;

    public ?string $ai_key, $ai_duration, $ai_title;

    public static function group(): string
    {
        return 'general';
    }
//    public static function repository(): ?string
//    {
//        return 'global_settings';
//    }
}
