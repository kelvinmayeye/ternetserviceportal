<?php

namespace App\Http\Controllers;
use App\Models\Contact;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index() {
        $contacts = Contact::all();
        return view('backend.contacts.index',compact("contacts"));
    }

    public function deletecontact($id){
        if($id==null){
            $id=0;
        }
        $res=Contact::find($id)->delete();
        return back();
    }
}
