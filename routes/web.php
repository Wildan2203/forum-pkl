<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ThreadsController;
use App\Http\Controllers\ReplyController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;

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

Route::get('/', function () {
    return view('master');
});
Route::get('/admin', function () {
    return view('admin');
});




Route::get('/allthreads', [ThreadsController::class, 'index']);

Route::get('/newthreads', [ThreadsController::class, 'create']);
Route::post('/newthreads', [ThreadsController::class, 'store']);

Route::get('/newthreads', function () {
    return view('newthreads');
});

Route::get('/reply', [ReplyController::class, 'index']);
Route::get('/reply/{id}', [ReplyController::class, 'edit']);
Route::post('/reply/{id}', [ReplyController::class, 'update']);

//Routing halaman register
Route::get('/register', [AuthController::class, 'create'])->name('register');
Route::post('/register', [AuthController::class, 'store'])->name('register.submit');

//Routing halaman login
Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/login', [AuthController::class, 'authenticate'])->name('login.submit');




//ADMIN
Route::get('/admin', [AdminController::class, 'index']);
