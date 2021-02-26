<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class FriendList extends Model
{
    protected $fillable = [
        'user_id', 'friend_id',
    ];

    public function suser()
    {
        return $this->belongsTo('App\User', 'friend_id');
    }
}
