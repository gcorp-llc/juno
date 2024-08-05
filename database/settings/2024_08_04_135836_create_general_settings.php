<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

return new class extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('general.maintenance', false);
        $this->migrator->add('general.auth', false);
        $this->migrator->add('general.locales', false);
        $this->migrator->add('general.tune', false);

        $this->migrator->add('general.favicon', null);
        $this->migrator->add('general.nav_icon', null);
        $this->migrator->add('general.footer_logo', null);

        $this->migrator->add('general.site_name','Juno');
        $this->migrator->add('general.info',"Powered GCORP LLC");
        $this->migrator->add('general.description',null);

        $this->migrator->add('general.site_name_en',null);
        $this->migrator->add('general.info_en',null);
        $this->migrator->add('general.description_en',null);

        $this->migrator->add('general.site_name_ar',null);
        $this->migrator->add('general.info_ar',null);
        $this->migrator->add('general.description_ar',null);

        $this->migrator->add('general.pc_banner',null);
        $this->migrator->add('general.mb_banner',null);
        $this->migrator->add('general.teaser_cover',null);
        $this->migrator->add('general.teaser_video',null);

        $this->migrator->add('general.pc_banner_en',null);
        $this->migrator->add('general.mb_banner_en',null);
        $this->migrator->add('general.teaser_cover_en',null);
        $this->migrator->add('general.teaser_video_en',null);

        $this->migrator->add('general.pc_banner_ar',null);
        $this->migrator->add('general.mb_banner_ar',null);
        $this->migrator->add('general.teaser_cover_ar',null);
        $this->migrator->add('general.teaser_video_ar',null);

        $this->migrator->add('general.instagram',null);
        $this->migrator->add('general.telegram',null);
        $this->migrator->add('general.whatsapp',null);
        $this->migrator->add('general.eitaa',null);
        $this->migrator->add('general.bale',null);
        $this->migrator->add('general.robika',null);

        $this->migrator->add('general.google_tag_manager_id',null);
        $this->migrator->add('general.seo_tags',null);

        $this->migrator->add('general.merchantID',null);
        $this->migrator->add('general.zarinGate',null);
        $this->migrator->add('general.sandbox',null);

        $this->migrator->add('general.user',null);
        $this->migrator->add('general.password',null);
        $this->migrator->add('general.number',null);

        $this->migrator->add('general.ai_key',null);
        $this->migrator->add('general.ai_duration',null);
        $this->migrator->add('general.ai_title',null);
    }
};
