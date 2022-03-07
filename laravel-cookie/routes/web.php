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

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;


Route::get('/home', function () {
    return view('welcome');
})->name('home.index');
Route::get('login', [LoginController::class, 'showFormLogin'] )->name('showFormLogin');
Route::post('login', [LoginController::class, 'login'] )->name('login');
