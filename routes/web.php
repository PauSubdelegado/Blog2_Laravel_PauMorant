<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('inicio');
})->name('inicio');

Route::resource('posts', PostController::class);

Route::get('posts/editarPrueba/{id}', [PostController::class, 'editarPrueba'])
    ->name('posts.editarPrueba');

use App\Http\Controllers\LoginController;

Route::get('login', [LoginController::class, 'loginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);
Route::get('logout', [LoginController::class, 'logout'])->name('logout');
