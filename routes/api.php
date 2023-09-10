<?php

use App\Http\Controllers\IndigencyController;
use App\Http\Controllers\OcrController;
use App\Http\Controllers\ResidentsController;
use App\Http\Controllers\UsersController;
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

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('indigencies', IndigencyController::class);
Route::resource('residents', ResidentsController::class);

Route::post('ocr', [OcrController::class, 'index']);

Route::get('users', [UsersController::class, 'index']);
