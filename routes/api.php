<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('auth:sanctum')->get('/coucou', function (Request $request) {
    return response('salut');
});

Route::middleware('auth:sanctum')->get('/coucou', function (Request $request) {
    return response('salut');
});

// Retourne un cours en particulier
Route::get('/films/{filmId}', function($filmId) {
    return \App\Models\Movie::find($filmId);
});
