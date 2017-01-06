<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function groups(){
        return $this->belongsTo('App\Group');
    }
    public function questions(){
        return $this->belongsTo('App\Question');
    }
    public function users(){
        return $this->belongsTo('App\User');
    }
}
