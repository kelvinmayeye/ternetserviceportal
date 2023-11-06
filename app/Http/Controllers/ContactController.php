<?php

namespace App\Http\Controllers;
use App\Models\Contact;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index() {
        $contacts = Contact::all();
        return view('backend.contacts.index',compact("contacts"));
    }

    public function deletecontact($id){
        $contact=Contact::find($id);
        $contact->delete();
        Session::flash("succuess","Contact Deleted");
        return back();
    }
}
