<?php

namespace App\Http\Livewire;

use App\Models\Genre;
use App\Models\Article;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class ArticleForm extends Component
{
    public $name;
    public $price;
    public $description;
    public $genre_id;

    public function store()
    {
        $article = Article::create([
            'name'=>$this->name,
            'price'=>$this->price,
            'description'=>$this->description,
            'genre_id'=>$this->genre_id,
            'user_id'=>Auth::id()
        ]);
        session()->flash('message','Scarpa caricata correttamente');
        return redirect(route('home'))->with('message', 'Il tuo articolo è stato correttamente caricato');
    }

    public function render()
    {
        return view('livewire.article-form', ['genres'=> Genre::all()]);
    }
}