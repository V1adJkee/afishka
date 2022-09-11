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

Route::get('/', [AppController::class, 'index'])->name('index');
Route::get('/search', [Search::class, 'index']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// TODO: Передалать на Partial Resource Routes (https://laravel.com/docs/9.x/controllers)
Route::get('/requests', [\App\Http\Controllers\Requests::class, 'index'])->name('requests');
Route::post('/requests/create', [\App\Http\Controllers\Requests::class, 'create'])->name('requests_create');

// TODO: Выпиоить Юзлес фигня (есть в Auth::routes())
Route::get('/lk-logout', [AppController::class, 'logout'])->name('lk-logout');

// TODO: Запилить мидлвейр для роутов ниже
Route::get('/my_events', [MyEvents::class, 'index'])->name('my_events');
Route::get('/events', [EventController::class, 'index'])->name('events');
