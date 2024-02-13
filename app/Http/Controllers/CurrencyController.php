<?php

namespace App\Http\Controllers;

use App\Http\Resources\AccountResource;
use App\Http\Resources\CurrencyResource;
use App\Models\Currency;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CurrencyController extends Controller
{
    /**
     * Index the currencies
     *
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        $currencies = Currency::all();

        return response()->json(
            CurrencyResource::collection($currencies)
        );
    }
}
