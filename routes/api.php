<?php

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
    Route::group([
        'prefix' => 'auth',
        'namespace' => 'App\Http\Controllers\Auth'
    ], function () {
        Route::post('registration', 'RegistrationController');
        Route::post('login', 'LoginController');
        Route::post('logout', 'LogoutController');
        Route::post('me', 'MeController');
        Route::post('refresh', 'RefreshController');
    });

    Route::group(['middleware' => ['api']], function () {
        Route::group(['namespace' => '\App\Http\Controllers\Category'], function () {
            Route::get('categories', 'IndexController');
            Route::post('categories', 'StoreController');
            Route::patch('categories/{category}', 'UpdateController');
            Route::delete('categories/{category}', 'DestroyController');
        });

        Route::group(['namespace' => '\App\Http\Controllers\Account'], function () {
            Route::get('accounts', 'IndexController');
            Route::post('accounts', 'StoreController');
            Route::patch('accounts/{account}', 'UpdateController');
            Route::delete('accounts/{account}', 'DestroyController');
        });

        Route::group(['namespace' => '\App\Http\Controllers\Income'], function () {
            Route::get('incomes', 'IndexController');
            Route::post('incomes', 'StoreController');
            Route::patch('incomes/{income}', 'UpdateController');
            Route::delete('incomes/{income}', 'DestroyController');
        });

        Route::group(['namespace' => '\App\Http\Controllers\Expense'], function () {
            Route::get('expenses', 'IndexController');
            Route::post('expenses', 'StoreController');
            Route::patch('expenses/{expense}', 'UpdateController');
            Route::delete('expenses/{expense}', 'DestroyController');
        });

        Route::group(['namespace' => '\App\Http\Controllers\Transfer'], function () {
            Route::get('transfers', 'IndexController');
            Route::post('transfers', 'StoreController');
            Route::patch('transfers/{transfer}', 'UpdateController');
            Route::delete('transfers/{transfer}', 'DestroyController');
        });

        Route::group(['namespace' => '\App\Http\Controllers\Currency'], function () {
            Route::get('currencies', 'IndexController');
        });
    });
});
