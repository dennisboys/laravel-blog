<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // specify which model attributes you want to make mass assignable
    protected $fillable = [
        'title',
        'slug',
        'category_id'
    ];

    // set up the relationship with Category model
    public function category() {
        return $this->belongsTo('App\Category');
    }

    // set up the relationship with Tag model
    public function tags() {
        return $this->belongsToMany('App\Tag');
    }

    // set up the relationship with Comment model
    public function comments() {
        return $this->hasMany('App\Comment');
    }
}
