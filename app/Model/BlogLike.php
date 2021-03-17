<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Bloglike extends Model
{
	protected $fillable = [
        'user_id', 'blog_id','is_liked'
    ];
    protected $table="blogs_likes";


}
