<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;


class contactcontroller extends Controller
{
    public function index(){
        return view('Contact.index');
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
