<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;
use App\Comment;

class CommentsController extends Controller
{
    public function addcomment(Post $post)
    {
    	/*Comment::create([
            
            'comment' => request('body'),
            'post_id' => $post

    	]);*/
        
        $this->validate(request(),['body' => 'required|min:2']);
        
        $post->store(request('body'));

    	return back();
    }
}
