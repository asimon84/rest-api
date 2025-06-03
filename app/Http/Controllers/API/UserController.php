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
     * Get User By ID
     *
     * @param Request $request
     * @param User $user
     * @return mixed
     */
    public function getUserByID(Request $request, User $user)
    {
        return response()->json([
            'success' => true,
            'user' => $user,
        ]);
    }

    /**
     * Patch User By ID
     *
     * @param Request $request
     * @param int $id
     * @return mixed
     */
    public function patchUserByID(Request $request, int $id)
    {

    }

    /**
     * Update User By ID
     *
     * @param Request $request
     * @param int $id
     * @return mixed
     */
    public function updateUserByID(Request $request, int $id)
    {

    }

    /**
     * Delete User By ID
     *
     * @param Request $request
     * @param int $id
     * @return mixed
     */
    public function deleteUserByID(Request $request, int $id)
    {

    }
}
