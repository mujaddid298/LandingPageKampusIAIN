<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kalender extends Model
{
        protected $table = 'kalenders';

    // Kolom yang boleh diisi (mass assignment)
    protected $fillable = [
        'title',
        'file',
    ];
}
