<?php

namespace App\Livewire\Pages;

use Artesaos\SEOTools\Facades\SEOTools;
use Illuminate\Support\Facades\URL;
use Livewire\Component;
use App\Settings\GeneralSettings;

class Home extends Component
{
    public function render(GeneralSettings $settings)
    {
        SEOTools::setTitle($settings->site_name);
        SEOTools::setDescription($settings->info);
        SEOTools::setCanonical(URL::current());
        SEOTools::opengraph()->addProperty('type', 'articles');
        \SEOMeta::setKeywords($settings->seo_tags);
        return view('livewire.pages.home');
    }
}
