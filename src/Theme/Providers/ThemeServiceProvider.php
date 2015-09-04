<?php

namespace Mari\Theme\Providers;

use Illuminate\Support\ServiceProvider;

class ThemeServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
      // $this->loadViewsFrom(__DIR__.'/../Resources/Views', 'Post');
      \View::addNamespace('backend',array(base_path().'/resources/views/backend'));
      \View::addNamespace('frontend',array(base_path().'/resources/views/frontend'));
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
