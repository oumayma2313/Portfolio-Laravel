<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Services;

class servicescontroller extends Controller
{
    public function index(){
        $service= services::all();
        return view('Services.index')->with('service', $service);
        //return view('Layout.master')->with('service', $service);
    }
    public function Detail($idService){
        $service= Services::where('id',$idService)->firstOrfail();
        return view('Services.details')->with('service',$service);
    }
    
}
