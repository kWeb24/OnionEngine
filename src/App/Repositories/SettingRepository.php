<?php
/**
 * OnionEngine.
 *
 * @author   Kamil Weber <kamilweber24@gmail.com>
 * @license  http://opensource.org/licenses/MIT
 * @package  onionengine
 */

namespace Kweber\OnionEngine\App\Repositories;

use Illuminate\Database\Eloquent\Model;
use Kweber\OnionEngine\App\Interfaces\ISettings;

class SettingRepository implements ISettings
{
    /**
     * The repository model.
     */
    protected $model;

    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    /**
     * Get setting from database.
     *
     * @param  string  $key
     * @return mixed
     */
    public function get($key)
    {
        return $this->model->where(['key' => $key])->first();
    }

    /**
     * Save setting in database.
     *
     * @param  string  $key
     * @param  string  $key
     */
    public function set($key, $value)
    {
        $setting = $this->get($key);

        if ($setting) {
            $setting->value = $value;
        } else {
            $setting = $this->model->create([
                'key' => $key,
                'value' => $value,
            ]);
        }

        return $setting;
    }

    /**
     * Check if setting exist in database.
     *
     * @param  string  $key
     * @return bool
     */
    public function has($key)
    {
        $setting = $this->get($key);

        return $setting ? true : false;
    }

    /**
     * Remove setting from database.
     *
     * @param  string  $key
     * @return void
     */
    public function forget($key)
    {
        $setting = $this->get($key);
        $setting->delete();
    }

    /**
     * Remove all settings from database.
     *
     * @return void
     */
    public function forgetAll()
    {
        $this->model->truncate();
    }

    /**
     * Get all settings from database.
     *
     * @return array
     */
    public function getAll()
    {
        return $this->model->all();
    }
}
