<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    function form(){
        return view('login');
    }

    function login(Request $request){
        $this->validator($request);

        $credential = $request->only(['email','password']);
        if(Auth::attempt($credential)){
            return redirect('/welcome');
        }
        return back();
        
    }

    function validator(Request $request){
        return $request->validate([
            'email' => ['required','string','email'],
            'password' => ['required','min:3','string']
        ]);
    }

    function welcome(){
        return view('welcome');
    }

    function logout(){
        Auth::logout();
        return redirect('/');
    }

    

}
