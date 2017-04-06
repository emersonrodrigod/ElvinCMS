<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Form;

class FormServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        Form::component('finder', 'cms.components.finder', ['name', 'value', 'attributes']);
        Form::component('isErasable', 'cms.components.isErasable', ['value', 'attributes']);
        Form::component('isVisible', 'cms.components.isVisible', ['value', 'attributes']);   
        Form::component('link', 'cms.components.link', ['name', 'value', 'attributes']);
        Form::component('map', 'cms.components.map', ['name', 'value', 'attributes']);
        
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
