<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Status;
use Illuminate\Support\Facades\Session;

class StatusController extends Controller
{
    public function index(){
        $statuses=status::all();
        return view('backend.statuses.index',compact('statuses'));
    }

    public function create(){
        return view('backend.statuses.create');
    }
    public function store(Request $request){
        $this->validate($request,[
            "name"=>"required|unique:departments"
        ]);

        $status = new Status();
        $status->name=$request->name;
        $status->save();
        
        Session::flash("success","Successfully Saved");
        return redirect("statuses");
    }

    public function show($id){
        $status=Status::find($id);
        if(!$status){
            Session::flash("error","Department not found");
            return back();
        }
        return view('backend.statuses.show',compact("status"));
    }

    public function edit($id){
        $status=Status::find($id);
        if(!$status){
            Session::flash("error","Status not found");
            return back();
        }
        return view('backend.statuses.edit',compact("status"));
    }

    public function update(Request $request,$id){
        $status=Status::find($id);
        if(!$status){
            Session::flash("error","Status not found");
            return back();
        }

        $this->validate($request,[
            "name"=>"required|unique:departments,name,".$status->id
        ]);

        $status->name=$request->name;
        $status->save();
        
        Session::flash("success","Successfully Updated");
        return redirect("statuses");
}
}
