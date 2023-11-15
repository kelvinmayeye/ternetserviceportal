<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Session;
use Spatie\Permission\Models\Permission;

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

    public function getRolePermission(){
        $roles = Role::all();
        $permissions = Permission::all();

        return view('backend.rolespermission.index',compact('roles','permissions'));
    }

    public function storeRolePermission(Request $request){
        $data = array();
        $permissions = $request->permission;
         
        foreach ($permissions as $key => $item) {
            $data['role_id'] = $request->role;
            $data['permission_id'] = $item;
        
            // Check if the role already has the permission
            $existingRecord = DB::table('role_has_permissions')
                ->where('role_id', $data['role_id'])
                ->where('permission_id', $data['permission_id'])
                ->first();
        
            if (!$existingRecord) {
                try {
                    // Insert the record only if it doesn't exist
                    DB::table('role_has_permissions')->insert($data);
                    Session::flash('success', 'Permission added successfully');
                } catch (QueryException $exception) {
                    Session::flash('error', 'Failed to add permission');
                    return back();
                }
            } else {
                // If the record already exists, you can skip the insertion
                Session::flash('info', 'Permission already assigned to the role');
            }
        }

        return back();
    }
}
