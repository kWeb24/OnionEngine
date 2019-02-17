<?php
/**
 * OnionEngine
 *
 * @author   Kamil Weber <kamilweber24@gmail.com>
 * @license  http://opensource.org/licenses/MIT
 * @package  onionengine
 */

namespace Kweber\OnionEngine\App\Repositories;

use Illuminate\Database\Eloquent\Model;
use Kweber\OnionEngine\App\Interfaces\ISettings;

class SettingRepository implements ISettings {
    public function __construct(Model $model)
    {
        $this->model = $model;
    }
    /**
     * The repository model.
     *
     */
    protected $model;
    /**
     * The settings data.
     *
     * @var array
     */
    protected $data = [];

    /**
     * Whether the store has changed since it was last loaded.
     *
     * @var array
     */
    protected $unsaved = false;

    /**
     * Whether the settings data are loaded.
     *
     * @var array
     */
    protected $loaded = true;

    /**
     *
     * @param  string  $key
     * @return mixed
     */
    public function get($key) {

    }

    /**
     *
     * @param  string  $key
     * @param  string|array  $key
     */
    public function set($key, $value) {

    }

    /**
     *
     * @param  string  $key
     * @return boolean
     */
    public function has($key) {

    }

    /**
     *
     * @param  string  $key
     * @return void
     */
    public function forget($key) {

    }

    /**
     *
     * @return void
     */
    public function forgetAll() {

    }

    /**
     *
     * @return array
     */
    public function getAll() {

    }

    /**
     *
     * @return void
     */
    public function save() {

    }

    /**
     *
     * @param boolean $force
     */
    public function load($force = false) {

    }

    /**
     * Read the data from the store.
     *
     * @return array
     */
    protected function read() {

    }

    /**
     * Write the data into the store.
     *
     * @param  array  $data
     *
     * @return void
     */
    protected function write(array $data) {

    }
}
