<?php

use Illuminate\Support\Facades\Route;

use App\Models\User;
use App\Http\Controllers\AppController;

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

Route::get('/', [AppController::class, 'index']);
Route::get('/search', [Search::class, 'index']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// TODO: Юзлес фигня (есть в Auth::routes())
Route::get('/lk-logout', [AppController::class, 'logout'])->name('lk-logout');
