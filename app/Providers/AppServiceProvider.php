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
        // ...existing code...
        View::share('settings', $settings);
        LanguageSwitch::configureUsing(function (LanguageSwitch $switch) {
            $switch->locales(['fa', 'ar', 'en']); // also accepts a closure
        });
    }
}
