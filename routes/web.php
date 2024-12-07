<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;



Route::get('/', function () {
    return view('welcome');
});


//for profile
Route::middleware('auth')->group(function () {
    // Profile Routes
    Route::get('/my-profile', [UserController::class, 'showProfile'])->name('my-profile');
    Route::get('/edit-profile', [UserController::class, 'editProfile'])->name('edit-profile');
    Route::post('/update-profile', [UserController::class, 'updateProfile'])->name('update-profile');

    // Dashboard Routes
    Route::get('/dashboard', [UserController::class, 'dashboard'])->name('user.dashboard');

    // Logout Route
    Route::get('/logout', [UserController::class, 'logout'])->name('user.logout');
});

//for account creation
Route::get('/create-account', [UserController::class, 'showCreateAccount'])->name('create-account');
Route::post('/store-account', [UserController::class, 'storeAccount'])->name('store-account');

//for account validation
Route::get('/validate-account', [UserController::class, 'showValidateAccount'])->name('validate-account');
Route::post('/validate-details', [UserController::class, 'validateAccount'])->name('validate-details');

//for login
Route::get('/login', [UserController::class, 'showValidateAccount'])->name('login');