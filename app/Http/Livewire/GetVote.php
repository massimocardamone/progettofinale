<?php

namespace App\Http\Livewire;

use App\Models\Article;
use App\Models\ArticleScore;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;

class GetVote extends Component
{   
    protected $article;
    public $articleScore;
    public $article_id;
    public $vote;
    private $user_id;

    use WithFileUploads;
    protected $rules = [
        'vote' => 'required'
    ];
    protected $messages = [
        '*.required' => 'Il campo è obbligatorio.'
    ];
    public function store()
    {

        $this->validate();
        $articleScore = ArticleScore::create(
            [
                'vote' => $this->vote,
                'article_id' => $this->article_id,
                'user_id' => Auth::id()
            ]
        );
        $articleScore->user()->associate(Auth::user());
        $this->articleScore = $articleScore;
        $this->articleScore->save();

        $this->article= Article::where('id',$this->article_id)->first();
        $article = $this->article;
        
        redirect(route('show',compact('article')));
    }

    public function render()
    {
        return view('livewire.get-vote');
    }
}
