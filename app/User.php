<?php

namespace App;

use App\Post;
use App\Comment;
use App\Like;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'lname', 'fname','country', 'city', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    public function posts()
    {
        return $this->hasMany(Post::class);
    }
    public function Comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function likes()
    {
        return $this->hasMany(Like::class);
    }
    
    public function addPost(Request $req)
    {
        $post= new Post;
        $post->discription = $req->discription;
        $post->why         = $req->why;
        $post->what        = $req->what;
        $post->price       = $req->price;
        $post->category    = $req->category;
        $post->country     = $req->country;
        $post->city        = $req->city;
        $post->type        = "listing";
        $this->posts()->save($post);
    }
}
