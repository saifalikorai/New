<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name'];
	
    protected $dates = ['created_at', 'updated_at'];

}
