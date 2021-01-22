<?php

use App\Http\Controllers\DivisionController;
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


Route::group(['prefix' => 'divisions'], function () {
    Route::get('', [DivisionController::class, 'index']);
    Route::post('', [DivisionController::class, 'store']);
    Route::put('{division}', [DivisionController::class, 'update']);
    Route::delete('{division}', [DivisionController::class, 'destroy']);
    Route::get('{division}/subdivisions', [DivisionController::class, 'getSubdivisions']);
});
