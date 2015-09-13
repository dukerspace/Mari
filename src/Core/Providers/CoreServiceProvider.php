<?php

namespace Mari\Core\Providers;

use Illuminate\Support\ServiceProvider;

class CoreServiceProvider extends ServiceProvider
{
    protected $commands = [
      'Mari\Core\Console\CoreCommand'
    ];

    public function boot()
    {
      if (! $this->app->routesAreCached()) {
        require __DIR__.'/../Http/routes.php';
      }

      $this->publishes([
        __DIR__.'/../Database/Migrations/' => database_path('migrations')
      ], 'migrations');
    }

    public function register()
    {
      $this->commands($this->commands);

      $this->app->bind('core', function ($app) {
        return $this->app->make('Mari\Core');
      });

      $this->app->bind(
          'Mari\\Permission\\Http\\Repositories\\PermissionInterface',
          'Mari\\Permission\\Http\\Repositories\\PermissionRepository'
      );
    }
}
