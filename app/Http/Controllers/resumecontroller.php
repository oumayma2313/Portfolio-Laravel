<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class resumecontroller extends Controller
{
    public function index(){
        return view('Resume.index');
    }
}
