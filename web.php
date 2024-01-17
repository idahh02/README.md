<?php

use App\Http\Controllers\BloodBagController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\EditProfileController;
use App\Http\Controllers\bloodController;

Route::post('/bloodbags/update/{id}', [BloodBagController::class, 'update'])->name('bloodbags.update');

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/bloodbags', [BloodBagController::class, 'index'])->name('bloodbags.index');
Route::get('/bloodbags/{id}/edit', [BloodBagController::class, 'edit'])->name('bloodbags.edit');
Route::put('/bloodbags/{id}', [BloodBagController::class, 'update'])->name('bloodbags.update');

Route::get('/logout', function () {
    return view('logout');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/profile', function () {
    return view('profile');
})->name('profile');;

Route::get('/bloodtest', function () {
    return view('bloodtest');
});

Route::post('/login', [LoginController::class, 'login'])->name('login');

Route::get('/profile/edit', [EditProfileController::class, 'edit'])->name('profile.edit');
Route::put('/profile/update', [EditProfileController::class, 'update'])->name('profile.update');

Route::get('/profile/show', [ProfileController::class, 'show']);


Route::get('/bloodtestt', [bloodController::class, 'countByBloodType']);
