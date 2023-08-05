<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CollegeController;
use App\Http\Controllers\PortofolioController;

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


Route::get('/', [UserController::class,'home']);

Route::get('/home', [UserController::class,'home']);

Route::get('/about', [UserController::class,'about']);

Route::get('/contact', [UserController::class,'contact']);

Route::get('/portofolio', [PortofolioController::class,'portofolio']);

Route::get('/college', [CollegeController::class,'showAllCollege_exp']);

Route::get('/description/{id}', [CollegeController::class,'showPhoto']);

Route::get('/search', [CollegeController::class, 'search']);

// Route::get('/college', [CollegeController::class, 'filter']);






