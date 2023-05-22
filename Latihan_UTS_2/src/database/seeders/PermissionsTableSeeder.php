<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            [
                'id'    => 1,
                'title' => 'user_management_access',
            ],
            [
                'id'    => 2,
                'title' => 'permission_create',
            ],
            [
                'id'    => 3,
                'title' => 'permission_edit',
            ],
            [
                'id'    => 4,
                'title' => 'permission_show',
            ],
            [
                'id'    => 5,
                'title' => 'permission_delete',
            ],
            [
                'id'    => 6,
                'title' => 'permission_access',
            ],
            [
                'id'    => 7,
                'title' => 'role_create',
            ],
            [
                'id'    => 8,
                'title' => 'role_edit',
            ],
            [
                'id'    => 9,
                'title' => 'role_show',
            ],
            [
                'id'    => 10,
                'title' => 'role_delete',
            ],
            [
                'id'    => 11,
                'title' => 'role_access',
            ],
            [
                'id'    => 12,
                'title' => 'user_create',
            ],
            [
                'id'    => 13,
                'title' => 'user_edit',
            ],
            [
                'id'    => 14,
                'title' => 'user_show',
            ],
            [
                'id'    => 15,
                'title' => 'user_delete',
            ],
            [
                'id'    => 16,
                'title' => 'user_access',
            ],
            [
                'id'    => 17,
                'title' => 'sample_access',
            ],
            [
                'id'    => 18,
                'title' => 'book_create',
            ],
            [
                'id'    => 19,
                'title' => 'book_edit',
            ],
            [
                'id'    => 20,
                'title' => 'book_show',
            ],
            [
                'id'    => 21,
                'title' => 'book_delete',
            ],
            [
                'id'    => 22,
                'title' => 'book_access',
            ],
            [
                'id'    => 23,
                'title' => 'profile_password_edit',
            ],
            [
                'id'    => 24,
                'title' => 'film_access',
            ],
            [
                'id'    => 25,
                'title' => 'film_create',
            ],
            [
                'id'    => 26,
                'title' => 'film_edit',
            ],
            [
                'id'    => 27,
                'title' => 'film_show',
            ],
            [
                'id'    => 28,
                'title' => 'film_delete',
            ],
            [
                'id'    => 29,
                'title' => 'film_access',
            ],
            [
                'id'    => 30,
                'title' => 'game_create',
            ],
            [
                'id'    => 31,
                'title' => 'game_edit',
            ],
            [
                'id'    => 32,
                'title' => 'game_show',
            ],
            [
                'id'    => 33,
                'title' => 'game_delete',
            ],
            [
                'id'    => 34,
                'title' => 'game_access',
            ],
            [
                'id'    => 35,
                'title' => 'anime_create',
            ],
            [
                'id'    => 36,
                'title' => 'anime_edit',
            ],
            [
                'id'    => 37,
                'title' => 'anime_show',
            ],
            [
                'id'    => 38,
                'title' => 'anime_delete',
            ],
            [
                'id'    => 39,
                'title' => 'anime_access',
            ],
            [
                'id'    => 40,
                'title' => 'food_create',
            ],
            [
                'id'    => 41,
                'title' => 'food_edit',
            ],
            [
                'id'    => 42,
                'title' => 'food_show',
            ],
            [
                'id'    => 43,
                'title' => 'food_delete',
            ],
            [
                'id'    => 44,
                'title' => 'food_access',
            ],
        ];

        Permission::insert($permissions);
    }
}
