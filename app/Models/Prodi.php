<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Prodi extends Model
{
    protected $table = 'prodis';
    protected $fillable = [
        'name',
        'file_pdf'
    ];

 public function peprodis()
    {
        return $this->belongsToMany(
            Peprodi::class,
            'peprodi_prodi',
            'prodi_id',
            'peprodi_id'
        );
    }
}
