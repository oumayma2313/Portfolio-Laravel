<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Services;
use App\Models\Projects;
use App\Models\aboutus;
use App\Models\competences;
use App\Models\Contact;


class homecontroller extends Controller
{
    public function index(){
        $service= services::all();
        $project= projects::all();
        $aboutus= aboutus::all();
        $competence= competences::all();
        return view('Home.index')->with('service', $service)
        ->with('project', $project)
        ->with('aboutus' , $aboutus)
        ->with('competence',$competence)
        ;
    }
    public function contactme(Request $request) { 
        $contactme = new Contact;

        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);
        
        $contactme->name = $request->name;
        $contactme->email = $request->email;
        $contactme->message = $request->message;
        $contactme->save();
        return back()->with('Succès', 'Merci de nous contacter!');

    }
}
