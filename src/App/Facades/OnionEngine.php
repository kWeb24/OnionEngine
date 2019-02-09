<?php

namespace kweber\OnionEngine\App\Facades;

use Illuminate\Support\Facades\Facade;

class OnionEngine extends Facade
{
    /**
     * Semantic Versioning 2.0.0
     * Major.Minor.Patch-label
     * MAJOR version when you make incompatible API changes,
     * MINOR version when you add functionality in a backwards-compatible manner
     * PATCH version when you make backwards-compatible bug fixes.
     * Labels for relase-candidate etc
     * https://semver.org/
     */
    public static $version = '0.1.0-alpha';

    /**
     * Current version stability
     */
    public static $stability = 'dev-develop';

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor() {
        return 'OnionEngine';
    }

    /**
     * Get package version
     *
     * @return string
     */
    public static function version() {
        return OnionEngine::$version;
    }

    /**
     * Get package stability
     *
     * @return string
     */
    public static function stability() {
        return OnionEngine::$stability;
    }
}
