<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function home(Request $request)
    {
        $sort = $request->get("sort", "id");
        $dir = $request->get("dir", "desc");

        if (!in_array($sort, array("title", "id", "views"))) {
            $sort = "id";
        }

        if ($sort == "views") {
            $all_articles = Article::all()->sort(function ($a, $b) {
                return $b->view_count - $a->view_count;
            })->toQuery()->paginate(2);
        } else {
            $all_articles = Article::orderBy($sort, $dir)->paginate(2);
        }

        $top_articles = Article::get()->sort(function ($a, $b) {
            return $b->view_count - $a->view_count;
        });

        return view('home', ['articles' => $all_articles, 'top_articles' => $top_articles]);
    }


    public function articleDetail($id)
    {
        //details of article
        $article = DB::table('articles')->where('id', $id)->get();
        //suggestion
        $articles = DB::table('articles')->where('category_id', $article[0]->category_id)->where('id', '!=', $id)->get();

        return view('articleDetail', [
            'article' => $article,
            'articles' => $articles
        ]);
    }
}
