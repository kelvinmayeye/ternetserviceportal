<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Department;
use App\Models\Status;
use App\Models\Session;

class ServiceController extends Controller
{
    public function index(){
        $service=Service::all();
        return view('backend.services.index',compact("service"));
    }
    
    public function show($id){
        $service=Service::find($id);
        return view('backend.services.show',compact("service"));
    }
    public function create(){
        $departments=Department::all();
        $statuses=Status::all();
        return view('backend.services.create',compact("departments","statuses"));
    }

    public function store(Request $request){
        
        $this->validate($request,[
            "name"=>"required|unique:services",
            "description"=>"required",
            "department_id"=>"required",
            "status_id"=>"required",
            "image"=>"required"
        ]);
        

        $services = new Service();
        $services->name=$request->name;
        $services->description=$request->description;
        $services->department_id=$request->department_id;
        $services->status_id=$request->status_id;
        if($request->hasFile("image")){
            $image=$request->file("image");
            $imageName=time().'.'.$image->getClientOriginalExtension();
            $path=storage_path('app/public/services');
            $image->move($path,$imageName);
            $services->image=$imageName;
        }
        $services->save();
        
        Session::flash("success","Successfully Saved");
        return redirect("servicescreate");
    }
    public function edit($id){
        $service=Service::find($id);
        $departments=Department::all();
        $statuses=Status::all();
        if(!$service){
            Session::flash("error","Service not found");
            return back();
        }
        return view('backend.services.edit',compact("service","departments","statuses"));
    }

    public function update(Request $request,$id){
        
        $service=Service::find($id);
        if(!$service){
            Session::flash("error","service not found");
            return back();
        }
        
        $this->validate($request,[
            "name"=>"required|unique:services,name,".$service->id,
            "description"=>"required",
            "department_id"=>"required",
            "status_id"=>"required",
            "image"=>"nullable",
        ]);

        $service->name=$request->name;
        $service->description=$request->description;
        $service->department_id=$request->department_id;
        $service->status_id=$request->status_id;

        if($request->hasFile("image")){
            $image=$request->file("image");
            $imageName=time().'.'.$image->getClientOriginalExtension();
            $path=storage_path('app/public/services');
            $image->move($path,$imageName);
            Storage::delete($service->image);
            $service->image=$imageName;            
        }
        
        $service->save();
        //return $service;
        
        Session::flash("success","Successfully Updated");
        return redirect("services");
    }
}
