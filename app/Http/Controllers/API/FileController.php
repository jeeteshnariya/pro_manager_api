<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\file;

class FileController extends Controller
{
    public function index()
    {
        $file = file::all();
        //$file = file::factory()->count(10)->create();
        return response(['file' => $file, 'message' => 'data retrive successfully'],200);
    }
    public function save(Request $request)
    {
        $data=$request->all();
        $file = file::create($data);
        return response(['file' => $file, 'message' => 'data save successfully'],201);
    }
    public function update(Request $request, $id)
    {   //return $request->all();
        $file = file::find($id);
        $file->name=$request->name;
        $file->path=$request->path;
        $file->status=$request->status;
        $file->size=$request->size;
        $file->type=$request->type;
        $file->save();
        return response(['file' => $file, 'message' => 'data updated successfully'],201);
    }
    public function delete($id)
    {
        $file = file::destroy($id);
        return response(['file' => $file, 'message' => 'data deleted successfully'],401);
        
    }
}
