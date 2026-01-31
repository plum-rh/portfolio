<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('index');
Route::get('/post/create', [PostController::class, 'create'])->name('post.create');
Route::post('/post/store', [PostController::class, 'store'])->name('post.store');
Route::get('/post/edit/{id}', [PostController::class, 'edit'])->name('post.edit');
Route::patch('/post/update/{id}', [PostController::class, 'update'])->name('post.update');


Route::get('/works', [PostController::class, 'show'])->name('post.show');
Route::get('/works/coffee-bean', [PostController::class, 'showCoffee'])->name('post.showcoffee');
Route::get('/works/cruise', [PostController::class, 'showCruise'])->name('post.showcruise');

