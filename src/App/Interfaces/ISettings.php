<?php
/**
 * OnionEngine
 *
 * @author   Kamil Weber <kamilweber24@gmail.com>
 * @license  http://opensource.org/licenses/MIT
 * @package  onionengine
 */

 namespace Kweber\OnionEngine\App\Interfaces;

 interface ISettings {
   public function get($key);

   public function set($key, $value);

   public function has($key);

   public function forget($key);

   public function forgetAll();

   public function getAll();

   public function save();

   public function load($force = false);

   protected function read();

   protected function write(array $data);
 }
