<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User;
use App\Models\Genre;

class Article extends Model
{
    use HasFactory;
protected $fillable = [
    'name','price','description','img','user_id','genre_id'
];

public function users(){
    return $this->belongsTo(User::class); 
}
public function genres(){
    return $this->belongsTo(Genre::class); 
}

}
