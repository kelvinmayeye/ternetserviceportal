<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NewsSubscriber;

class SubscriberController extends Controller
{
    public function index() {
        $newssubscribers = NewsSubscriber::all();
        return view('backend.subscribers.index',compact("newssubscribers"));
    }

    public function deletecontact($id){
        NewsSubscriber::find($id)->delete();
        return back();
    }
}
