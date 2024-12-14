<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'user_id',
        'name'
    ];

    function user() {
        return $this->belongsTo(User::class);
    }

    function tags() {
        return $this->belongsToMany(Tag::class);
        // return $this->belongsToMany(Tag::class,'post_tag','post_id','tag_id'); //if u dont user naming conv
    }
    //polymorphic
    function image() {
        return $this->morphOne(Image::class,'imageable');
    }
}
