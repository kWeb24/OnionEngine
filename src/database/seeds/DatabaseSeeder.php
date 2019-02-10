<?php

namespace Kweber\OnionEngine\Database\Seeds;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            \Kweber\OnionEngine\Database\Seeds\RolesAndPermissionsSeeder::class,
            \Kweber\OnionEngine\Database\Seeds\DefaultAdminSeeder::class,
        ]);
    }
}
