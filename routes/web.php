<?php

use App\Models\Car;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\GalleryController;

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
// All cars
Route::get('/', [CarController::class, 'index']);

//show Create Form
Route::get('/cars/create', [CarController::class, 'create'])->middleware('auth');

// store car data
Route::post('/cars', [CarController::class, 'store'])->middleware('auth');

//show Edit Form
Route::get('/cars/{car}/edit',[CarController::class, 'edit'])->middleware('auth');

//update car
Route::put('/cars/{car}',[CarController::class, 'update'])->middleware('auth');

//Delete car
Route::delete('/cars/{car}', [CarController::class, 'destroy'])->middleware('auth');

// Manage car
Route::get('/cars/manage', [CarController::class, 'manage'])->middleware('auth');

// single car
Route::get('/cars/{car}', [CarController::class, 'show']);

//show Register/Create Form
Route::get('/register', [UserController::class, 'create'])->middleware('guest');

//create new user
Route::post('/users', [UserController::class, 'store']);

// log User out
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');

// Show login Form
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');

// log in out
Route::post('/users/authenticate', [UserController::class, 'authenticate']);

// routes for gallery

//Delete car
Route::delete('/galleries/{gallery}', [GalleryController::class, 'destroy'])->middleware('auth');






