<?php

namespace kweber\OnionEngine;

use Illuminate\Support\ServiceProvider;
use kweber\OnionEngine\App\Console\Commands\Installer\Installer;

class OnionEngineServiceProvider extends ServiceProvider
{
    /**
    * Publishes configuration file.
    *
    * @return  void
    */
    public function boot()
    {
        // $this->loadRoutesFrom(__DIR__.'/routes.php');
        // $this->loadMigrationsFrom(__DIR__.'/path/to/migrations');
        // $this->loadTranslationsFrom(__DIR__.'/path/to/translations', 'courier');
        // $this->loadViewsFrom(__DIR__.'/path/to/views', 'courier');
        // $this->publishes([
        //     __DIR__ . '/../config/onion_engine.php' => config_path('onion_engine.php'),
        // ], 'onion-engine-config');

        if ($this->app->runningInConsole()) {
            $this->commands([
                Installer::class,
            ]);
        }
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

    $this->app->bind('App\User', function(){
        return $this->app->make('kweber\OnionEngine\App\User');
    });
}
