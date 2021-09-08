<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Projects;


class projectscontroller extends Controller
{
    public function index(){
        $project= projects::all();
        return view('Projects.index')->with('project', $project);
    }
    public function Detail($idProject){
        $project= Projects::where('id',$idProject)->firstOrfail();
        return view('Projects.details')->with('project',$project);
    }
}
