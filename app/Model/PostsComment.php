<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class PostsComment extends Model
{
    protected $fillable = [
        'post_id', 'user_id', 'comment',
    ];

    public function post()
    {
        return $this->belongsTo('App\Model\Post');
    }
    
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
