<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    function home(){
        $articles = Article::all();
        return view('HomePage')->with('articles',$articles);
    }

    function detail($article_id){
        
        $article = Article::where('id', $article_id)->first();
        return view('detail')->with('article',$article);
    }

    //show the list of category
    public function list_category(){
        $categories = DB::table('categories')
            ->get();
        return view('category')->with('categories',$categories);
    }
 
    function show_category($category_id){
        $articles = DB::table('categories')
            ->where('categories.id', '=', $category_id)
            ->join('articles', 'categories.id', '=', 'articles.category_id')
            ->select('articles.*', 'categories.name as category_name', 'categories.id as category_id')
            ->paginate(6);
        $category_name = DB::table('categories')
            ->where('id', '=', $category_id)
            ->select('name')
            ->first();
        return view('HomePage')
            ->with('articles', $articles)
            ->with('category_name', $category_name);
    }

    function aboutus(){
        return view('about');
    }
}
