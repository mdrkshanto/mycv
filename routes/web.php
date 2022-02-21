<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserBasicController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;




Route::get('/home', [HomeController::class, 'show']);
// Route::get('/admin/home', [HomeController::class, 'show']);
Route::get('/add-home', [HomeController::class, 'create']);
Route::get('/user-basic', [UserBasicController::class, 'show']);
Route::get('/add-user-basic', [UserBasicController::class, 'create']);
Route::get('/edit-user-basic', [UserBasicController::class, 'edit']);
Route::get('/users', [UserController::class, 'show']);

Route::get('/', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
