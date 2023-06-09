<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class RevisorController extends Controller
{
    //rotta per portare l'utente alla pagina revisore 
    public function index(){
        $article_to_check = Article::where('is_accepted', null)->first();
        return view('revisor.index', compact('article_to_check'));
    }
// pusanti di accettazione articolo
    public function acceptArticle(Article $article){
        $article->setAccepted(true);
        return redirect()->back()->with('message', "Complimenti, hai accettato l'annuncio");

    }
// pusanti di rifiuto articolo
    public function rifuteArticle(Article $article){
        $article->setAccepted(false);
        return redirect()->back()->with('message', "Articolo non accettato");

    }
}
