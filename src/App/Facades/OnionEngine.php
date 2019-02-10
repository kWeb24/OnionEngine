<?php

namespace Kweber\OnionEngine\App\Facades;

use Illuminate\Support\Facades\Facade;

class OnionEngine extends Facade
{
    /**
     * Semantic Versioning 2.0.0
     * Major.Minor.Patch-label
     * MAJOR version when you make incompatible API changes,
     * MINOR version when you add functionality in a backwards-compatible manner
     * PATCH version when you make backwards-compatible bug fixes.
     * Labels: -dev (-d) -patch (-p) -alpha (-a) -beta (-b) -relase-candidate (-rc) -relase (-r)
     * https://semver.org/.
     */
    public static $version = '0.1.1-d';

    /**
     * Current version stability.
     */
    public static $stability = 'dev';

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'OnionEngine';
    }

    /**
     * Get package version.
     *
     * @return string
     */
    public static function version()
    {
        return OnionEngine::$version;
    }

    /**
     * Get package stability.
     *
     * @return string
     */
    public static function stability()
    {
        return OnionEngine::$stability;
    }

    /**
     * Get package stability.
     *
     * @return string
     */
    public static function authRoutes()
    {
        require __DIR__.'/../../../routes/auth.php';
    }

    /**
     * Get package dashboard assets path.
     *
     * @return string
     */
    public static function dashboardAssetsPath()
    {
        return asset(config('onion_engine.options.public_assets_path').'dashboard/assets').'/';
    }

    /**
     * Get package assets path.
     *
     * @return string
     */
    public static function assetsPath()
    {
        return asset(config('onion_engine.options.public_assets_path')).'/';
    }
}
