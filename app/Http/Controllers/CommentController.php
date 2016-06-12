<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Http\Requests;
use App\Comment;
use Auth;
use Response;
use Validator;
class CommentController extends Controller
{
 	public function saveComment( Request $request,Post $post,$id)
    {

        dd($request);
        $this->validate($request,[
            'comment_body'=>'required'
        ]);
        $post->addComment($request,$id);
    	return back();
    }
    public function savePostComment(Request $request,Post $post)
    {
        $validator=Validator::make($request->all(),[
            'comment_body'=>'required'
        ]);
        if($validator->fails()) {
            return Response::json(array(
           'success' => false,
           'errors' => $validator->getMessageBag()->toArray()),400);
        }
        if($request->ajax()) {
            
            $userId = Auth::user()->id;
            $post->addComment($request,$userId);
            return Response:: view("partials.post_body",compact('post'));
        }
        else {
            dd("not ajax");
        }
        
        
    }
    public function saveCommentComment(Request $request , Comment $comment)
    {
        $userId = Auth::user()->id;
        $comment->addComment($request,$userId);
        return back();
    }
}
