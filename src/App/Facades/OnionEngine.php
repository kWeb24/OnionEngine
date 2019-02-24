<?php
/**
 * OnionEngine.
 *
 * @author   Kamil Weber <kamilweber24@gmail.com>
 * @license  http://opensource.org/licenses/MIT
 * @package  onionengine
 */

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
     * Get auth routes.
     *
     * @return string
     */
    public static function authRoutes()
    {
        require __DIR__.'/../../../routes/auth.php';
    }

    /**
     * Get web routes.
     *
     * @return string
     */
    public static function webRoutes()
    {
        require __DIR__.'/../../../routes/web.php';
    }

    /**
     * Get all routes.
     *
     * @return string
     */
    public static function routes()
    {
        OnionEngine::authRoutes();
        OnionEngine::webRoutes();
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

    /**
     * Get OnionEngine setting.
     *
     * @return array
     */
    public static function setting($key)
    {
        $settings = \App::make('SettingManager');
        
        return $settings->get($key);
    }

    /**
     * Get site settings.
     *
     * @return string
     */
    public static function site($settingType = null)
    {
        switch ($settingType) {
          case 'title': return OnionEngine::siteTitle(); break;
          case 'desc': return OnionEngine::siteDescription(); break;
          case 'lang': return OnionEngine::siteLanguage(); break;
          default: {
            return [
              'title' => OnionEngine::siteTitle(),
              'desc' => OnionEngine::siteDescription(),
              'lang' => OnionEngine::siteLanguage(),
            ];
            break;
          }
        }
    }

    /**
     * Get site title.
     *
     * @return string
     */
    public static function siteTitle()
    {
        return (OnionEngine::setting('site_title')) ? OnionEngine::setting('site_title') : config('app.name', 'Site title');
    }

    /**
     * Get site description.
     *
     * @return string
     */
    public static function siteDescription()
    {
        return OnionEngine::setting('site_description');
    }

    /**
     * Get site language.
     *
     * @return string
     */
    public static function siteLanguage()
    {
        return OnionEngine::setting('site_language');
    }
}
