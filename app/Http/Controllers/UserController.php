<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    //Update Profile
    function edit(){
        return view('profil');
    }

    function edited(Request $request){
        $this->validator($request);
        $data = [
            'name'=>$request->name,
            'email' => $request->email,
            'phone' => $request->phone
        ];
        DB::table('users')
            ->where('id', Auth::id())
            ->update($data);
        return redirect('/profile');
    }

    function validator(Request $request){
        return $request->validate([
            'name' => ['required','string'],
            'email' => ['required','string','email'],
            'phone' => ['required'],
        ]);
    }

    //BLOG MENU //BLOG MENU
    function blog(){
        $articles = DB::table('articles')->where('user_id','=', Auth::id())->get();
        return view('blog')->with('articles',$articles);
    }
    //deleteBlog
    function delete($article_id){
        DB::table('articles')->where('id', '=', $article_id)->delete();
        return redirect('/blog');
    }
    //createBlog
    function formblog(){

         $categories = DB::table('categories')->get();
        return view('createBlog')->with('categories', $categories);
    }
    //addBlog
    function add(Request $request){
        $this->validate($request, [
            'title' =>'required|string',
            'category' => 'required',
            'image' => 'required|image',
            'description' => 'required'
        ]);
        //save image
        $file = $request->file('image');
        $path = 'storage/';
        $file->move($path, $request->image->getClientOriginalName());

        $data = [
            'user_id' => Auth::id(),
            'category_id'=> $request->category,
            'title'=> $request->title,
            'description'=> $request->description,
            'image' => $request->image->getClientOriginalName()
        ];
        DB::table('articles')
            ->insert($data);
        return redirect('/blog')
            ->with('status', 'Success !');

    }
}
