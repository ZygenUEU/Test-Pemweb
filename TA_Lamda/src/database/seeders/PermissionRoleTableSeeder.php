<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Models\Role;
use Illuminate\Database\Seeder;

use Illuminate\Support\Str;


class PermissionRoleTableSeeder extends Seeder
{
    public function run()
    {
        $admin_permissions = Permission::all();

        $admin_permissions = $admin_permissions->filter(function ($permission) {
            return substr($permission->title, 0, 5) != 'login';
        });
        Role::findOrFail(1)->permissions()->sync($admin_permissions->pluck('id'));

        $admin_permissions = Permission::all();

        $guest_permissions = $admin_permissions->filter(function ($permission) {
            $title = $permission->title;
            return !Str::endsWith($title, '_delete') &&
                   !Str::endsWith($title, '_edit') &&
                   !Str::endsWith($title, '_create') &&
                   !Str::startsWith($title, 'user_') &&
                   !Str::startsWith($title, 'role_') &&
                   !Str::startsWith($title, 'permission_') &&
                   !Str::startsWith($title, 'dashboard_') &&
                   !Str::startsWith($title, 'logout') &&
                   !Str::startsWith($title, 'profile_') &&
                   !Str::startsWith($title, 'database_');
        });
        

        Role::findOrFail(2)->permissions()->sync($guest_permissions);

        $user_permissions = $admin_permissions->filter(function ($permission) {
            $title = $permission->title;
            return !Str::startsWith($title, 'user_') &&
                   !Str::startsWith($title, 'role_') &&
                   !Str::startsWith($title, 'permission_') &&
                   !Str::startsWith($title, 'dashboard_') &&
                   !Str::startsWith($title, 'login') &&
                   !Str::startsWith($title, 'database_');
        });

        Role::findOrFail(3)->permissions()->sync($user_permissions);
    }
}
