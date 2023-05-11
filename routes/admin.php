<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TeacherController;
use App\Http\Middleware\EnsureAuthAdmin;
use Illuminate\Support\Facades\Route;

Route::middleware(EnsureAuthAdmin::class)->group(function () {
  Route::prefix('product')->name('product.')->group( function () {
      Route::get('/', [ProductController::class,'index'])->name('index');
      Route::get('/create', [ProductController::class,'create'])->name('create');
      Route::post('/store', [ProductController::class,'store'])->name('store');
      Route::get('/edit/{id}', [ProductController::class,'edit'])->name('edit');
      Route::put('/update/{id}', [ProductController::class,'update'])->name('update');
      Route::post('/destroy/{id}', [ProductController::class,'destroy'])->name('destroy');
  });

  Route::prefix('teacher')->name('teacher.')->group( function () {
    Route::get('/', [TeacherController::class,'index'])->name('index');
    Route::get('/create', [TeacherController::class,'create'])->name('create');
    Route::post('/store', [TeacherController::class,'store'])->name('store');
    Route::get('/edit/{id}', [TeacherController::class,'edit'])->name('edit');
    Route::put('/update/{id}', [TeacherController::class,'update'])->name('update');
    Route::post('/destroy/{id}', [TeacherController::class,'destroy'])->name('destroy');
});

  Route::prefix('category')->name('category.')->group( function () {
    Route::get('/', [CategoryController::class,'index'])->name('index');
    Route::get('/create', [CategoryController::class,'create'])->name('create');
    Route::post('/store', [CategoryController::class,'store'])->name('store');
    Route::get('/edit/{id}', [CategoryController::class,'edit'])->name('edit');
    Route::put('/update/{id}', [CategoryController::class,'update'])->name('update');
    Route::post('/destroy/{id}', [CategoryController::class,'destroy'])->name('destroy');
});
  
  Route::prefix('post')->name('post.')->group( function () {
      Route::get('/',[PostController::class,'index'])->name('index');
      Route::get('/create',[PostController::class,'create'])->name('create');
      Route::post('/store',[PostController::class,'store'])->name('store');
      Route::get('/edit/{id}', [PostController::class,'edit'])->name('edit');
      Route::put('/update/{id}', [PostController::class,'update'])->name('update');
      Route::post('/destroy/{id}', [PostController::class,'destroy'])->name('destroy');
  });
});