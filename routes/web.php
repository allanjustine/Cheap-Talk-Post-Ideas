<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\SiteController;

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

Route::get('/', [SiteController::class, 'home']);
Route::get('/posts', [SiteController::class, 'index2']);
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::get('/logout', [AuthController::class, 'logout']);
Route::get('/register', [AuthController::class, 'register']);

Route::group(['middleware' => ['auth', 'verified']], function () {
    Route::get('/create-posts', [SiteController::class, 'createPost']);
    Route::get('/create-categories', [SiteController::class, 'createCategory']);
    Route::get('/categories', [SiteController::class, 'index']);
});
