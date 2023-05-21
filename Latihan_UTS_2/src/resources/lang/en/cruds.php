<?php

return [
    'userManagement' => [
        'title'          => 'User management',
        'title_singular' => 'User management',
    ],
    'permission' => [
        'title'          => 'Permissions',
        'title_singular' => 'Permission',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'title'             => 'Title',
            'title_helper'      => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'role' => [
        'title'          => 'Roles',
        'title_singular' => 'Role',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => ' ',
            'title'              => 'Title',
            'title_helper'       => ' ',
            'permissions'        => 'Permissions',
            'permissions_helper' => ' ',
            'created_at'         => 'Created at',
            'created_at_helper'  => ' ',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => ' ',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => ' ',
        ],
    ],
    'user' => [
        'title'          => 'Users',
        'title_singular' => 'User',
        'fields'         => [
            'id'                       => 'ID',
            'id_helper'                => ' ',
            'name'                     => 'Name',
            'name_helper'              => ' ',
            'email'                    => 'Email',
            'email_helper'             => ' ',
            'email_verified_at'        => 'Email verified at',
            'email_verified_at_helper' => ' ',
            'password'                 => 'Password',
            'password_helper'          => ' ',
            'roles'                    => 'Roles',
            'roles_helper'             => ' ',
            'remember_token'           => 'Remember Token',
            'remember_token_helper'    => ' ',
            'created_at'               => 'Created at',
            'created_at_helper'        => ' ',
            'updated_at'               => 'Updated at',
            'updated_at_helper'        => ' ',
            'deleted_at'               => 'Deleted at',
            'deleted_at_helper'        => ' ',
        ],
    ],
    'sample' => [
        'title'          => 'Sample',
        'title_singular' => 'Sample',
    ],
    'book' => [
        'title'          => 'Book',
        'title_singular' => 'Book',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'bookname'          => 'Bookname',
            'bookname_helper'   => ' ',
            'author'            => 'Author',
            'author_helper'     => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'game' => [
        'title'          => 'Game',
        'title_singular' => 'Game',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'gamename'          => 'Gamename',
            'gamename_helper'   => ' ',
            'developer'            => 'Developer',
            'developer_helper'     => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'film' => [
        'title'          => 'Film',
        'title_singular' => 'Film',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'filmname'          => 'Filmname',
            'filmname_helper'   => ' ',
            'director'            => 'Director',
            'director_helper'     => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'anime' => [
        'title'          => 'Anime',
        'title_singular' => 'Anime',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'animename'          => 'Animename',
            'animename_helper'   => ' ',
            'studio'            => 'Studio',
            'studio_helper'     => ' ',
            'episode'            => 'Episode',
            'episode_helper'     => ' ',
            'aired'            => 'Aired',
            'aired_helper'     => ' ',
            'duration'            => 'Duration',
            'duration_helper'     => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
];
