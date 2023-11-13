<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use JWTAuth;

class ApiController extends Controller
{

    public function login(Request $request)
    {
        $input = $request->only('email', 'password');

        try {
            $token = JWTAuth::attempt($input);
            return response()->json(['token' => $token],200);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()],400);
        }
    }

    public function register(Request $request)
    {
        $input = $request->only('name', 'email', 'password');
        $input['password'] = Hash::make($input['password']);

        try {
            User::create($input);
            return response()->json(['create' => 'OK'], 201);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()],400);
        }

    }
    public function getData()
    {
        return response()->json(['data' => ['a', 'b', 'c']], 200);
    }
}
