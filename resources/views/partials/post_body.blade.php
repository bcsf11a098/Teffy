
<div class="row " id="{{$post->id}}">
    <div class="col-md-12 a" >
    
            <div class="col-md-2 b"> 
                <img src="/images/d-profile.gif" class=" c img-thumbnail">
            </div>
            <div class="col-md-10 d panel " >
                <div class="i">
                    <a href="#"> {{$post->user->fname}} </a><span> posted listing in </span><a href="">{{$post->category}}</a> 
                </div>
                <br>
                <div class="row e"  style="padding: 0px;">
                    <div class="col-md-4">
                        <img  id="image" src="/images/1234.jpg" class="j img-thumbnail" >
                        <br>

                        <button class=" btn btn-link btn-sm likes" data-id="{{$post->id}}"><small><span id="id={{$post->id}}l" >{{count($post->likes)}}</span>&nbsp;like</small></button> &nbsp;
                        <button class=" btn btn-link btn-sm comment" ><small><span>{{count($post->comments)}}</span> &nbsp;Comment</small></button> &nbsp;
                        
                    </div>

                    <div class="col-md-8 " style="height:150px;">
                        <div class="row">

                            <div class="col-md-8">
                                <div class="form-group">
                                    <a href="#">{{$post->what}}</a>   
                                </div>
                            </div>
                            <div class="col-md-4 pull-right ">
                                <div class="form-group">
                                    @if(!empty($post->price))
                                    <label for="pwd">$ {{$post->price}}</label>
                                    @endif   
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <small>
                                    <b><label >Description:</label></b>
                                    <span> {{$post->discription}}</span>
                                </small>
                                 
                            </div>
                        </div>
                    </div>
                </div> 

                @foreach($post->comments as $comment)
                            <div class="panel-body comments">
                                <div class="row">
                                    <div class="col-md-2">
                                        <label class="default">
                                            <h5>{{$comment->user->fname}}</h5>
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
                                        
                                    </div>
                                </div>
                            </div>
                        @endforeach



                <hr style="margin-top:1px; margin-bottom:2px">
                 <div class="panel-body comments1">
                    <div class="row">
                    <div class="col-md-2" style="padding-top:5px">
                       <b> {{Auth::user()->fname}}</b>
                     </div>
                        <div class="col-md-10">
                        
                
                        <form method="POST" data-id="{{$post->id}}" class='comment_form' action="/comment/{{$post->id}}">
                        {{ csrf_field() }}
                        <meta class="com" content="{{csrf_token()}}">
                            
                            <input class="form-control input-sm " type="text" 
                            name="comment_body" placeholder="Write Comment">
                            
                        </form>
                        </div>
                    </div>
                </div> 
                <br>  
            </div>
    </div>
</div>
