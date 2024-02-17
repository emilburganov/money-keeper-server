<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api');
    }

    public function __invoke()
    {
        return response()->json(
            new UserResource(Auth::user()),
        );
    }
}
