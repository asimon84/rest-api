<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
//    /**
//     * Display a listing of the resource.
//     */
//    public function index()
//    {
//        //
//    }
//
//    /**
//     * Store a newly created resource in storage.
//     */
//    public function store(Request $request)
//    {
//        //
//    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        $user = $request->user();

        $success = (!empty($user)) ? true : false;
        $message = ($success) ? 'User found successfully.' : 'Task failed. User not found.';

        return response()->json([
            'success' => $success,
            'message' => $message,
            'user' => $user
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $user = User::find($request->user()->id);

        $user->name = $request->get('name', $user->name);
        $user->email = $request->get('email', $user->email);
        $user->password = ($request->get('password')) ? Hash::make($request->get('password')) : $user->password;

        $success = $user->save();
        $message = ($success) ? 'User updated successfully.' : 'Task failed. User not updated.';

        return response()->json([
            'success' => $success,
            'message' => $message,
            'user' => $user
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $success = !empty(User::destroy($request->user()->id));
        $message = ($success) ? 'User deleted successfully.' : 'Task failed. User not deleted.';

        return response()->json([
            'success' => $success,
            'message' => $message
        ]);
    }
}
