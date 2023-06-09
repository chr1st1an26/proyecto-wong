<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){
        return view('inicio');
    }

    public function store(Request $request){
        // dd($request);
        $this->validate($request,[
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if(!auth()->attempt($request->only('email','password'))){
            return back()->with('mensaje','Credenciales Incorrectas');
        }
        return redirect()->route('post.index', auth()->user()->username);
    }
}
