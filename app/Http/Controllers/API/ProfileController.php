<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        $profile = profile::all();
        //$profile = profile::factory()->count(10)->create();
        return response(['faculty' => $profile, 'message' => 'data retrive successfully'], 200);
    }
    public function save(Request $request)
    {
        $data = $request->all();
        $profile = profile::create($data);
        return response(['profile' => $profile, 'message' => 'data save successfully'], 201);
    }
    public function update(Request $request, $id)
    { //return $request->all();
        $profile = profile::find($id);
        $profile->name = $request->name;
        $profile->dob = $request->dob;
        $profile->address = $request->address;
        $profile->city = $request->city;
        $profile->state = $request->state;
        $profile->country = $request->country;
        $profile->gender = $request->gender;
        $profile->phonenumber = $request->phonenumber;
        $profile->semester = $request->semester;
        $profile->clgname = $request->clgname;
        $profile->course = $request->course;
        $profile->role = $request->role;
        $profile->pid = $request->pid;
        $profile->qualification = $request->qualification;
        $profile->technology = $request->technology;
        $profile->cover = $request->cover;
        $profile->avtar = $request->avtar;
        $profile->status = $request->status;
        $profile->email = $request->email;
        $profile->save();
        return response(['profile' => $profile, 'message' => 'data updated successfully'], 201);
    }

    public function delete($id)
    {
        $profile = profile::destroy($id);
        return response(['profile' => $profile, 'message' => 'data deleted successfully'], 401);

    }
}