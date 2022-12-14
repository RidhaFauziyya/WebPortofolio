<?php

use Illuminate\Http\Request;
use App\Http\Controllers\GreetController;
use App\Http\Controllers\GalleryController;
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

Route::get('/greet', 'App\Http\Controllers\GreetController@greet');
Route::apiResource('/gallery', App\Http\Controllers\GreetController::class);
Route::get('/gallery', 'App\Http\Controllers\GreetController@index');

