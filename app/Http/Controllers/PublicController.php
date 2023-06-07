<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Genre;
class PublicController extends Controller
{
    public function homepage() {
       
        $articles=Article::take(6)->orderBy('created_at','desc')->get();
        
        return view('welcome',compact('articles'));
    }
}
