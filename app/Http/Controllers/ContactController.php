<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Mail\ContactMail;
use Dotenv\Exception\ValidationException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        return view('partials.contacts.index');
    }
    //show
    public function show($id)
    {
        $message = Contact::find($id);
        if ($message) {
            //set the 'read' field to 1
            $message->read = 1;
            $message->save();
        }
        return view('partials.admin.message_detail', ['message' => $message]);
    }
    //remove a message
    public function destroy($id)
    {
        $message = Contact::findOrFail($id);
        $message->delete();
        return redirect()->route('admin.allrequests')->with('contact-deleted', 'Le message été supprimé avec succès!');
    }
    //store
    public function store(Request $request)
    {
        try {
            $request->validate(
                [
                    'name' => 'required',
                    'email' => 'required',
                    'user_message' => 'required',
                ],
                //custom error messages
                [
                    'name.required' => 'Le nom est obligatoire',
                    'email.required' => 'L\'email est obligatoire',
                    'email.email' => 'L\'email doit être valide',
                    'user_message.required' => 'Le contenu du message est obligatoire',

                ]

            );
            //declare array $data variable with all of the request data
            $data = [
                'name' => $request->name,
                'subject' => $request->subject,
                'email' => $request->email,
                'user_message' => $request->user_message,
            ];
            //send email to admin at dev@apis-sahel.org
            Mail::to('dev@apis-sahel.org')->send(new ContactMail($data));

            //store
            $contact = new Contact();
            $contact->name = $request->name;
            $contact->subject = $request->subject;
            $contact->email = $request->email;
            $contact->user_message = $request->user_message;
            $contact->save();

            //redirect
            return response()->json(['message' => 'Votre message a été envoyé avec succès!']);
        } catch (ValidationException $e) {
            return response()->json(['message' => $e->getMessage()]);
        }
    }
}
