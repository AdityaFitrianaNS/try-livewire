<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/posts', function (){
    return view('posts.index');
})->name('posts.index');

Route::get('/post/{slug}', [PostController::class, 'show'])->name('posts.detail');
Route::get('/post/{slug}/edit', [PostController::class, 'edit'])->name('posts.edit');
Route::get('/post/delete/{post:slug}', [PostController::class, 'delete'])->name('posts.delete');
