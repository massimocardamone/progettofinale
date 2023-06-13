<?php

namespace App\Http\Livewire;

use App\Models\Genre;
use App\Models\Article;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Livewire\WithFileUploads;

class ArticleForm extends Component
{
    public $article;
    public $name;
    public $price;
    public $description;
    public $genre_id;
    public $images=[];
    public $temporany_images;

    use WithFileUploads;

    protected $rules = [
        'name'=> 'required',
        'price'=> 'min:0|required',
        'description'=> 'required',
        'images.*'=> 'image|max:1024',
        'temporany_images.*'=> 'image|max:1024',
        'genre_id'=>'required',

    ];

    protected $messages = [
        '*.required' => 'Il campo è obbligatorio.',
        'price.min'=>'Il prezzo non può essere negativo',
        'images.image' => 'deve  contenere un immagine',
        'temporany_images.*.image' => 'il file deve essere un immagine',
        'images.max' => 'il file deve essere di massimo 1MB',
        'temporany_image.*.max' => 'il file deve essere di massimo 1MB',
    ];

    public function updatedTemporanyImages(){
        if ($this->validate ([
            'temporany_images.*' => 'image|max:1024',
        ])){
            foreach($this->temporany_images as $image){
                $this->images[]= $image;
            }
        }
    }

    public function removeImage($key){
        if (in_array($key, array_keys($this->images))) {
            unset($this->images[$key]);
        }
    }
    public function store()
    {
        $this->validate();
        $this->article= Genre::find($this->genre)->articles()->create($this->validate());
        if(count($this->images)){
            foreach ($this->images as $image) {
                $this->article->images()->create(['path'=>$image->store('images', 'public')]);
            }
        }
        // $article = Article::create([
        //     'name'=>$this->name,
        //     'price'=>$this->price,
        //     'description'=>$this->description,
        //     'genre_id'=>$this->genre_id,
        //     'user_id'=>Auth::id()
        // ]);
        redirect(route('create'))->with('message','prodotto creato');
        $this->reset();


    }
    
    public function render()
    {
        return view('livewire.article-form');
    }
}
