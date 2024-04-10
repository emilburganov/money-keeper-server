<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;

class LogoutController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api');
    }

    public function __invoke(): JsonResponse
    {
        Auth::logout();

        return response()->json([
            'message' => 'Successful logout.',
        ]);
    }
}
