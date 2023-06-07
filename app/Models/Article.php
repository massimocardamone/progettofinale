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

public function user(){
    return $this->belongsTo(User::class); 
}
public function genre(){
    return $this->belongsTo(Genre::class); 
}

}
