<?php

namespace App\Http\Controllers;
use App\Models\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class DepartmentController extends Controller
{
    public function index(){
        $departments=Department::all();
        return view('backend.departments.index',compact('departments'));
    }

    public function create(){
        return view('backend.departments.create');
    }
    
    public function store(Request $request){
        $this->validate($request,[
            "name"=>"required|unique:departments"
        ]);

        $department = new Department();
        $department->name=$request->name;
        $department->save();
        
        Session::flash("success","Successfully Saved");
        return redirect("departments");
    }

    public function show($id){
        $department=Department::find($id);
        if(!$department){
            Session::flash("error","Department not found");
            return back();
        }
        return view('backend.departments.show',compact("department"));
    }

    public function edit($id){
        $department=Department::find($id);
        if(!$department){
            Session::flash("error","Department not found");
            return back();
        }
        return view('backend.departments.edit',compact("department"));
    }

    public function update(Request $request,$id){
        $department=Department::find($id);
        if(!$department){
            Session::flash("error","Department not found");
            return back();
        }

        $this->validate($request,[
            "name"=>"required|unique:departments,name,".$department->id
        ]);

        $department->name=$request->name;
        $department->save();
        
        Session::flash("success","Successfully Updated");
        return redirect("departments");
    }
}
