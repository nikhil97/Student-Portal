<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    public function user(){
        return $this->belongsToMany(User::class,'activity_user','activity_id');
    }
}
