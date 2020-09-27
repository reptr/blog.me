<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    protected $fillable = [
        'original',
        'large',
        'medium',
        'small',
    ];

    // Polymorphic one to many, post dengan image
    public function imageable()
    {
       return $this->morphTo();
    }
}
