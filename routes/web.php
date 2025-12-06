<?php

use App\Livewire\Auth\Login;
use App\Livewire\Menus;
use App\Livewire\Welcome;
use Illuminate\Support\Facades\Route;

Route::get('/login', Login::class)->name('login');

Route::middleware('auth')->group(function () {
    Route::get('/menus', Menus::class)->name('menus');

    Route::get('/user/index', Menus::class)->name('users.index');
});
