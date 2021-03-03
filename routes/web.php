<?php

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

// Halaman Home
Route::get('/index', [App\Http\Controllers\Home3Controller::class, 'index']);


// Halaman Products
Route::prefix('category')->group(function(){
    Route::get('/{id}', [App\Http\Controllers\ProductController::class,'product']);
});


//Halaman NewsController
Route::get('/news/{id?}',[App\Http\Controllers\NewsController::class,'news']);


//Halaman ProgramController
Route::prefix('program')->group(function(){
    Route::get('/{id}', [App\Http\Controllers\ProgramController::class,'program']);
});


//Halaman AboutUsController
Route::get('/aboutus',[App\Http\Controllers\AboutUsController::class,'aboutus']);


//Halaman ContactUsController
Route::get('/contact-us',[App\Http\Controllers\ContactUsController::class,'contactus']);



