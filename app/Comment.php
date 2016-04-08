<?php

namespace App;

use Auth;
use App\User;
use App\Post;
use App\Like;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
     protected $fillable = [
        'body', 
    ];


    public function post()
	{
		return $this->belongsTo(Post::class);
	}

	public function user()
	{
		return $this->belongsTo(User::class);
	}

	public function likes()
    {
        return $this->morphMany(Like::class, 'likeable');
    }
	
	public function addLike()
    {
        $like= new Like;
        $like->user_id=Auth::user()->id;
        return $this->likes()->save($like);
    }
}
