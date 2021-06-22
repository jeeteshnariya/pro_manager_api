<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        //$User = User::all();
        $User = User::with(['profiles', 'roles'])->get();
        //$User = User::factory()->count(10)->create();
        return response(['User' => $User, 'message' => 'data retrive successfully'], 200);
    }

    public function save(Request $request)
    {
        $data = $request->all();
        $User = User::create($data);
        return response(['User' => $User, 'message' => 'data save successfully'], 201);
    }

    public function update(Request $request, $id)
    { //return $request->all();
        $User = User::find($id);
        $User->name = $request->name;
        $User->email = $request->email;
        $User->password = $request->password;
        $User->save();
        return response(['User' => $User, 'message' => 'data updated successfully'], 201);
    }

    public function delete($id)
    {
        $User = User::destroy($id);
        return response(['User' => $User, 'message' => 'data deleted successfully'], 201);
    }
}
