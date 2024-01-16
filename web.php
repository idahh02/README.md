<?php

use App\Http\Controllers\BloodBagController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\EditProfileController;

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

Route::get('/editprofile', function () {
    return view('editprofile');
});

Route::get('/bloodtest', function () {
    return view('bloodtest');
});

Route::post('/login', [LoginController::class, 'login'])->name('login');


Route::get('/editprofile', [EditProfileController::class, 'edit'])->name('editprofile.edit');
Route::put('/editprofile/update', [EditProfileController::class, 'update'])->name('editprofile.update');


