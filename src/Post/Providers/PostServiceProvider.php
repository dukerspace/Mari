<?php

namespace Mari\Post\Providers;

use Illuminate\Support\ServiceProvider;

class PostServiceProvider extends ServiceProvider
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
