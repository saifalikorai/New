<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class PostsFile extends Model
{
    protected $fillable = [
        'file_id', 'post_id', 'file_path',
    ];

    public function post()
    {
        return $this->belongsTo('App\Model\Post');
    }

}
