<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class PermissionsRolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // create permissions
        Permission::create(['name' => 'admin_access']);
        Permission::create(['name' => 'padre_access']);
        Permission::create(['name' => 'profesor_access']);

        // create roles and assign created permissions

        // this can be done as separate statements
        $role = Role::create(['name' => 'admin']);
        $role->givePermissionTo(Permission::all());

        // or may be done by chaining
        $role = Role::create(['name' => 'padre']);
        $role->givePermissionTo(['padre_access']);

        $role = Role::create(['name' => 'profesor']);
        $role->givePermissionTo('profesor_access');

        $user           = new User();
        $user->name     = 'admin';
        $user->email    = 'davidcam2090@gmail.com';
        $user->password = Hash::make('admin123');
        $user ->save();

        //Attach Admin role
        $user->assignRole(1);
    }
}
