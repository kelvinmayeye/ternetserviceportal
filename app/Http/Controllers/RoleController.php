<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Session;

class RoleController extends Controller {
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */

    public function index() {
        $roles = Role::all();
        return view( 'backend.roles.index', compact( 'roles' ) );
    }

    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */

    public function create() {
        return view( 'backend.roles.create', );
    }

    /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */

    public function store( Request $request ) {
        $this->validate($request,[
            'name'=>'required|string'
        ]);
        $role = new Role();
        $role->name = $request->name;
        $role->save();
        Session::flash( 'success', 'Role stores successfully' );
        return back();
    }

    /**
    * Display the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */

    public function show( $id ) {
        //
    }

    /**
    * Show the form for editing the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */

    public function edit( $id ) {
        //
    }

    /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */

    public function update( Request $request, $id ) {
        //
    }

    /**
    * Remove the specified resource from storage.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */

    public function destroy($id) {
        $role = Role::find($id);
        if(!$role){
            Session::flash("error","Role not found"); 
        }
        try {
            $role->delete();
            Session::flash("success","Role deleted successfully");
            return back();
        } catch (QueryException $exception) {
            Session::flash('error', 'This Role cant be deleted');
            return back();
        }
        return back();
    }
}
