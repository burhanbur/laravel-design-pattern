<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', [App\Http\Controllers\Auth\LoginController::class, 'showLoginForm']);

Auth::routes();

Route::group(['middleware' => ['auth']], function() {
	Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

	Route::get('/users', [App\Http\Controllers\UserController::class, 'index'])->name('users');
	Route::get('/users/{id?}', [App\Http\Controllers\UserController::class, 'show'])->name('user');
	Route::get('/users/edit/{id?}', [App\Http\Controllers\UserController::class, 'edit'])->name('edit.user');
	Route::post('/users', [App\Http\Controllers\UserController::class, 'store'])->name('store.user');
	Route::put('/users/{id?}', [App\Http\Controllers\UserController::class, 'update'])->name('update.user');
	Route::delete('/users/{id?}', [App\Http\Controllers\UserController::class, 'destroy'])->name('destroy.user');
});
