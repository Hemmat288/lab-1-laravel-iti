<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;

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
Route::resource("posts",PostController::class);


Route::get("users/create",[UserController::class,"create"]);
Route::post("users",[UserController::class,"store"]);

// Route::get('/posts',[PostController::class,"index"])->name("posts.index");


// Route::get('/posts/{id}/show', [PostController::class,"show"])->where('id', '[0-9]+')->name("posts.show");


// Route::get('/posts/{id}/edit', [PostController::class,"edit"])->where('id', '[0-9]+')->name("posts.edit");


// Route::post('/posts/update',[PostController::class,"update"])->name("posts.update");

// Route::get('/posts/create',[PostController::class,"create"])->name("posts.create");

// Route::post('/posts',[PostController::class,"store"])->name("posts.store");
