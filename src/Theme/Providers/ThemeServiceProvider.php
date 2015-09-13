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
      $backend = $this->app['theme']->getBackend();
      $frontend = $this->app['theme']->getFrontend();
      \View::addNamespace('backend',base_path('themes/'.$backend));
      \View::addNamespace('frontend',base_path('themes/'.$frontend));
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
      $this->app->bind('theme', function ($app) {
        return $this->app->make('Mari\Theme\Http\\Repositories\ThemeRepository');
      });
    }
}
