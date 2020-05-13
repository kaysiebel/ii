<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = \App\Article::all();

        return view('articles.index', compact('articles'));
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function stock()
    {
        $articles = \App\Article::all();

        return view('stock', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('articles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Article $article)
    {
        $data = $this->validateData();
        if ($request->has('image')) {
            $path = $request->file('image')->store('/articles/images', 'public');
            $data['image'] = $path;
        }
        $article->create($data);

        return view('/articles');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        //
    }

    private function validateData()
    {
        return request()->validate([
            'name' => 'required|min:3',
            'piece_start_stock' => 'required|numeric|between:0,9999999.99',
            'piece_min_stock' => 'numeric|between:0,99999.99',
            'piece_max_stock' => 'numeric|between:0,99999.99',
            'piece_order_stock' => 'numeric|between:0,99999.99',
            'piece_weight' => 'numeric|between:0,99999.99',
            'unit_start_stock' => 'numeric|between:0,9999999.99',
            'unit_min_stock' => 'numeric|between:0,99999.99',
            'unit_max_stock' => 'numeric|between:0,99999.99',
            'unit_order_stock' => 'numeric|between:0,99999.99',
            'unit_weight' => 'numeric|between:0,99999.99',
            'unit_size' => 'numeric|between:0,9999.99',
            'location' => 'min:3',
            'location_maxweight' => 'numeric|between:0,99999.99',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);
    }
}
