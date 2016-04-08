<?php

namespace App\Http\Controllers;

use Auth;
use App\User;
use App\Post;
use Illuminate\Http\Request;

use App\Http\Requests;

class PostsController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }
	public function store( Request $request )
    {
        $this->validate($request,[
            'body'=>'required'
        ]);
     	$user=Auth::user();
    	$user->addPost($request);
    	return back();
    }
    public function delete(Post $post)
    {
        $post->delete();
        return back();
    }
}
