<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['ImagePath', 'title', 'description', 'price'];

        public function comments()
    {
    	return $this->hasMany('App\Comment');
    }
}
