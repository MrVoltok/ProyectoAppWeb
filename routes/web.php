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

Route::get('/', function () {
    return view('home');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/create', [App\Http\Controllers\UserController::class, 'create'])->name('createUser');

Route::get('/products/index', [App\Http\Controllers\ProductController::class, 'index'])->name('product.index');

Route::get('products/create', [App\Http\Controllers\ProductController::class, 'create'])->name('product.create');

Route::get('/servicios', function () {
    return view('services');
})->name('service');

Route::get('/contacto', function () {
    return view('contact');
})->name('contact');

// Routes for user

Route::get('/user/{id}/edit', [App\Http\Controllers\UserController::class, 'edit'])->name('user.edit');