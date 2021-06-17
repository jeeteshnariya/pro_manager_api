<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $email = $request->email;
        $password = $request->password;
        if ($email && $password) {
            $user = User::where('password',$password)->where('email',$email)->first();            
            if ($user) {  
                $token = Str::random(32);
                $user->token = $token;
                $user->save();
                return response()->json([
                    'email' => $user->email,
                    'token' => $user->token,
                    'id' => $user->id                    
                ], 201);
            } 
            else {
            return response()->json([
                'error' => 'Unauthenticated user',
                'code' => 401,
            ], 401);
            }
        } 
        else {
            return response(["error" => "Please fill email and password!"], 401);
        }
    }
    
    public function user(Request $request){ 
        $email = $request->email;
        $password = $request->password;              
        $user = User::where('password',$password )->where('email',$email)->first();
        if($user){
            return response(['User' => $user, 'message' => 'user found'],201);
        }
        else {
            return response(['error' => 'user not found'],401);
        }            
    }  
    
}
