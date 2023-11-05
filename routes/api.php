<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TypeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['middleware' => 'lang'], function () {
    Route::group(['middleware' => 'api', 'prefix' => 'auth'], function () {
        Route::post('registration', [AuthController::class, 'registration']);
        Route::post('login', [AuthController::class, 'login']);
        Route::post('logout', [AuthController::class, 'logout']);
        Route::post('me', [AuthController::class, 'me']);
        Route::post('refresh', [AuthController::class, 'refresh']);

        Route::patch('update', [AuthController::class, 'update']);
    });

    Route::group(['middleware' => 'api'], function () {
        Route::get('/categories/{user}', [CategoryController::class, 'index']);
//        ->can('viewAny', 'category');
        Route::post('/categories/{user}', [CategoryController::class, 'create'])
            ->can('create', 'category');
        Route::patch('/categories/{user}/{category}', [CategoryController::class, 'update'])
            ->can('update', 'category');
        Route::delete('/categories/{user}/{category}', [CategoryController::class, 'destroy'])
            ->can('delete', 'category');
    });

    Route::get('/types', [TypeController::class, 'index']);
    Route::post('/types', [TypeController::class, 'create']);
    Route::patch('/types/{type}', [TypeController::class, 'update']);
    Route::delete('/types/{type}', [TypeController::class, 'destroy']);
});
