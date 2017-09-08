<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    protected $fillable = ['title', 'content'];
    
    public function comments()
    {
        return $this->hasMany('App\Comment');
    }
    public function tags()
    {
        return $this->belongsToMany('App\Tag', 'posts_tags');
    }
    public function  getTagsListAttribute()
    {
        $tagsName = $this->tags()->lists('name')->all();
        //dd($tagsName);
        return implode(',',$tagsName);
    }
}
