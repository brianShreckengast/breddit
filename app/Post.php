<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'url', 'title', 'content'
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function subbreddit()
    {
        return $this->belongsTo('App\Subbreddit');
    }

    public function comments()
    {
        return $this->hasMany('App\Comment');
    }
}
