<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Http\Requests;
use App\Commentable;
use Auth;
class CommentController extends Controller
{
 	public function saveComment( Request $request,Post $post,$id)
    {
        $this->validate($request,[
            'comment_body'=>'required'
        ]);
        $post->addComment($request,$id);
    	return back();
    }
    public function savePostComment(Request $request,Post $post)
    {
        $userId = Auth::user()->id;
        $post->addComment($request,$userId);
        return back();
    }
    public function saveCommentComment(Request $request , Commentable $comment)
    {
        $userId = Auth::user()->id;
        $comment->addComment($request,$userId);
        return back();
    }
}
