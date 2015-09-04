<?php

namespace Mari\User\Providers;

use Illuminate\Support\ServiceProvider;

class UserServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
      if (! $this->app->routesAreCached()) {
        require __DIR__.'/../Http/routes.php';
      }

      $this->loadTranslationsFrom(__DIR__.'/../Resources/Lang', 'user');
      // $this->loadViewsFrom(__DIR__.'/../Resources/Views', 'Post');

      $this->publishes([
        __DIR__.'/../Database/Migrations/' => database_path('migrations')
      ], 'migrations');
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
