<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Genre;
use GdFont;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth')->except('index','show','show_category');
    }
    /**
     * vista prodotti
     */
    public function index()
    {
        $articles=Article::paginate(4);
        
        return view('article.index', compact('articles'));
    }

    /**
     * vista form
     */
    public function create()
    {
       
        return view('article.create');
    }
    

    /**
     *dettagli
     */
    public function show(Article $article)
    {
        return view ('article.detail',compact('article'));
    }

    public function show_category(Genre $genre){
        return view('article.indexGenre', compact('genre'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $article)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Article $article)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        //
    }
}
