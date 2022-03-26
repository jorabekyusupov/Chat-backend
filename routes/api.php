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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('/login', [\App\Http\Controllers\UserController::class, 'login'])->name('login');
Route::post('/register', [\App\Http\Controllers\UserController::class, 'store'])->name('register');
Route::group(['middleware' => 'auth:api', 'verified'], function () {
    Route::apiResource('/chat', \App\Http\Controllers\ChatsController::class );
    Route::apiResource('/message', \App\Http\Controllers\MessagesController::class );
    Route::apiResource('/contact', \App\Http\Controllers\ContactsController::class );
});
