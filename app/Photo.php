<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $uploads = '/images/';

    protected $fillable = [
        'name'
    ];

    public function getNameAttribute($name){
        return $this->uploads . $name;
    }

}
