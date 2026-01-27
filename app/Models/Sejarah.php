<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sejarah extends Model
{

    protected $table = 'sejarahs';

        protected $fillable = [
        'judul',
        'konten',
    ];
}
