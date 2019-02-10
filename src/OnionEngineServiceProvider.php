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
        $this->loadMigrations();
        $this->loadTranslations();
        $this->loadViews();
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
            __DIR__.'/../resources/dashboard/assets/' => public_path($this->vendorPublicPath.'dashboard/assets/'),
        ], 'oe-dashboard-assets');
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
        // We're loading routes through OnionEngine facade
    }

    /**
     * Load migrations.
     *
     * @return  void
     */
    private function loadMigrations()
    {
        // No migrations so far
    }

    /**
     * Load translations.
     *
     * @return  void
     */
    private function loadTranslations()
    {
        // No translations so far
    }

    /**
     * Load package views.
     *
     * @return  void
     */
    private function loadViews()
    {
        $this->loadViewsFrom(__DIR__.'/../resources/views/dashboard/', 'OnionEngineDashboard');
        $this->loadViewsFrom(__DIR__.'/../resources/views/admin/', 'OnionEngineAdmin');
    }
}
