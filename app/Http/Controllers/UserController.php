<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Department;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function index(){
        $users=User::where('id',"!=",auth()->user()->id)->get();
        return view('backend.users.index',compact('users'));
    } 

    public function create(){
        $departments=Department::all();
        $roles=Role::all();
        return view('backend.users.create',compact('departments','roles'));
    }

    public function show($id){
        $user=User::find($id);
        if(!$user){
            Session::flash("error","User not found");
            return back();
        }
        return view('backend.users.show',compact("user"));
    }

    public function edit($id){
        $users=User::find($id);
        $departments=Department::all();
        if(!$users){
            Session::flash("error","User not found");
            return back();
        }
        return view('backend.users.edit',compact("users","departments"));
    }

    

    public function store(Request $request){
        $this->validate($request,[
            "name"=>"required|unique:users",
            'department_id'=>"required"
        ]);

        $user = new User();
        $user->name=$request->name;
        $user->email=$request->email;
        $user->password=bcrypt("password");
        $user->department_id=$request->department_id;
        $user->save();

        $user->assignRole($request->role);
        
        Session::flash("success","Successfully Saved");
        return redirect("users");
    }

    public function update(Request $request,$id){
        $users=User::find($id);
        if(!$users){
            Session::flash("error","User not found");
            return back();
        }

        $this->validate($request,[
            "name"=>"required|unique:users,name,".$users->id
        ]);

        $users->name=$request->name;
        $users->email=$request->email;
        $users->department_id=$request->department_id;
        $users->save();
        
        Session::flash("success","Successfully Updated");
        return redirect("users");
    }

    public function delete($id){
        $user = User::find($id);
        if(!$user){
            Session::flash("error","User not found"); 
        }
        try {
            $user->delete();
            Session::flash("success","User deleted successfully");
            return back();
        } catch (QueryException $exception) {
            Session::flash('error', 'This User cant be deleted');
            return back();
        }
        return back();
    }
}
