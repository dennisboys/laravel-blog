<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    // specify which model attributes you want to make mass assignable
    protected $fillable = [
        'name'
    ];

    // set up the relationship with Post model
    public function posts() {
        return $this->belongsToMany('App\Post');
    }
}
