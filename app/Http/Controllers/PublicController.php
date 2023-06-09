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
       
        $articles=Article::take(6)->orderBy('created_at','desc')->get();
        
        $artNum= count(Article::all());
        $userNum= count(User::all());

        return view('welcome',compact('articles','artNum','userNum'));
    }
}
