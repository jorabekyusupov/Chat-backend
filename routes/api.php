<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChatsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MessagesController;
use App\Http\Controllers\ContactsController;

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
Route::post('/login', [UserController::class, 'login'])->name('login');
Route::post('/register', [UserController::class, 'store'])->name('register');
Route::group(['middleware' => 'auth:api', 'verified'], function () {
    Route::get('/chat/user', [ChatsController::class, 'ListUser']);
    Route::get('/profile', [UserController::class, 'profile']);
    Route::apiResource('/chat', ChatsController::class);
    Route::apiResource('/message', MessagesController::class);
    Route::apiResource('/contact', ContactsController::class);
});
