@extends('layouts.master')
@section('content')
<div class="col-sm-9 blog-main"  style="background-color:lavender;"> 	
<h1> 
{{$post->title}} 
</h1><br>

{{$post->body}}<br/>

	
	<hr>
<div class="comments">	
<ul class="list-group">
@foreach($post->comment as $comment)
	<li class="list-group-item">	
	<strong> {{$comment->created_at->diffForHumans()}} &nbsp;</strong>
	<article> {{$comment->body}}</article>

	</li>
@endforeach
</ul>
	</div> 
<hr>
	<div class="card">
		<div class="card-block">
			<form method="POST" action="/post/{{$post->id}}/comments">
				<div class="form-group">
					<textarea name="body" placeholder="Leave Your comment here" class="form-control" style="color:black;"> </textarea>
				</div>
				<button type="submit" class="btn btn-primary">Add Comment</button>	
			</form>
		</div>	
	</div>
	</div>
@endsection