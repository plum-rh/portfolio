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

Route::get('/works/blog', [PostController::class, 'showBlogDashboard'])->name('post.showBlogDashboard');
Route::get('/works/blog/categories', [PostController::class, 'showBlogCategories'])->name('post.showBlogCategories');
Route::get('/works/blog/posts', [PostController::class, 'showBlogPosts'])->name('post.showBlogPosts');
Route::get('/works/blog/users', [PostController::class, 'showBlogUsers'])->name('post.showBlogUsers');
Route::get('/works/blog/add-post', [PostController::class, 'showBlogAddPost'])->name('post.showBlogAddPost');
Route::get('/works/blog/profile', [PostController::class, 'showBlogProfile'])->name('post.showBlogProfile');

Route::get('/works/insta', [PostController::class, 'showInsta'])->name('post.showInsta');
Route::get('/works/insta/create', [PostController::class, 'showInstaCreate'])->name('post.showInstaCreate');
Route::get('/works/insta/profile/1/show', [PostController::class, 'showInstaProfile1'])->name('post.showInstaProfile1');
Route::get('/works/insta/profile/2/show', [PostController::class, 'showInstaProfile2'])->name('post.showInstaProfile2');
Route::get('/works/insta/profile/3/show', [PostController::class, 'showInstaProfile3'])->name('post.showInstaProfile3');
Route::get('/works/insta/profile/5/show', [PostController::class, 'showInstaProfile5'])->name('post.showInstaProfile5');
