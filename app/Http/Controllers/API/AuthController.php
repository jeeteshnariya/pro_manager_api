<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        //return $request->all();
        $email = $request->email;
        $password = ($request->password);

        if (!$email && !$password) {
            return response(["error" => "Please fill email and password!"], 401);
        }

        $user = User::where('email', $email)->first();
        if ($user && !Hash::check($password, $user->password)) {
            return response(["error" => "Password Is Incorrect"], 401);
        }
        if (!$user) {
            return response()->json([
                'error' => 'Unauthenticated user',
                'code' => 401,
            ], 401);
        }
        $token = Str::random(32);
        $user->token = $token;
        $user->save();
        return response()->json([
            'email' => $user->email,
            'token' => $user->token,
            'id' => $user->id,
        ], 201);

    }

    public function user(Request $request)
    {
        $email = $request->email;
        $password = $request->password;
        $user = User::where('password', $password)->where('email', $email)->first();
        if ($user) {
            return response(['User' => $user, 'message' => 'user found'], 201);
        } else {
            return response(['error' => 'user not found'], 401);
        }
    }

}
