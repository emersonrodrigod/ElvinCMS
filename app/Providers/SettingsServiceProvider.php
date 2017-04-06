<?php

namespace App\Providers;

use App\Setting;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Schema;

class SettingsServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     * 
     * @return void
     */
    public function boot()
    {
        if(Schema::hasTable('settings'))
        {
            $settings = Cache::get('settings', Setting::fetch());
            config()->set('settings', $settings);
        }
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
