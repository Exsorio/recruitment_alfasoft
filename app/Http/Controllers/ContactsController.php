<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactsController extends Controller
{
    /**
     * Controller to CRUD contacts Recruitment Alfasoft
     * By Ivan Alonzo
     * 
     * DATE 13-02-2023
     */


    /**
     * View initial contacts
     * 
     * @return view 
     * 
    */

    public function index()
    {
        return view('contacts.index')
                ->with(['contacts' => Contact::all()]);
    }

    public function create ()
    {
        return view('contacts.create'); 
    }

    public function store ()
    {
       $contact = Contact::create(request()->all());

        return view('contacts.show')
                ->with(['contact' => Contact::findOrFail($contact->id)]); 
     
    }

    public function show ($contact_id)
    {
        return view('contacts.show')
                ->with(['contact' => Contact::findOrFail($contact_id)]); 
    }

    public function edit ($contact_id)
    {
        return view('contacts.edit')
                ->with(['contact' => Contact::findOrFail($contact_id)]);
    }

    public function update ($contact)
    {
        $contact = Contact::findOrFail($contact);
        if($contact){
            $contact->update(request()->all());
        }

        return view('contacts.show')
        ->with(['contact' => Contact::findOrFail($contact->id)]); 
    }

    public function destroy ($contact_id)
    {
        $contact = Contact::findOrFail($contact_id);
        $contact->delete();
        return response()->json(null, 204);
    }
}
