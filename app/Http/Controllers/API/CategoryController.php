<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\category;

class CategoryController extends Controller
{
    public function index()
    {
        $category = category::all();
        //$category = category::factory()->count(10)->create();
        return response(['category' => $category, 'message' => 'data retrive successfully'],200);
    }
    public function save(Request $request)
    {
        $data=$request->all();
        $category = category::create($data);
        return response(['category' => $category, 'message' => 'data save successfully'],201);
    }
    public function update(Request $request, $id)
    {   //return $request->all();
        $category = category::find($id);
        $category->name=$request->name;
        $category->slug=$request->slug;
        $category->type=$request->type;
        $category->save();
        return response(['category' => $category, 'message' => 'data updated successfully'],201);
    }
    public function delete($id)
    {
        $category = category::destroy($id);
        return response(['category' => $category, 'message' => 'data deleted successfully'],401);
        
    }
}
