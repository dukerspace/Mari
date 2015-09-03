<?php

namespace Mari\Post\Providers;

use Illuminate\Support\ServiceProvider;

class CoreServiceProvider extends ServiceProvider
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

      $this->loadViewsFrom(__DIR__.'/../resources/views', 'core');

      $this->publishes([
        __DIR__.'../database/migrations/' => database_path('migrations')
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
