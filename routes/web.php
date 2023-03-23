<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get("/", [UserController::class, "home"]);
Route::get("/login", [UserController::class, "login"]);
Route::get("/books", [UserController::class, "books"]);
Route::get("/find-books", [UserController::class, "findBooks"]);
Route::get("/profile", [UserController::class, "showProfile"]);
Route::get("/logout", [UserController::class, "logout"]);
