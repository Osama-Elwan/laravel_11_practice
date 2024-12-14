<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    protected $fillable = [
        'name',
        'county_id'
    ];

    function cities() {
        return $this->hasMany(City::class);
    }
}
