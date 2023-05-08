<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;

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

// Route for adminPage
Route::get('/adminPage/', [App\Http\Controllers\AdminPageController::class, 'index'])
    ->name('adminPage')
    ->middleware(['auth','admin']);
Route::get('/adminPage/user/list', [App\Http\Controllers\UserController::class, 'index'])
    ->name('adminPage.listUsers')
    ->middleware(['auth','admin']);
Route::get('/adminPage/user/{user}/show', [App\Http\Controllers\UserController::class, 'showUser'])
    ->name('adminPage.showUser')
    ->middleware(['auth','admin']);
Route::get('/adminPage/service/list', [App\Http\Controllers\ServiceController::class, 'list'])
    ->name('adminPage.listServices')
    ->middleware(['auth','admin']);
Route::get('/adminPage/suggest/list', [App\Http\Controllers\SuggestController::class, 'list'])
    ->name('adminPage.listSuggests')
    ->middleware(['auth','admin']);

// Routes for products
Route::get('/products/index', [App\Http\Controllers\ProductController::class, 'index'])->name('product.index');
Route::get('/products/create', [App\Http\Controllers\ProductController::class, 'create'])
    ->middleware(['auth','admin'])
    ->name('product.create');

// Route for services
Route::get('/servicios', function () {
    return view('services');
})->name('service');

// Routes for contactUs
Route::get('/contacto', function () {
    return view('contact');
})->name('contact');
Route::post('/contacto/create/', [App\Http\Controllers\SuggestController::class, 'store'])->name('suggest.create');

// Routes for user
Route::get('/user/{id}/show', [App\Http\Controllers\UserController::class, 'show'])->name('user.show')
    ->middleware('auth');
Route::get('/user/{id}/edit', [App\Http\Controllers\UserController::class, 'edit'])->name('user.edit')
    ->middleware('auth');
Route::put('/user/{id}/', [App\Http\Controllers\UserController::class, 'update'])->name('user.update')
    ->middleware('auth');

// Route for schedule
Route::get('/agenda', [App\Http\Controllers\ServiceController::class,'index'])->name('schedule');
Route::post('/agenda/create', [App\Http\Controllers\ServiceController::class,'store'])->name('schedule.store')
    ->middleware('auth');
Route::delete('/agenda/{service}/',[App\Http\Controllers\ServiceController::class,'destroy'])->name('schedule.destroy')
    ->middleware('auth');