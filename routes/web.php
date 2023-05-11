<?php

use App\Http\Controllers\Public\ProductController;
use App\Http\Controllers\Public\TeacherController;
use App\Http\Middleware\EnsureAuthCustomer;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home.index');

Route::prefix('product')->name('product.')->group(function () {
    Route::get('/',[ProductController::class,'index'])->name('index');
});
Route::prefix('teacher')->name('teacher.')->group(function () {
    Route::get('/',[TeacherController::class,'index'])->name('index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');