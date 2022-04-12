<?php

namespace App\Http\Controllers\frontend;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Department;
use App\Models\Contact;
use Notification;
use App\Models\NewsSubscriber;
use App\Notifications\NewPosts;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Session;


class FrontEndController extends Controller
{
    public function getHomePage(){
        $services=Service::take(6)->get();
        return view('frontend.pages.home',compact('services'));
    }

    public function getServicesPage(){
        $services=Service::simplePaginate(6);
        return view('frontend.pages.services',compact('services'));
    }

    public function getContactPage(){
        return view('frontend.pages.contacts');
    }

    public function getLogin(){
        return view('frontend.auth.login');
    }

    public function login(Request $request){
        
        $this->validate($request,[
            "email"=>"required|email",
            "password"=>"required"
        ]);
        
        $credentials=[
            "email"=>$request->email,
            "password"=>$request->password
        ];
        
        if(Auth::attempt($credentials)){
            
            return redirect()->intended('services');
        }
        
        session::flash("error","email or password is not valid");
       // return $request->all();
        return back();
    }

    public function showServices($id){
        $service=Service::find($id);
        $relatedservices=Service::take(3)->get();
        //$relatedservices=Service::simplePaginate(3);
        return view('frontend.pages.showservices',compact("service","relatedservices"));
    }

    public function showdepartment($id){
        $department=Department::find($id);
       // return view('frontend.pages.showdepartment',compact("service"));
        return view('frontend.pages.showdepartment',compact("department"));
    }

    public function storeSubscriber(Request $request){
        $this->validate($request,[
            "email"=>"required|email"
        ]);

        $newssubscribers = new NewsSubscriber();
        $newssubscribers->email=$request->email;
        $newssubscribers->save();
        Session::flash("success","Thank you we will send you notifications");
        return back();
    }

    public function storeContacts(Request $request){
        $this->validate($request,[
            "email"=>"email"
        ]);
        
        $contacts = new Contact();
        $contacts->name=$request->name;
        $contacts->email=$request->email;
        $contacts->subject=$request->subject;
        $contacts->message=$request->message;
        $contacts->save();
        Session::flash("success","Thank you for contact us");
        return back();
    }

    
    public function logout(Request $request){
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect("/");
    }
}
