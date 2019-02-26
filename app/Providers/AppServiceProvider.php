<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Setting;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // Get the locale stored in the settings table
        $locale = Setting::where('name', 'locale')->first();

        // Setup the app locale
        app()->setLocale($locale ? $locale->value : config('app.locale'));
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {

    }
}
