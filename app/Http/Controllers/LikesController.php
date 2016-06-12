<?php

namespace App\Http\Controllers;
use DB;
use Auth;
use Illuminate\Http\Request;
use App\Post;
use App\Comment;
use App\Http\Requests;
use Response;


class LikesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function savePostLike( Post $post)
    {

        $userId = Auth::user()->id;
        $check  = DB::table('likes')->select('id')
                ->where('user_id',$userId)
                ->where('likeable_id',$post->id)
                ->where('likeable_type',"App\Post")->get();
        if(empty($check))
        {
            $post->addLike();
            return Response:: view("partials.post_body",compact('post'));
        }
        else
        {
            return 0;
            
        }
        
    }
    public function saveCommentLike(Comment $comment)
    {
        $userId = Auth::user()->id;
        $check=DB::table('likes')->select('id')
                ->where('user_id',$userId)
                ->where('likeable_id',$comment->id)
                ->where('likeable_type',"App\Commentable")->get();
        if(empty($check))
        {
            $comment->addLike();
            return back();
        }
        else
        {
            return back();
        }
    }
}
