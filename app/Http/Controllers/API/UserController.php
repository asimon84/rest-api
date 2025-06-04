<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Get User information
     *
     * @param Request $request
     * @return mixed
     */
    public function getUser(Request $request)
    {
        return response()->json([
            'success' => true,
            'user' => $request->user()
        ]);
    }

    /**
     * Patch User
     *
     * @param Request $request
     * @return mixed
     */
    public function patchUser(Request $request)
    {
        $user = User::find($request->user()->id);

        $user->name = $request->get('name') ?? $user->name;
        $user->email = $request->get('email') ?? $user->email;
        $user->password = Hash::make($request->get('password') ?? $user->password);

        return response()->json([
            'success' => $user->save(),
            'user' => $user
        ]);
    }

    /**
     * Update User
     *
     * @param Request $request
     * @return mixed
     */
    public function updateUser(Request $request)
    {
        $user = User::find($request->user()->id);

        $user->name = $request->get('name') ?? $user->name;
        $user->email = $request->get('email') ?? $user->email;
        $user->password = Hash::make($request->get('password') ?? $user->password);

        return response()->json([
            'success' => $user->save(),
            'user' => $user
        ]);
    }

    /**
     * Delete User
     *
     * @param Request $request
     * @return mixed
     */
    public function deleteUser(Request $request)
    {
        return response()->json([
            'success' => !empty(User::destroy($request->user()->id))
        ]);
    }
}
