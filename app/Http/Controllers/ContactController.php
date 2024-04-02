<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('partials.contacts.index');
    }

    //store
    public function store(Request $request)
    {
        $request->validate(
            [
                'name' => 'required',
                'email' => 'required',
                'message' => 'required',
            ],
            [
                'name.required' => 'Le nom est obligatoire',
                'email.required' => 'L\'email est obligatoire',
                'message.required' => 'Le message est obligatoire',

            ]

        );

        //store
        $contact = new Contact();
        $contact->name = $request->name;
        $contact->subject = $request->subject;
        $contact->email = $request->email;
        $contact->message = $request->message;
        $contact->save();

        //redirect
        return redirect()->back()->with('success', 'Message sent successfully');
    }
}
