<?php
/**
 * OnionEngine.
 *
 * @author   Kamil Weber <kamilweber24@gmail.com>
 * @license  http://opensource.org/licenses/MIT
 * @package  onionengine
 */

namespace KWeber\OnionEngine\App\Managers;

use Illuminate\Support\Facades\Cache;
use Kweber\OnionEngine\App\Http\Models\Setting;
use Kweber\OnionEngine\App\Repositories\SettingRepository;

class SettingManager
{
    /**
     * Settings repository.
     */
    protected $settings;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Setting $settings)
    {
        $this->settings = new SettingRepository($settings);
    }

    /**
     * Get and cache setting.
     *
     * @return string
     */
    public function get($key)
    {
        return Cache::rememberForever($key, function () use ($key) {
            $setting = $this->settings->get($key);

            return ($setting) ? $setting->value : null;
        });
    }

    /**
     * Set and cache setting.
     *
     * @return string
     */
    public function set($key, $value)
    {
        Cache::forget($key);

        return Cache::rememberForever($key, function () use ($key, $value) {
            $setting = $this->settings->set($key, $value);

            return ($setting) ? $setting->value : null;
        });
    }

    /**
     * Flush settings cache
     *
     * @return string
     */
    public function flush()
    {
        Cache::flush();
    }
}
