<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //
    protected $fillable = ['comment', 'name', 'email', 'post_id'];
    
    public function Post()
    {
        return $this->belongsTo('App\Post');
    }
    
}
