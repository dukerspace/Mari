<?php

namespace Mari\Permission\Providers;

use Illuminate\Support\ServiceProvider;

class PermissionServiceProvider extends ServiceProvider
{
    public function boot()
    {
      $this->publishes([
        __DIR__.'/../Database/Migrations/' => database_path('migrations')
      ], 'migrations');
      $this->publishes([
        __DIR__.'/../Database/Seeds/' => base_path('database/seeds')
      ], 'seeds');
    }

    public function register()
    {
      // $this->app->bind('permission', function ($app) {
      //   return $this->app->make('Mari\Permission');
      // });
      //
      // $this->app->bind(
      //     'Mari\\Permission\\Http\\Repositories\\PermissionInterface',
      //     'Mari\\Permission\\Http\\Repositories\\PermissionRepository'
      // );
    }
}
