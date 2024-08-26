<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{












    public function index()
    {
        @$contacts = Contact::all();
        return view('admin.pages.contact.list')->with('contacts', $contacts);
    }

    public function create()
    {
        //
    }


    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'message' => 'required',

        ]);

        $contact = Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message
        ]);
        if($contact){
            return redirect()->route('contact-us')->with('message', 'Your message has been recieved and one of our team member will contact you soon.')->withErrors([
                'msg' => 'Your message has been recieved and one of our team member will contact you soon.'
            ]);
        }
    }


    public function show(Contact $contact)
    {
        //
    }


    public function edit(Contact $contact)
    {
        //
    }


    public function update(Request $request, Contact $contact)
    {
        //
    }

    public function destroy(Contact $contact)
    {
        //
    }
}
