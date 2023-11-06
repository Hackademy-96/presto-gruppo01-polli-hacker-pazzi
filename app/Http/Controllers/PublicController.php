<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    function welcome() {
        $articles = Article::all();
        $lastArticles = Article::latest()->take(6)->get();
        return view('welcome', compact('articles', 'lastArticles'));
    }

    public function searchArticles(Request $request){
        
        $articles = Article::search($request->searched)->get();
        
        return view('article.index', compact('articles'));
    }
}

