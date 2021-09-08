<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\aboutus;

class aboutuscontroller extends Controller
{
     public function index(){
        
        $aboutus= aboutus::all();
        return view('AboutUs.index')->with('aboutus' , $aboutus);
    }
}
