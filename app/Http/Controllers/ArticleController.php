<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function home()
    {
        $all_articles = Article::all();
        return view('home', ['articles' => $all_articles]);
    }
}
