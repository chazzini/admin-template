<?php

use Illuminate\Support\Facades\Route;
use Laravel\Fortify\Features;

Route::view('/', 'welcome', [
    'canRegister' => Features::enabled(Features::registration()),
])->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('dashboard', 'dashboard')->name('dashboard');
});

Route::middleware(['auth'])->group(function () {
    // Access Control Routes
    Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
        Route::get('/permissions', \App\Livewire\Admin\Permissions\Index::class)->name('permissions.index');
        Route::get('/roles', \App\Livewire\Admin\Roles\Index::class)->name('roles.index');
        Route::get('/users', \App\Livewire\Admin\Users\UserList::class)->name('users.index');
    });
});

require __DIR__.'/settings.php';
