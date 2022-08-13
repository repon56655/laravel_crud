<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\ProductController;

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

Route::get('/',[ProductController::class,'index'])->name("index");

Route::get('/addproduct',[ProductController::class,'addproduct'])->name("addproduct");

Route::get('/viewproduct',[ProductController::class,'viewproduct'])->name("viewproduct");

Route::post('/storeproduct',[ProductController::class,'storeproduct'])->name("storeproduct");

Route::get('/editproduct/{id}',[ProductController::class,'editproduct'])->name("editproduct");

Route::post('/update/{id}',[ProductController::class,'update'])->name("update");

Route::get('/delete/{id}',[ProductController::class,'delete'])->name("delete");




