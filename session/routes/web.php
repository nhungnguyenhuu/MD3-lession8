<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Http\Controllers\BlogController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('login', [LoginController::class, 'showLogin'])->name('showLogin');
Route::post('login', [LoginController::class, 'login'])->name('login');
Route::get('blog', [BlogController::class, 'showBlog'])->name('index');
Route::get('logout', [\App\Http\Controllers\LogoutController::class, 'logout'])->name('logout');


