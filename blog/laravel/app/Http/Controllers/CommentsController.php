<?php

namespace App\Http\Controllers;
use App\Post;
use Illuminate\Http\Request;
use App\Comment;
class CommentsController extends Controller
{
    public function store(Post $post)
    {
    			$comment=new Comment;
    			$comment->body=request('body');
    			$comment->post_id=$post->id;
    			$comment->save();
    			return back();
    }
}
