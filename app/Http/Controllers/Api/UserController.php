<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{

    public function login(Request $request)
    {
        $credentials = $request->only('phone', 'password');
        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            $token = $user->createToken('remember_token')->plainTextToken;
            return response()->json([
                'status' => true,
                'message' => 'Login successful',
                'token' => $token
            ], 200);
        } else {
            return response()->json([
                'status' => false,
                'message' => 'Invalid credentials'
            ], 401);
        }
    }

    public function register(Request $request)
    {
        $validatedData = Validator::make($request->all(),[
            'name' => 'required|string|max:255',
            'email' => 'required|string|max:255|unique:users',
            'phone' => 'required|string|max:255|unique:users',
            'password' => 'required|string|min:8',
        ]);
        if ($validatedData->fails()) {
            return response()->json([
                'status' => false,
                'message' => $validatedData->errors()
            ], 200);
        }
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => Hash::make($request->password),
        ]);
        return response()->json([
            'status' => true,
            'message' => 'User registered successfully'
        ], 201);
    }

    public function list(Request $request)
    {
        $users = User::select("id","name","email","phone")->get();
        return response()->json([
            'status' => true,
            'users' => $users
        ], 200);
    }
}
