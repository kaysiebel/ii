<?php

namespace App\Http\Controllers;

use App\Entry;
use App\Article;
use Illuminate\Http\Request;

class EntryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $entries = Entry::all();

        return view('entries.index', compact('entries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        $entry = Entry::create($data);
        $article->entries()->save($entry);

        return redirect()->route('index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Entry  $entry
     * @return \Illuminate\Http\Response
     */
    public function show(Entry $entry)
    {
        // return view('entries.show', compact('entries'));
        $entry = Entry::find($entry);
        return view('entries.show', compact('entry'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Entry  $entry
     * @return \Illuminate\Http\Response
     */
    public function edit(Entry $entry)
    {
        return view('entries.edit', compact('entry'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Entry  $entry
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Entry $entry)
    {
        $data = $this->validateData();
        $article_id = $request->input('article_id');
        $article = Article::find($article_id);
        $entry->update($data);
        $article->entries()->update($entry);

        return redirect()->route('index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Entry  $entry
     * @return \Illuminate\Http\Response
     */
    public function destroy(Entry $entry)
    {
        $entry->delete();

        return redirect('/entries');
    }

    private function validateData()
    {
        return request()->validate([
            'amount_entry' => 'numeric|between:0,99999.99',
            'article_id' => 'numeric'
        ]);
    }
}
