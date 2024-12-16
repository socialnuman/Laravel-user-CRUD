<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::post('/user/create', [UserController::class, 'createUser']);
Route::patch('/user/{id}', [UserController::class, 'updateUser']);
Route::get('/user/all', [UserController::class, 'getUsers']);
Route::delete('/user/{id}', [UserController::class, 'deleteUser']);
