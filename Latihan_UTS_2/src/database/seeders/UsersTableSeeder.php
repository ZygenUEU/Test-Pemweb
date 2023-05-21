<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $users = [
            [
                'id'             => 1,
                'name'           => 'Admin',
                'email'          => 'admin@admin.com',
                'password'       => bcrypt('password'),
                'remember_token' => null,
            ],
            // [
            //     'id'             => 2,
            //     'name'           => 'Zygen',
            //     'email'          => 'zygen@admin.com',
            //     'password'       => bcrypt('123'),
            //     'remember_token' => null,
            // ],
        ];

        User::insert($users);
    }
}
