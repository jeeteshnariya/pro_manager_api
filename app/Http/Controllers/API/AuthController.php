<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(Request $request)
    {

        $email = $request->email;
        $password = $request->password;

        if ($email && $password) {

            // find user where email and password is match

            // if user found
            // msg user login succesfully
            // if not
            // user not match error

        } else {

            return response(["error" => "Please fill email and password!"], 401);
        }

    }
}