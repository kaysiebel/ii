<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class SearchController extends Controller
{
    public function index()
    {
        $query = request()->input('q');
        $articles = Article::where('name', 'like', "%$query%")->get();

        return view('searchresult', compact('articles', 'query'));
    }
}
