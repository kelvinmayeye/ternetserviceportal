<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(Request $request){
        $this->validate($request,[
            "email"=>"required|email",
            "password"=>"required"
        ]);
        return $request->all();
    }
}
