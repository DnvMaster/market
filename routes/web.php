<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use Faker\Guesser\Name;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('admin.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/admin/profile',[AdminController::class, 'adminProfile'])->name('admin.profile');
    Route::post('/profile/store', [AdminController::class, 'profileStore'])->name('profile.store');
    Route::post('/admin/password/update', [AdminController::class, 'updatePassword'])->name('password.update');
});

require __DIR__.'/auth.php';

Route::get('/admin/logout',[AdminController::class, 'adminLogout'])->name('admin.logout');
