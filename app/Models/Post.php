<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // one to many user punya banyak post
    public function user()
    {
       return $this->belongsTo('App\Models\User');
    }

    // many-to-many dgn category
    public function categories()
    {
       return $this->belongsToMany('App\Models\Category');
    }

    // polymorphic one to many post dengan image
    public function images()
    {
       return $this->morphMany('App\Models\Image', 'imageable');
    }

    // polymorphic one to many post dengan tag
    public function tags()
    {
       return $this->morphToMany('App\Models\Tag', 'taggable');
    }
}
