<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subbreddit extends Model
{
    protected $fillable = [
        'name', 'description', 'user_id',
    ];
    //
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function posts()
    {
        return $this->hasMany('App\Post');
    }

    public function subscribedUsers()
    {
        return $this->belongsToMany('App\User');
    }
}
