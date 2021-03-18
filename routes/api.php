<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\API\RegisterController;
use App\Http\Controllers\API\basic_informationController;
use App\Http\Controllers\API\Career_objectsController;
use App\Http\Controllers\API\EducationController;
use App\Http\Controllers\API\WorkController;



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

Route::post('register', [RegisterController::class, 'register']);
Route::post('login', [RegisterController::class, 'login']);

     
Route::middleware('auth:api')->group( function () {
    Route::resource('basic_information', RegisterController::class);
});

Route::post('basic', [basic_informationController::class, 'basic']);

Route::middleware('auth:api')->group( function () {
    Route::resource('basic_information', basic_informationController::class);
});

