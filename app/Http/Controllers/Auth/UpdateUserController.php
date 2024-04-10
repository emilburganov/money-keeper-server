<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\UpdateUserRequest;
use App\Http\Resources\UserResource;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class UpdateUserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api');
    }

    public function __invoke(UpdateUserRequest $request): JsonResponse
    {
        $user = Auth::user();
        $data = $request->safe();

        return response()->json($data);
        $user->update([
            'name' => $data->name,
            'email' => $data->email,
        ]);

        $avatar = $request->file('avatar');

        if ($avatar) {
            Storage::disk('public')
                ->putFileAs('avatars', $avatar, Str::uuid() . '.' . $avatar->extension());
        }

        $user->currency()->associate($data->currency_id);
        $user->save();

        return response()->json(
            new UserResource($user),
        );
    }
}
