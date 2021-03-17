<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    public function like()
    {
        return $this->hasMany('App\Model\BlogLike','blog_id','id');
    }
}
