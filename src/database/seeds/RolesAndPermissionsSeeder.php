<?php

namespace Kweber\OnionEngine\Database\Seeds;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesAndPermissionsSeeder extends Seeder
{
    protected $permissions = [
      'manage admins',
      'manage moderators',
      'manage editors',
      'manage users',
    ];

    protected $roles = [
      'super-admin' => ['all'],
      'admin' => ['manage moderators', 'manage editors', 'manage users'],
      'moderator' => ['manage editors', 'manage users'],
      'editor' => [],
      'user' => [],
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        app()['cache']->forget('spatie.permission.cache');
        $this->createPermissions();
        $this->createRoles();
    }

    /**
     * Create roles.
     *
     * @return void
     */
    private function createRoles()
    {
        foreach ($this->roles as $name=>$role) {
            $dbRole = Role::where(['name' => $name])->first();

            if (! $dbRole) {
                $role = Role::create(['name' => $name]);
                $this->assignPermissions($role, $name);
            }
        }
    }

    /**
     * Assign permissions.
     *
     * @return void
     */
    private function assignPermissions($role, $name)
    {
        foreach ($this->roles[$name] as $permission) {
            $dbPermission = Permission::where(['name' => $permission])->first();

            if ($dbPermission) {
                $role->givePermissionTo(($permission == 'all') ? Permission::all() : $dbPermission);
            }
        }
    }

    /**
     * Create permissions.
     *
     * @return void
     */
    private function createPermissions()
    {
        foreach ($this->permissions as $permission) {
            $dbPermission = Permission::where(['name' => $permission])->first();

            if (! $dbPermission) {
                Permission::create(['name' => $permission]);
            }
        }
    }
}
