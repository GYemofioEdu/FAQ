<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    /* Method to return user for a given profileTest
        also sets relationship from profileTest to user
    */
    public function user(){
        return $this->belongsTo('App\User');
    }
}
