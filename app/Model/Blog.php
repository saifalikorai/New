<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    public function like()
    {
        return $this->hasMany('App\Model\BlogLike','blog_id','id');
    }

    public function comment()
    {
        return $this->hasMany('App\Model\BlogComment','blog_id','id');
    }
     public function user()
    {
        return $this->hasOne('App\User','id','user_id');
    }
}
