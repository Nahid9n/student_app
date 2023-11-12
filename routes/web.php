<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/about',[HomeController::class,'about'])->name('about');
Route::get('/contact',[HomeController::class,'contact'])->name('contact');
Route::get('/details/{id}',[HomeController::class,'details'])->name('details');
Route::post('/make-full-name',[HomeController::class,'makeFullName'])->name('make-full-name');
Route::post('/make-series',[HomeController::class,'numbers'])->name('make-series');
Route::get('/password-generator',[HomeController::class,'passwordGenerator'])->name('password-generator');
Route::post('/create-password',[HomeController::class,'randomPassword'])->name('create-password');
Route::get('/student-info',[HomeController::class,'studentInfo'])->name('student-info');
Route::post('/student-information',[HomeController::class,'studentInformation'])->name('student-information');
Route::get('/add-product',[ProductController::class,'addProduct'])->name('add-product');
Route::post('/createProduct',[ProductController::class,'createProduct'])->name('createProduct');
Route::get('/manage-product',[ProductController::class,'manageProduct'])->name('manage-product');
Route::get('/edit-product/{id}',[ProductController::class,'edit'])->name('edit-product');
Route::post('/update-product/{id}',[ProductController::class,'update'])->name('update-product');

