<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        app()['cache']->forget('spatie.permission.cache');

        Permission::create(['name' => 'create products']);
        Permission::create(['name' => 'edit products']);
        Permission::create(['name' => 'delete products']);

        $role = Role::create(['name' => 'user']);
        $role->givePermissionTo('create products');

        $role = Role::create(['name' => 'moderator']);
        $role->givePermissionTo('create products', 'edit products', 'delete products');

        $role = Role::create(['name' => 'deleter']);
        $role->givePermissionTo( 'delete products');

        $role = Role::create(['name' => 'owner']);
        $role->givePermissionTo(Permission::all());
    }
}
