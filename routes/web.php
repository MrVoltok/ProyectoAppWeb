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

Route::get('/store', function () {
    return view('product.product');
})->name('store');

Route::get('/servicios', function () {
    return view('services');
})->name('service');

Route::get('/contacto', function () {
    return view('contact');
})->name('contact');