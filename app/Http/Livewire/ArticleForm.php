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

    protected $rules = [
        'name'=> 'required',
        'price'=> 'required',
        'description'=> 'required',
        'genre_id'=>'required',

    ];

    protected $messages = [
        '*.required' => 'Il campo è obbligatorio.',


    ];

    public function store()
    {
        $this->validate();

        $article = Article::create([
            'name'=>$this->name,
            'price'=>$this->price,
            'description'=>$this->description,
            'genre_id'=>$this->genre_id,
            'user_id'=>Auth::id()
        ]);
        $this->reset();
        redirect(route('create'))->with('message','prodotto creato');
    }
    
       
    public function render()
    {
        return view('livewire.article-form');
    }
}
