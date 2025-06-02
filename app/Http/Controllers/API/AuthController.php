<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Validator;

class AuthController extends Controller
{
    /**
     * Default name for Tokens
     *
     * @param string
     */
    const DEFAULT_TOKEN_NAME = 'API Bearer Token';

    /**
     * Default number of minutes before Tokens expire
     *
     * @param string
     */
    const DEFAULT_TOKEN_EXPIRATION_MINUTES = 5;

    /**
     * Default Token Abilities
     *
     * @param array
     */
    const DEFAULT_TOKEN_ABILITIES = [
        "*"
    ];

    /**
     * Create a new API User Token
     *
     * @param Request $request
     * @return array
     */
    public function createToken(Request $request): array
    {
        if (!Auth::attempt($request->only('email', 'password'))) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        $user = Auth::user();
        $token = $user->createToken(
            self::DEFAULT_TOKEN_NAME,
            self::DEFAULT_TOKEN_ABILITIES,
            now()->addMinutes(self::DEFAULT_TOKEN_EXPIRATION_MINUTES)
        );

        return ['token' => $token->plainTextToken];
    }

//    /**
//     * @param Request $request
//     * @return mixed
//     */
//    public function register(Request $request)
//    {
//        $validator = Validator::make($request->all(), [
//            'name' => 'required|string|max:255',
//            'email' => 'required|string|email|max:255|unique:users',
//            'password' => 'required|string|min:8|confirmed',
//        ]);
//
//        if ($validator->fails()) {
//            return response()->json(['error' => $validator->errors()], 401);
//        }
//
//        $user = User::create([
//            'name' => $request->name,
//            'email' => $request->email,
//            'password' => Hash::make($request->password),
//        ]);
//
//        $token = $user->createToken(self::DEFAULT_TOKEN_NAME, self::DEFAULT_TOKEN_ABILITIES, now()->addMinutes(self::DEFAULT_TOKEN_EXPIRATION_MINUTES)->plainTextToken;
//
//        return response()->json([
//            'success' => true,
//            'message' => 'User registered successfully.',
//            'token' => $token,
//            'user' => $user,
//        ]);
//    }
//
//    /**
//     * @param Request $request
//     * @return mixed
//     */
//    public function login(Request $request)
//    {
//        if (!Auth::attempt($request->only('email', 'password'))) {
//            return response()->json(['error' => 'Unauthorized'], 401);
//        }
//
//        $user = Auth::user();
//        $token = $user->createToken('plainTextToken', [])->plainTextToken;
//
//        return response()->json([
//            'success' => true,
//            'message' => 'Login successful.',
//            'token' => $token,
//            'user' => $user,
//        ]);
//    }
//
//    /**
//     * @param Request $request
//     * @return mixed
//     */
//    public function logout(Request $request)
//    {
//        $request->user()->tokens()->delete();
//
//        return response()->json([
//            'success' => true,
//            'message' => 'Logout successful.',
//        ]);
//    }
}