<?php

namespace App;
use App\Comment;
use App\Like;
use Auth;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Post extends Model
{
    protected $fillable = [
        'body','user_id',
    ];

    public function user()
	{
		return $this->belongsTo(User::class);
	}

    public function comments()
    {
        return $this->morphMany(Comment::class,'commentable');
    }

    public function likes()
    {
        return $this->morphMany(Like::class, 'likeable');
    }
    
    public function addComment(Request $request ,$id)
    {
        $comment= new Comment;
        $comment->body= $request->comment_body;
        $comment->user_id=$id;
        return $this->comments()->save($comment);
    }

    public function addLike()
    {
        $like= new Like;
        $like->user_id=Auth::user()->id;
        return $this->likes()->save($like);
    }
}
