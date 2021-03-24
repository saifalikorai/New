<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class BlogComment extends Model
{
	protected $fillable = [
        'user_id', 'blog_id','comment'
    ];
    protected $table="blogs_comments";

     public function user()
    {
        return $this->hasOne('App\User','id','user_id');
    }

}
