<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    //show the article that the user write (login)
    function user_list(){
        $users = DB::table('users')
            ->where('role', '=', "User")
            ->paginate(10);
        return view('userlist')->with('users', $users);
    }

    // delete 1 user of the admin choice
    public function delete($user_id){

        //check if the the user have articles
        if (Article::where('user_id', '=', $user_id)->exists()){
            //delete the old image in the storage
            $images = DB::table('articles')
                ->where('id', '=', $user_id)
                ->select('image')->get();
            foreach ($images as $image){
//                dd($image->image);
                Storage::disk('public')->delete($image->image);
            }
        }


        //delete the data
        DB::table('users')
            ->where('id', '=', $user_id)
            ->delete();
        return redirect('/homepage/admin/user-list');
    }
}
