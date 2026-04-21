<?php

use App\Livewire\Admin\Permissions\Index;
use App\Livewire\Admin\Users\UserList;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/dashboard', 301);

Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('dashboard', 'dashboard')->name('dashboard');
});

Route::middleware(['auth'])->group(function () {
    // Access Control Routes
    Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
        Route::get('/permissions', Index::class)->name('permissions.index');
        Route::get('/roles', App\Livewire\Admin\Roles\Index::class)->name('roles.index');
        Route::get('/users', UserList::class)->name('users.index');
    });
});

require __DIR__.'/settings.php';
