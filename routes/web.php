<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;

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

Route::get('/', [ArticleController::class, 'home']);

Route::get('/detail/{id}', [ArticleController::class, 'articleDetail']);

Route::get('/front', [CategoryController::class, 'front']);
Route::get('/category/{name}', [CategoryController::class, 'categoryPage']);
