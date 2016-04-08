<?php

namespace App;
use App\User;
use Auth;
use App\Like;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;

class Commentable extends Model
{
	 protected $fillable = [
        'body', 
    ];
    public function commentable()
    {
        return $this->morphTo();
    }

    public function comments()
	{
		return $this->morphMany($this ,'commentable');
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

    public function addComment(Request $request ,$id)
    {
        $comment= new Commentable;
        $comment->body= $request->comment_body;
        $comment->user_id=$id;
        return $this->comments()->save($comment);
    }
}
