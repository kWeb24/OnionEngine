<?php

namespace kweber\OnionEngine;

use Illuminate\Support\ServiceProvider;
use kweber\OnionEngine\App\Console\Commands\Installer\Installer;

class OnionEngineServiceProvider extends ServiceProvider
{
    /**
    * Booting up package
    *
    * @return  void
    */
    public function boot()
    {
        // $this->loadRoutesFrom(__DIR__.'/routes.php');
        // $this->loadMigrationsFrom(__DIR__.'/path/to/migrations');
        // $this->loadTranslationsFrom(__DIR__.'/path/to/translations', 'courier');
        // $this->loadViewsFrom(__DIR__.'/path/to/views', 'courier');
        $this->publishConfig();
        $this->registerCommands();
    }

    /**
    * Make config publishment optional by merging the config from the package.
    *
    * @return  void
    */
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__ . '/../config/onion_engine.php',
            'onion_engine'
        );
    }

    /**
    * Publishes configuration files.
    *
    * @return  void
    */
    private function publishConfig()
    {
        $this->publishes([
            __DIR__ . '/../config/onion_engine.php' => config_path('onion_engine.php'),
        ], 'onion-engine-config');
    }

    /**
    * Create Artisan commands.
    *
    * @return  void
    */
    private function registerCommands()
    {
      if ($this->app->runningInConsole()) {
          $this->commands([
              Installer::class,
          ]);
      }
    }
}
