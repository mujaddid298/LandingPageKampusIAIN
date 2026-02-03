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

     public function peprodi()
    {
        return $this->belongsTo(Peprodi::class);
    }
}
