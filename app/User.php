<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Permission\Traits\HasRoles;
use Spatie\Permission\Models\Role;

class User extends Authenticatable
{
    use HasRoles;
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'username', 'birthdate', 'profile_pic_path', 'description', 'followers', 'following', 'no_of_blogs'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function post()
    {
        return $this->hasMany('App\Model\Post');
    }

    public function friendreq()
    {
        return $this->hasMany('App\Model\FriendRequest');
    }

    public function friend()
    {
        return $this->hasMany('App\Model\FriendList');
    }

    public function postcomment()
    {
        return $this->hasMany('App\Model\PostsComment');
    }

}
