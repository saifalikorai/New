<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use DB;
use Auth;
class Post extends Model
{
    protected $fillable = [
        'user_id', 'caption', 'privacy_status', 'isDeleted', 'isShared', 'no_of_shares', 'original_post_id', 'original_poster_id',
    ];

    public static function farhan (){
        $data = DB::table('users')->whereNotIn('id', function($q){
            $q->select('id')->where('id', Auth::id())->from('users');
        })->whereNotIn('id', function($q){
            $q->select('friend_id')->where('user_id', Auth::id())->from('friend_lists');
        })->get();
    return  $data;
    }

    

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function files()
    {
        return $this->hasMany('App\Model\PostsFile');
    }

    public function likes()
    {
        return $this->hasMany('App\Model\PostsLike');
    }

    public function comments()
    {
        return $this->hasMany('App\Model\PostsComment');
    }
}
