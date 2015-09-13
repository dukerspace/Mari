<?php

namespace Mari\User\Providers;

use Illuminate\Support\ServiceProvider;

class UserServiceProvider extends ServiceProvider
{
    public function boot()
    {
      if (! $this->app->routesAreCached()) {
        require __DIR__.'/../Http/routes.php';
      }

      $this->publishes([
        __DIR__.'/../Database/Migrations/' => database_path('migrations')
      ], 'migrations');

      $this->publishes([
        __DIR__.'/../Database/Seeds/' => database_path('seeds')
      ], 'seeds');
    }

    public function register()
    {
        //
    }
}
