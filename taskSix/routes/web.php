<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SingleActionController;
use App\Models\Blog;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class,'index']);

Route::get('/contact', [ContactController::class,'index'])->name('contact.index');
Route::post('/contact', [ContactController::class,'contactSubmit'])->name('contact.submit');
/*
//requests need token (CSRF)
    post,
    put,
    patch,
    delete,
*/