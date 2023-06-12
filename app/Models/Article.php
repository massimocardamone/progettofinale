<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User;
use App\Models\Genre;
use Laravel\Scout\Searchable;

class Article extends Model
{
    use HasFactory, Searchable;
protected $fillable = [
    'name','price','description','img','user_id','genre_id'
];
    // return array;

public function toSearchableArray(){
    $genre=$this->genre;
    $array=[
        'id'=>$this->id,
        'name'=>$this->name,
        'description'=>$this->description,
        'genre'=>$this->genre
    ];
    return $array;
}

public function user(){
    return $this->belongsTo(User::class); 
}
public function genre(){
    return $this->belongsTo(Genre::class); 
}

public function setAccepted( $value){
    $this->is_accepted = $value;
    $this->save();
    return true;

}

public static function toBeRevisionedCount(){
return Article::where('is_accepted', null)->count();
}


}
