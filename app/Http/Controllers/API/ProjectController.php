<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\project;

class ProjectController extends Controller
{
    public function index()
    {
        $project = project::all();
        //$project = project::factory()->count(10)->create();
        return response(['project' => $project, 'message' => 'data retrive successfully'],200);
    }

    public function save(Request $request)
    {
        $data=$request->all();
        $project = project::create($data);
        return response(['project' => $project, 'message' => 'data save successfully'],201);
    }

    public function update(Request $request, $id)
    {   //return $request->all();
        $project = project::find($id);
        $project->name=$request->name;
        $project->technology=$request->technology;
        $project->startdate=$request->startdate;
        $project->enddate=$request->enddate;
        $project->status=$request->status;
        $project->desc=$request->desc;
        $project->save();
        return response(['project' => $project, 'message' => 'data updated successfully'],201);
    }

    public function delete($id)
    {
        $project = project::destroy($id);
        return response(['project' => $project, 'message' => 'data deleted successfully'],401);
        
    }
}
