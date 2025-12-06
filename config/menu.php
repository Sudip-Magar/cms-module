<?php
return [
    [
        'title' => 'Dashboard',
        'icon'  => 'o-home',
       'route' => 'users.index'
    ],
    [
        'title' => 'Users',
        'icon'  => 'o-users',
        'children' => [
            ['title' => 'All Users', 'route' => 'users.index'],
            ['title' => 'Add User',  'route' => 'users.index'],
        ],
    ],
    [
        'title' => 'Products',
        'icon'  => 'o-home',
        'children' => [
            ['title' => 'All Products', 'route' => 'users.index'],
            ['title' => 'Add Product', 'route' => 'users.index'],
        ],
    ],
    [
        'title' => 'Settings',
        'icon'  => 'o-home',
        'route' => 'users.index',
    ],
];
