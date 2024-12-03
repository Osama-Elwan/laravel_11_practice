<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    // protected $table = "blogs";//this just for i wanna use any model name like (myBlog not Blog)

    function scopeActive($query) {//reusable query (public function)
        return $query->where('status',1);
    }
}
