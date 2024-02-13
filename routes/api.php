<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CurrencyController;
use App\Http\Controllers\ExpenseController;
use App\Http\Controllers\IncomeController;
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
    });

    Route::group(['middleware' => ['api', 'auth']], function () {
        Route::apiResource('categories', CategoryController::class);

//        Route::get('/categories', [CategoryController::class, 'index']);
//        Route::post('/categories', [CategoryController::class, 'store']);
//        Route::patch('/categories/{category}', [CategoryController::class, 'update']);
//        Route::delete('/categories/{category}', [CategoryController::class, 'destroy']);

        Route::get('/incomes', [IncomeController::class, 'index']);
        Route::post('/incomes', [IncomeController::class, 'store']);
        Route::patch('/incomes/{income}', [IncomeController::class, 'update']);
        Route::delete('/incomes/{income}', [IncomeController::class, 'destroy']);

        Route::get('/expenses', [ExpenseController::class, 'index']);
        Route::post('/expenses', [ExpenseController::class, 'store']);
        Route::patch('/expenses/{expense}', [ExpenseController::class, 'update']);
        Route::delete('/expenses/{expense}', [ExpenseController::class, 'destroy']);

        Route::get('/accounts', [AccountController::class, 'index']);
        Route::post('/accounts', [AccountController::class, 'store']);
        Route::patch('/accounts/{account}', [AccountController::class, 'update']);
        Route::delete('/accounts/{account}', [AccountController::class, 'destroy']);

        Route::get('/currencies', [CurrencyController::class, 'index']);
    });
});
