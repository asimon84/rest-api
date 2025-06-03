<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

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
            'user' => $request->user(),
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

    }

    /**
     * Update User
     *
     * @param Request $request
     * @return mixed
     */
    public function updateUser(Request $request)
    {

    }

    /**
     * Delete User
     *
     * @param Request $request
     * @return mixed
     */
    public function deleteUser(Request $request)
    {
        User::destroy($request->user()->id);

        return response()->json([
            'success' => true
        ]);
    }
}
