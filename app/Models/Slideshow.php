<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Slideshow extends Model
{
    public static $tableName = 'slideshows';

    protected $fillable = [
        'title',
        'image',
    ];
}
