@extends('layouts.app')

@section('content')
	<div class="panel panel-primary  side-bar">
	 	<div class="panel-heading">
	    	<h3 class="panel-title">Friends <span class="badge">{{count($users)-1}}</span>
	    	</h3>
	    </div>
	  	<div class="panel-body">
			<div class="list-group">
				@foreach($users as $user) 
				@if($user->id != Auth::user()->id)
				<a href="/profile/{{$user->id}}" class="list-group-item "> {{$user->name}}
				</a>
				@endif
				@endforeach
			</div>
		</div>
	</div>

	<div class="row" style="width:99.9%">
	    <div class="col-md-6 col-md-offset-3 ">
	    	@if($requiredUser->id == Auth::user()->id)
		        <div class="well bs-component new-post">
		            <form class="form-horizontal" method="POST" action="/post">
		            {{ csrf_field() }}
		           	 <fieldset>
		           	 <legend ><div id="new_post"><u>New Post</u></div> </legend>
					 	<div class="form-group" id="new_post_panel">
						   <div class="col-md-12">
		        			<input class="form-control input-lg" type="text" 
		        			id="inputLarge" name="body">
		      				<br>
		      				<button type="submit" class="btn btn-sm btn-primary pull-right">POST</button>
					     </div>
		      			</div>	
					 </fieldset>
					</form>
				</div>
			@else
				<ul class="nav nav-pills">
					<li class="active lead text-capitalize">
				 		<h1>{{$requiredUser->name}}</h1>
				  	</li>
				</ul>
			@endif
	        <hr>
	        <label class="default"><h3> ALL POSTS</h3></label>
	    	@if(isset($posts))
		        @foreach($posts as $post)
		        	<div class="panel panel-primary">
					  	<div class="panel-heading"></div>
					  	<div class="panel-body">
					    	{{$post->body}}
					  	</div>
					  	<hr>
						<div class="panel panel-default">
					  		<div class="panel-heading">
							  	<a  href="/like/{{$post->id}}" class="like_a">
							  		<i class="fa fa-thumbs-o-up like-btn"></i>
							  		<span class="likes">
							 			{{count($post->likes)}}Like
							  		</span>
							  	</a>
							  	<span class="comment">
								  	<i class="fa fa-comments ">
								  		{{count($post->comments)}} Comments
								  	</i>
							  	</span>
							  	<i class="fa fa-share-square">&nbsp Share</i>
						  	</div>
							@foreach($post->comments as $comment)
							  	<div class="panel-body comments">
									<div class="row">
										<div class="col-md-2">
											<label class="default">
												<h5>{{$comment->user->name}}</h5>
											</label>
									 	</div>
									 	<div class="col-md-10">
									 		<input class="form-control input-sm " 
									 		type="text" value="{{ $comment->body}} " readonly/>
								 			&nbsp&nbsp
								 			<span class="c-likes">
								 			<small>
							 					{{count($comment->likes)}}&nbspLike
							 				</small>
									  		</span>
									  		&nbsp&nbsp&nbsp&nbsp&nbsp
									  		<span class="reply">
								 			<small>
							 					Reply
							 				</small>
									  		</span>
									  		&nbsp&nbsp&nbsp&nbsp&nbsp
									  		<span class="viewReplies">
								 			<small>
							 				{{count($comment->comments)}}&nbsp View Replies
							 				</small>
									  		</span>				 			
									 		<span class=" enter c-m pull-right">
									 			<a href="/likeC/{{$comment->id}}"
									 			class="c-m_a">
									 				<i class="fa fa-thumbs-o-up like-btn"></i>
										  		</a>
									 		</span>
									 		<div class="panel-body replyPanel">	
												<div class="row">
													<div class="col-md-2">
														<label class="default">
															<h5>{{Auth::user()->name}}</h5>
														</label>
												 	</div>
												 	<div class="col-md-10">
												 		<form method="POST" 
												 		action="/commentC/{{$comment->id}}">
												 		{{ csrf_field() }}
													 		<input class="form-control input-sm commentInput" type="textBox" 
													 		name="comment_body">
													 		<span class=" enter pull-right">
													 			<a href="" class="enter_a">
													 			<i class="fa fa-share-square-o enter_i"></i></a>
													 		</span>
												 		</form>
													</div>
												</div>
											</div>
											@foreach($comment->comments as $comment1)
											  	<div class="panel-body replys">
													<div class="row">
														<div class="col-md-2">
															<label class="default">
																<h5>{{$comment1->user->name}}</h5>
															</label>
													 	</div>
													 	<div class="col-md-10">
													 		<input class="form-control input-sm " 
													 		type="text" value="{{ $comment1->body}} " readonly/>
												 			&nbsp&nbsp
												 			<span class="c-likes">
												 			<small>
											 					{{count($comment1->likes)}}&nbspLike
											 				</small>
													  		</span>
													 		<span class=" enter c-m pull-right">
													 			<a href="/likeC/{{$comment1->id}}"
													 			class="c-m_a">
													 				<i class="fa fa-thumbs-o-up like-btn"></i>
														  		</a>
													 		</span>
														</div>
													</div>
												</div>
											@endforeach
										</div>
									</div>
								</div>
							@endforeach
							<div class="panel-body">
								<div class="row">
									<div class="col-md-2">
										<label class="default">
											<h5>{{Auth::user()->name}}</h5>
										</label>
								 	</div>
								 	<div class="col-md-10">
								 		<form method="POST" action="/comment/{{$post->id}}">
								 		{{ csrf_field() }}
									 		<input class="form-control input-sm commentInput" type="textBox" 
									 		name="comment_body">
									 		<span class=" enter pull-right">
									 			<a href="" class="enter_a">
									 			<i class="fa fa-share-square-o enter_i"></i></a>
									 		</span>
								 		</form>
									</div>
								</div>
							</div>
						</div>
						@if($posts[0]->user_id == Auth::user()->id)
							<a href="/delete/{{$post->id}}"class="btn btn-link ">Delete</a>
						@endif 
					</div>
					<hr>
				@endforeach
			@endif
        </div>
    </div>
<br><br><br><br>
@endsection
