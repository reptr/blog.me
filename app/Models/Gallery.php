<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;

    // polymorphic one to many gallery dengan image
    public function images()
    {
       return $this->morphMany('App\Models\Image', 'imageable');
    }

    // polymorphic one to many gallery dengan tag
    public function tags()
    {
       return $this->morphToMany('App\Models\Tag', 'taggable');
    }
}
