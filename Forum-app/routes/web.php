<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\PageController;
use \App\Http\Controllers\PostsController;
use \App\Http\Controllers\UserController;
use \App\Http\Controllers\CommentController;
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
Auth::routes();

Route::get('/', [PageController::class, 'index']);
Route::get('/user/profile', [UserController::class, 'profile'])->name('user.profile');

Route::resource('users', UserController::class);
Route::resource('posts', PostsController::class);
Route::resource('comments', CommentController::class);


Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');
