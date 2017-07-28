<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Carbon\Carbon;

class PostController extends Controller
{
    public function index()
    {
         $posts=Post::latest()->get();
    	 return view('posts.index',compact('posts'));
    }
    public function showPost(Post $post)
    {
        
    	return view('posts.show',compact('post'));
    }
     public function create()
    {
    	return view('posts.create');
    }
    public function store()
    {
    	$post=new Post;
    	$post->title=request('title');
    	$post->body=request('body');
    	$current=new Carbon();
    	$post->created_at=$current;
    	$post->updated_at=$current;
    	$post->save();
    	return redirect("/");
    }
}
