<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\UpdateUserRequest;
use App\Http\Resources\UserResource;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;
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

        $user->update([
            'name' => $data->name,
            'email' => $data->email,
        ]);

        $avatar = $data->avatar;

        if ($avatar) {
            $avatarFileName = Str::uuid() . '.' . $avatar->extension();
            $avatar->move('images/avatars', $avatarFileName);

            $user->update([
                'avatar' => 'images/avatars/' . $avatarFileName
            ]);
        }

        $user->currency()->associate($data->currency_id);
        $user->save();

        return response()->json(
            new UserResource($user),
        );
    }
}
