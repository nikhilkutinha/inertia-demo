<?php

use Illuminate\Support\Facades\Route;
use Modules\Users\Http\Controllers\UserController;


Route::get('users/create', [UserController::class, 'create'])
    ->name('users.create');

Route::post('users/', [UserController::class, 'store'])
    ->name('users.store');


