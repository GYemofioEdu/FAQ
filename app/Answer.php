<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    // Every Answer belongs to a user
    public function user(){
        return $this->belongsTo('App\User');
    }

    // Every Answer belongs to a question
    public function question(){
        return $this->belongsTo('App\Question');
    }
}
