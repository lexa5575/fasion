<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('main');
});


Route::get('posts', [PostController::class, 'index'])->name('lidl');
Route::get('meet', 'App\Http\Controllers\PostController@create')->name('meet');
Route::get('geet', 'App\Http\Controllers\PostController@delete')->name('geet');
Route::get('leet', 'App\Http\Controllers\PostController@firstOrCreate')->name('leet');
Route::post('postss', [PostController::class, 'store'])->name('post.store');
Route::get('posts/{post}', [PostController::class, 'show'])->name('post.show');

Route::get('about', 'App\Http\Controllers\AboutController@index')->name('about');
Route::get('contact', 'App\Http\Controllers\ContactController@index')->name('contact');
Route::get('main', 'App\Http\Controllers\MainController@index')->name('main');

