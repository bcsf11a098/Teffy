<?php

namespace App\Http\Controllers;
use Auth;
use App\Post;
use App\User;
use App\Comment;
use App\Http\Requests;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::with('user')->orderBy('id','DESC')->get();
        $users = User::all();
        return view('Home.home',compact('posts','users'));
    }
    public function profile($id)
    {
        $users = User::all();
        $posts=  Post::where('user_id', $id)
        ->orderBy('id','DESC')->get();
        $requiredUser = User::find($id);
        return view('Home.profile',compact('users','posts','requiredUser'));
    }

    public function profileByName($name)
    {
        $users = User::all();
        $requiredUser = User::where('name',$name)->get();
        $requiredUser=$requiredUser[0];
        $posts=  Post::where('user_id',$requiredUser->id)
        ->orderBy('id','DESC')->get();
        return view('Home.profile',compact('users','posts','requiredUser'));
    }

    public function updateAccount(Request $req)
    {
        $user=Auth::user();
        $user->name=$req->name;
        $user->email=$req->email;
        $user->save();
        return back();
    }
    public function updatePwd(Request $req)
    {
        $user=Auth::user();
        $this->validate($req,[
            'old_password' => 'required|same:users,password,id,$user->id',
            'confirm_password' => 'required|same:new_password',
             ]);
        $user->password = bcrypt($req->new_password);
        $user->save();
        return back();
    }
    public function showUpdatePage()
    {
        return view('Home.changeAccount');
    }
    public function showUpdatePwdPage()
    {
        return view('Home.changePassword');
    }
}
