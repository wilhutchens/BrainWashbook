<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    public function comments() 
    {
        return $this->hasMany('App\Models\Comment');
    }

    public function user() 
    {
        return $this->belongsTo('App\Models\User');
    }

    public function commentor()
    {
        return $this->hasOneThrough(User::class, Comment::class, 'user_id', 'comment_id');
    }
}
