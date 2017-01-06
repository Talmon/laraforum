<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable = [
    'title','category'
];
    public function groups(){
        return $this->hasMany('App\Group');
    }
    public function posts(){
        return $this->hasMany('App\Post');
    }
    public function users(){
        return $this->belongTo('App\User');
    }

}
