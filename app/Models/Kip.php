<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kip extends Model
{
    protected $table = 'kips';

    protected $fillable = [
        'title',
        'content',
        'file_pdf',
        'thumbnail',
    ];

    protected $casts = [
        'file_pdf' => 'array',
        'created_at' => 'datetime',
    ];
}
