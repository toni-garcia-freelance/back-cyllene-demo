<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email', 
            'password' => 'required'
        ]);
        $user = User::where('email', $request->email)->first();
        if($user && Hash::check($request->password, $user->password)){
            $token = $user->createToken('auth_token')->plainTextToken;
            return response()->json([
                'access_token' => $token,
                'token_type' => 'Bearer',
                'user' => [
                    'email' => $user->email,
                    'name' => $user->name
                ]
            ]);
        } 
        return response()->json([
            'message' => 'Unauthorized'
        ], 401);
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required', 
            'email' => 'required|email|unique:users', 
            'password' => 'required',
            'confirm_password' => 'required|same:password'
        ]);
        $user = User::create([
            'name' => $request->name, 
            'email' => $request->email, 
            'password' => Hash::make($request->password)
        ]);
        
        $token = $user->createToken('auth_token')->plainTextToken;
        return response()->json([
            'access_token' => $token,
            'token_type' => 'Bearer',
            'user' => [
                'email' => $user->email,
                'name' => $user->name
            ]
        ]);
    }

    public function logout(Request $request)
    {
        $request->user()->currentAccessToken()->delete();
        return response()->json([
            'message' => 'Logged out'
        ]);
    }

    public function dashboard(Request $request)
    {
        return response()->json([
            'user' => $request->user()
        ]);
    }
}
