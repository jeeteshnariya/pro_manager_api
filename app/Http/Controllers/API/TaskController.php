<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\task;

class TaskController extends Controller
{
    public function index()
    {
        $task = task::all();
        //$task = task::factory()->count(10)->create();
        return response(['task' => $task, 'message' => 'data retrive successfully'],200);
    }
    public function save(Request $request)
    {
        $data=$request->all();
        $task = task::create($data);
        return response(['task' => $task, 'message' => 'data save successfully'],201);
    }
    public function update(Request $request, $id)
    {   //return $request->all();
        $task = task::find($id);
        $task->title=$request->title;
        $task->priority=$request->priority;
        $task->status=$request->status;
        $task->save();
        return response(['task' => $task, 'message' => 'data updated successfully'],201);
    }
    public function delete($id)
    {
        $task = task::destroy($id);
        return response(['task' => $task, 'message' => 'data deleted successfully'],401);
        
    }
}
