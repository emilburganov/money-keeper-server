<?php

namespace App\Http\Controllers;

use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    /**
     * Create a new AuthController instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['login', 'registration', 'refresh']]);
    }

    /**
     * Create a new User.
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function registration(Request $request): JsonResponse
    {
        $credentials = $request->only(['name', 'email', 'password', 'password_confirmation']);

        $validator = Validator::make($credentials, [
            'name' => 'required|string|min:3|max:60',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8|max:100',
            'password_confirmation' => 'required|same:password'
        ]);

        if ($validator->fails()) {
            return $this->validationError($validator->errors());
        }

        User::query()->create($credentials);

        $token = Auth::attempt($credentials);

        return $this->respondWithToken($token);
    }

    /**
     * Get a JWT via given credentials.
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function login(Request $request): JsonResponse
    {
        $credentials = $request->only(['email', 'password']);

        if (!$token = Auth::attempt($credentials)) {
            return $this->message('Invalid login or password.', 401);
        }

        return $this->respondWithToken($token);
    }

    /**
     * Get the authenticated User.
     *
     * @return JsonResponse
     */
    public function me(): JsonResponse
    {
        return response()->json(
            new UserResource(Auth::user()),
        );
    }

    /**
     * Log the User out (Invalidate the token).
     *
     * @return JsonResponse
     */
    public function logout(): JsonResponse
    {
        Auth::logout();

        return $this->message('Successful logout.');
    }

    /**
     * Refresh a token.
     *
     * @return JsonResponse
     */
    public function refresh(): JsonResponse
    {
        return $this->respondWithToken(Auth::refresh());
    }

    /**
     * Get the token array structure.
     *
     * @param string $token
     *
     * @return JsonResponse
     */
    protected function respondWithToken(string $token): JsonResponse
    {
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => Auth::factory()->getTTL() * 60
        ]);
    }

    /**
     * Get the guard to be used during authentication.
     *
     * @return Guard
     */
    public function guard(): Guard
    {
        return Auth::guard();
    }
}
