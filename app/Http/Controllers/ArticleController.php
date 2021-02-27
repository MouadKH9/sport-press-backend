<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function home()
    {
        $all_articles = Article::all();
        $top_articles = Article::with('views')->get()->sort(function ($a, $b) {
            return count($b->views()->get()) - count($a->views()->get());
        });
        return view('home', ['articles' => $all_articles, 'top_articles' => $top_articles]);
    }
}
