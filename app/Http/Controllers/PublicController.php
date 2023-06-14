<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Genre;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class PublicController extends Controller
{
    public function homepage() {
       
        $articles=Article::where('is_accepted',true)->take(6)->orderBy('created_at','desc')->get();
        
        $artNum= count(Article::where('is_accepted',true)->get());
        $userNum= count(User::all());

        return view('welcome',compact('articles','artNum','userNum'));
    }

    public function searchArticles(Request $request){

        $articles=Article::search($request->searched)->where('is_accepted',true)->paginate(9);
        return view('article.index',compact('articles'));
    }
    public function setLanguage($lang){
        session()->put('locale', $lang);
        return redirect()->back();
    }

    public function requestRevisor(){
        return view('revisor.request');
    }
}
