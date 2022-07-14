<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RegisterController extends Controller
{
    public function view(){
        return view('register');
    }
    //validasi pada bagian register
    public function user(Request $request){

        $request->validate([
            'name' => 'required|min:5',
            'email' => 'required|unique:users',
            'password' => 'required|min:8',
            'phone' => 'required',
            'confirm_password' => 'required|same:password',
        ]);
        //untuk sembunyikan password
        $password = bcrypt ($request->password);
        DB::table('users')->insert([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => $password,
            'role' => 'User'
        ]);
        return view('login');
    }
}
