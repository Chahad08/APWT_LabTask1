<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pageController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [pageController::class,'home' ])->name ('Home');
Route::get('/about', [pageController::class,'about' ])->name ('About');
Route::get('/product', [pageController::class,'product' ])->name ('Product');
Route::get('/teams', [pageController::class,'teams' ])->name ('teams');
Route::get('/contact', [pageController::class,'contact' ])->name ('Contact');
  