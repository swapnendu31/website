<?php

use App\Http\Controllers\FrontController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [FrontController::class,"homepage"]);
Route::get('/about', [FrontController::class,"aboutpage"]);
Route::get('/blog', [FrontController::class,"blogpage"]);
Route::get('/analyze', [FrontController::class,"analyzepage"]);
Route::get('/contact', [FrontController::class,"contactpage"]);
Route::get('/portfolio', [FrontController::class,"portfoliopage"]);
Route::get('/singleportfolio', [FrontController::class,"singleportfoliopage"]);
Route::get('/singlepost', [FrontController::class,"singlepostpage"]);
