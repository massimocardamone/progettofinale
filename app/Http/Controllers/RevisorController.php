<?php

namespace App\Http\Controllers;

use App\Mail\BecomeRevisorMail;
use App\Models\Article;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use SebastianBergmann\Type\NullType;

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
        return redirect()->back()->with('message', "Articolo accettato");

    }
// pusanti di rifiuto articolo
    public function rifuteArticle(Article $article){
        $article->setAccepted(false);
        return redirect()->back()->with('message', "Articolo non accettato");
    }
//pulsante di ultima modifica
public function old(Article $article){
    $article = Article::orderBy('created_at', 'desc')->where('is_accepted' ,!null,)->first();
        $article->setAccepted(null);
        return redirect()->back()->with('message', "Articolo annullato");
}

//Richiesta per diventare Revisor

public function becomeRevisor(){

    Mail::to('colicaStore@noReply.com')->send(new BecomeRevisorMail(Auth::user()));
    return redirect()->back()->with('message','Richiesta per diventare revisore inoltrata');
}
public function makeRevisor(User $user){
    Artisan::call('app:make-user-revisor', ['email' =>$user->email]);
    return redirect('/')->with('message','Congratulazioni '. $user->name . ', sei diventato revisore');
}
}
