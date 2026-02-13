<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Peprodi extends Model
{
    protected $table = 'peprodis';
    protected $fillable = [
        'name',
        'no_wa',
        'image',
    ];

 public function prodis()
    {
        return $this->belongsToMany(
            Prodi::class,
            'peprodi_prodi', // nama pivot table
            'peprodi_id',
            'prodi_id'
        );
    }
}
