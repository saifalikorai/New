<?php

namespace App;


use Illuminate\Foundation\Auth\User as Authenticatable;

use Spatie\Permission\Traits\HasRoles;
use Spatie\Permission\Models\Role;
class User extends Authenticatable
{
    use HasRoles;
    use Notifiable;

     @var array
     */
    protected $fillable = [
          'username', 'password'
    ];
     @var array
     
    protected $hidden = [
        'password', 'remember_token',
    ];


 * @var array
     
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