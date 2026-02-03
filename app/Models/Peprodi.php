<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Peprodi extends Model
{
    protected $table = 'peprodis';
    protected $fillable = [
        'name',
        'prodi',
        'no_wa',
        'image',
    ];

     public function prodi()
    {
        return $this->belongsTo(Prodi::class);
    }


}
