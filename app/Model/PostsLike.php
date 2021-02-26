<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class PostsLike extends Model
{
    protected $fillable = [
        'post_id', 'user_id',
    ];

    public function post()
    {
        return $this->belongsTo('App\Model\Post');
    }
}
