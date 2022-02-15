<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use \App\Models\Article;

class ArticleController extends Controller
{
    public function index() {
        $articles=Article::all();
        //return $articles;
        return view('page')->with('articles', $articles);
    }
}
