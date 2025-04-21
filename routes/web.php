<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;


Route::get('/', function () {
    return view('home');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', [ContactController::class,'index']);
Route::get('/blogs', [BlogController::class,'index'])->name('blogs.index');
Route::get('/blogs/create', [BlogController::class,'create'])->name('blogs.create');    
Route::post('/blogs/store', [BlogController::class,'store'])->name('blogs.store');
Route::get('/blogs/{id}', [BlogController::class, 'show'])->name('blogs.show');


