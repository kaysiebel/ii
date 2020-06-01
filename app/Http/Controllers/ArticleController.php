<?php

namespace App\Http\Controllers;

use App\Article;
use App\Entry;
use App\Consumption;
use Illuminate\Http\Request;
use App\Charts\Statistic;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::with('entries', 'consumptions')->get();

        return view('articles.index', compact('articles'));
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function stock(Article $article)
    {
        $articles = Article::orderBy('name')->get();

        return view('stock', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $article = new Article();
        return view('articles.create', compact('article'));
        // return route('create', compact('article'));
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

        return redirect()->route('articles.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */

    public function show(Article $article)
    {
        $articleEntries = $article->entries()
            ->orderBy('created_at')
            ->take(6)
            ->pluck('amount_entry', 'created_at');

        $articleConsumptions = $article->consumptions()
            ->orderBy('created_at')
            ->take(6)
            ->pluck('amount_consumption', 'created_at');

        $dateConsumptions = $articleConsumptions
            ->mapWithKeys(function ($item, $key) {
                return [
                    $item => Carbon::parse($key)->format('d.m.'),
                ];
            });

        $chart = new Statistic;
        $chart->labels($dateConsumptions->values());
        $chart->dataset('Eingänge', 'bar', $articleEntries->values())
            ->backgroundColor('rgba(150, 188, 58, 0.6')
            ->color('rgba(150, 188, 58, 1)');
        $chart->dataset('Verbräuche', 'bar', $articleConsumptions->values())
            ->backgroundColor('rgba(220, 0, 0, 0.6')
            ->color('rgba(220, 0, 0, 1)');

        return view(
            'articles.show',
            compact('article', 'articleEntries', 'articleConsumptions', 'chart')
        );
    }

    public function entries(Article $article)
    {
        // $article = Article::find($article);
        return view('articles.entries', compact('article'));
    }

    public function consumptions(Article $article)
    {
        // $article = Article::find($article);
        return view('articles.consumptions', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        $article = Article::find($article);
        return view('articles.edit', compact('article'));
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
        $data = $this->validateData();
        if ($request->has('image')) {
            $path = $request->file('image')->store('/articles/images', 'public');
            $data['image'] = $path;
        }
        $article->update($data);

        return redirect()->route('articles.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        $article->delete();

        return redirect()->route('articles.index');
    }

    private function validateData()
    {
        return request()->validate([
            'name' => 'required|min:3',
            'piece_start_stock' => 'required|numeric|between:0,9999999.999',
            'piece_min_stock' => 'nullable|numeric|between:0,9999999.999',
            'piece_max_stock' => 'nullable|numeric|between:0,9999999.999',
            'piece_order_stock' => 'nullable|numeric|between:0,9999999.999',
            'piece_weight' => 'nullable|numeric|between:0,9999999.999',
            'unit_start_stock' => 'nullable|numeric|between:0,9999999.999',
            'unit_min_stock' => 'nullable|numeric|between:0,99999.999',
            'unit_max_stock' => 'nullable|numeric|between:0,99999.999',
            'unit_order_stock' => 'nullable|numeric|between:0,99999.999',
            'unit_weight' => 'nullable|numeric|between:0,99999.999',
            'unit_size' => 'nullable|numeric|between:0,9999.999',
            'location' => 'nullable|min:3',
            'location_maxweight' => 'nullable|numeric|between:0,99999.999',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);
    }
}
