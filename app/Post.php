<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//use App\Comment;
class Post extends Model
{
    protected $fillable = ['title','body'];

    public function comments()
    {
    	return $this->hasMany('\App\Comment');
    }

    public function store($body)
    {
    	Comment::create([
          
          'comment' => $body,
          'post_id' => $this->id

    	]);
    }
}
