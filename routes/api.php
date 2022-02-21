<?php

use App\Http\Controllers\ApiController;
use App\Http\Controllers\UserBasicController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post("createUserBasic", [ApiController::class,"createUserBasic"]);
Route::post("create-user-basic", [UserBasicController::class,"store"]);
Route::get("userBasic", [ApiController::class,"userBasic"]);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
