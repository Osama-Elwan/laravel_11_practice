<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SingleActionController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class,'index']);
Route::get('/about',[ HomeController::class,'showAboutPage']);
Route::get('/single-action', SingleActionController::class);

//BLOG

//creaet
//Read
//Update
//edlete


// Route::post('/blog/create',[BlogController::class,'create'])->name('blog.create');
// Route::get('/blog/show',[BlogController::class,'show'])->name('blog.create');
// Route::post('/blog/update',[BlogController::class,'edit'])->name('blog.create');
// Route::post('/blog/delete',[BlogController::class,'destroy'])->name('blog.create');


Route::resource('/blog', BlogController::class);