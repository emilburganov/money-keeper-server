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
        Route::post('update-user', 'UpdateUserController');
    });

    Route::group(['middleware' => ['api', 'auth.token']], function () {
        Route::group(['namespace' => '\App\Http\Controllers\Category'], function () {
            Route::get('categories', 'IndexController');
            Route::get('categories/income-stats', 'GetIncomeStatsController');
            Route::get('categories/expense-stats', 'GetExpenseStatsController');
            Route::post('categories', 'StoreController');
            Route::patch('categories/{category}', 'UpdateController')
                ->middleware('can:update,category');
            Route::delete('categories/{category}', 'DestroyController')
                ->middleware('can:delete,category');
        });

        Route::group(['namespace' => '\App\Http\Controllers\Account'], function () {
            Route::get('accounts', 'IndexController');
            Route::get('accounts/stats', 'GetStatsController');
            Route::post('accounts', 'StoreController');
            Route::patch('accounts/{account}', 'UpdateController')
                ->middleware('can:update,account');
            Route::delete('accounts/{account}', 'DestroyController')
                ->middleware('can:delete,account');
        });

        Route::group(['namespace' => '\App\Http\Controllers\Income'], function () {
            Route::get('incomes', 'IndexController');
            Route::get('incomes/stats', 'GetStatsController');
            Route::post('incomes', 'StoreController');
            Route::patch('incomes/{income}', 'UpdateController')
                ->middleware('can:update,income');
            Route::delete('incomes/{income}', 'DestroyController')
                ->middleware('can:delete,income');
        });

        Route::group(['namespace' => '\App\Http\Controllers\Expense'], function () {
            Route::get('expenses', 'IndexController');
            Route::get('expenses/stats', 'GetStatsController');
            Route::post('expenses', 'StoreController');
            Route::patch('expenses/{expense}', 'UpdateController')
                ->middleware('can:update,expense');
            Route::delete('expenses/{expense}', 'DestroyController')
                ->middleware('can:delete,expense');
        });

        Route::group(['namespace' => '\App\Http\Controllers\Transfer'], function () {
            Route::get('transfers', 'IndexController');
            Route::get('transfers/stats', 'GetStatsController');
            Route::post('transfers', 'StoreController');
            Route::patch('transfers/{transfer}', 'UpdateController')
                ->middleware('can:update,transfer');
            Route::delete('transfers/{transfer}', 'DestroyController')
                ->middleware('can:delete,transfer');
        });

        Route::group(['namespace' => '\App\Http\Controllers\Currency'], function () {
            Route::get('currencies', 'IndexController');
        });
    });
});
