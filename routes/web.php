<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\PanierController;
use App\Http\Controllers\WebsiteController;
use Illuminate\Support\Facades\DB;
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

Route::get('/', [WebsiteController::class, 'index']);

Route::get('/deco', [WebsiteController::class, 'deco']);

Route::get('/notAuth', [WebsiteController::class, 'notAuth']);

Route::resource('/movie', MovieController::class);

Route::resource('/category', CategoryController::class);

Route::resource('/admin', AdminController::class);

Route::resource('/panier', PanierController::class);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
