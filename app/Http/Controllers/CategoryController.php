<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Article;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function categoryPage($name)
    {
        $category = Category::where('name',$name)->first();

        //$articles = $category->articles();
        
        $articles =DB::table('articles')->where('category_id', $category->id)->get();

        return view('categoryArticles',['category' => $category ,'articles' => $articles]);
    }
}
