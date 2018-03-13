<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Yoeunes\Rateable\Traits\Rateable;

class Post extends Model
{
	use Rateable;

    protected $table = 'posts';
    public $primaryKey = 'id';
    public $timestamps = true;

    public function user(){
        return $this->belongsTo('App\Models\User');
    }

    public function comments() {
    	return $this->hasMany('App\Models\Comment');
    }
}
