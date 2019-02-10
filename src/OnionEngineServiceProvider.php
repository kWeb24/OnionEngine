<?php

namespace Kweber\OnionEngine;

use Illuminate\Support\ServiceProvider;
use Kweber\OnionEngine\App\Console\Commands\Installer\Installer;

class OnionEngineServiceProvider extends ServiceProvider
{
    protected $vendorPublicPath;

    /**
     * Perform post-registration booting of services.
     *
     * @return  void
     */
    public function boot()
    {
        $this->vendorPublicPath = config('onion_engine.options.public_assets_path');
        // $this->loadMigrationsFrom(__DIR__.'/path/to/migrations');
        // $this->loadTranslationsFrom(__DIR__.'/path/to/translations', 'courier');
        $this->loadViewsFrom(__DIR__.'/../resources/views/admin/', 'OnionEngineAdmin');
        $this->loadRoutes();
        $this->publishConfig();
        $this->registerCommands();
        $this->publishAdminAssets();
    }

    /**
     * Make config publishment optional by merging the config from the package.
     *
     * @return  void
     */
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/../config/onion_engine.php',
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
            __DIR__.'/../config/onion_engine.php' => config_path('onion_engine.php'),
        ], 'oe-config');
    }

    /**
     * Publishes admin assets.
     *
     * @return  void
     */
    private function publishAdminAssets()
    {
        $this->publishes([
            __DIR__.'/../resources/admin/assets/' => public_path($this->vendorPublicPath . 'admin/assets/'),
        ], 'oe-admin-assets');
    }

    /**
     * Register Artisan commands.
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

    /**
     * Load routes.
     *
     * @return  void
     */
    private function loadRoutes()
    {
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
    }
}
