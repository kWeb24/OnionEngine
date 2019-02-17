<?php
/**
 * OnionEngine
 *
 * @author   Kamil Weber <kamilweber24@gmail.com>
 * @license  http://opensource.org/licenses/MIT
 * @package  onionengine
 */

 namespace KWeber\OnionEngine\Managers;

 use KWeber\OnionEngine\App\Models\Settings;
 use Kweber\OnionEngine\App\Repositories\SettingRepository;
 use KWeber\OnionEngine\App\Models\Settings;

 class SettingManager {
    /**
      * Settings model.
      *
      */
    protected $settings;
    /**
      * Create a new controller instance.
      *
      * @return void
      */
    public function __construct(Settings $settings)
    {
        $this->settings = new SettingsRepository($settings)
    }
 }
