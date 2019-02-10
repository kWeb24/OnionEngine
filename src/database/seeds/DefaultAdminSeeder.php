<?php

namespace Kweber\OnionEngine\Database\Seeds;

use Illuminate\Database\Seeder;
use App\User;

class DefaultAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $hasDefault = User::where(['name' => 'admin'])->first();

        if (!$hasDefault) {
          $this->createAdminUser();
        }
    }

    /**
     * Create admin user.
     *
     * @return void
     */
    private function createAdminUser()
    {
        $user = User::create([
          'name' => 'Admin',
          'email' => 'admin@example.com',
          'password' => bcrypt('admin'),
        ]);

        $user->assignRole('super-admin');
        $user->save();
    }
}
