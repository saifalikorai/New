<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class FriendRequest extends Model
{
    protected $fillable = [
        'user1_id', 'user2_id', 'response',
    ];

    public function suser()
    {
        return $this->belongsTo('App\User', 'user1_id');
    }
}
