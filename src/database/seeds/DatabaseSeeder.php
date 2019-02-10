<?php

namespace Kweber\OnionEngine\Database\Seeds;
// namespace Kweber\OnionEngine;

use Illuminate\Database\Seeder;
use Kweber\OnionEngine\Database\Seeds\RolesAndPermissionsSeeder;
use Kweber\OnionEngine\Database\Seeds\DefaultAdminSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run() {
      $this->call([
          RolesAndPermissionsSeeder::class,
          DefaultAdminSeeder::class,
      ]);
    }
}
