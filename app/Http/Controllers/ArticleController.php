<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function home()
    {
        $all_articles = Article::all();
        return view('home', ['articles' => $all_articles]);
    }
    public function articleDetail($id)
    {
        //details of article
        $article =DB::table('articles')->where('id', $id)->get();
        //suggestion
        $articles =DB::table('articles')->where('category_id', $article[0]->category_id)->where('id', '!=', $id)->get();

        return view('articleDetail',[
            'article' => $article,
            'articles' => $articles
            ]);

    }
}
