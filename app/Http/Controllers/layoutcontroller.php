<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Services;

class layoutcontroller extends Controller
{
    public function index(){
    $service= services::all();
    return view('Layout.master')->with('service', $service);
    }
}
