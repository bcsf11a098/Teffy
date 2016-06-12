<?php

namespace App\Http\Controllers;

use Auth;
use App\User;
use App\Post;
use Illuminate\Http\Request;
use Response;
use Validator;
use App\Http\Requests;

class PostsController extends Controller
{
     public function __construct()
    {
        // $this->middleware('auth');
    }
	public function store( Request $request )
    {
       $validator=Validator::make($request->all(),[
            'discription'=>'required',
            'what'=>'required',
            'why'=>'required',
            'price'=>'required',
            'category'=>'required',
            'country'=>'required',

        ]);

       if($validator->fails()) {

           return Response::json(array(
           'success' => false,
           'errors' => $validator->getMessageBag()->toArray()),400);
        }

        if($request->ajax()) {
            
            $user=Auth::user();
            $user->addPost($request);
            return Response:: json(array('success' => true));
        }
        else {
            dd("not ajax");
        }
            
    }

    public function view()
    {
        $post = Post::find(1);
        
        return view('view_listing',compact('post'));
    }

    public function delete(Post $post)
    {
        $post->delete();
        return back();
    }
}
