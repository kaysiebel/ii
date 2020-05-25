<?php

namespace App\Http\Controllers;

use App\Consumption;
use App\Article;

use Illuminate\Http\Request;

class ConsumptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $this->validateData();
        $article_id = $request->input('article_id');
        $article = Article::find($article_id);
        $consumption = Consumption::create($data);
        $article->consumptions()->save($consumption);

        return redirect()->route('index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Consumption  $consumption
     * @return \Illuminate\Http\Response
     */
    public function show(Consumption $consumption)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Consumption  $consumption
     * @return \Illuminate\Http\Response
     */
    public function edit(Consumption $consumption)
    {
        return view('consumptions.edit', compact('consumption'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Consumption  $consumption
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Consumption $consumption)
    {
        $data = $this->validateData();
        $article_id = $request->input('article_id');
        $article = Article::find($article_id);
        $consumption->update($data);
        $article->consumptions()->update($consumption);

        return redirect()->route('index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Consumption  $consumption
     * @return \Illuminate\Http\Response
     */
    public function destroy(Consumption $consumption)
    {
        $consumption->delete();

        return redirect()->route('index');
    }

    private function validateData()
    {
        return request()->validate([
            'amount_consumption' => 'numeric|between:0,99999.99',
            'article_id' => 'numeric'
        ]);
    }
}
