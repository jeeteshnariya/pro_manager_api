<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function index()
    {
        $role = role::all();
        //$role = role::factory()->count(10)->create();
        return response(['role' => $role, 'message' => 'data retrive successfully'], 200);
    }
    public function save(Request $request)
    {
        $data = $request->all();
        $role = role::create($data);
        return response(['role' => $role, 'message' => 'data save successfully'], 201);
    }
    public function update(Request $request, $id)
    { //return $request->all();
        $role = role::find($id);
        $role->name = $request->name;
        $role->slug = $request->slug;
        $role->save();
        return response(['role' => $role, 'message' => 'data updated successfully'], 201);
    }
    public function delete($id)
    {
        $role = role::destroy($id);
        return response(['role' => $role, 'message' => 'data deleted successfully'], 401);

    }
}