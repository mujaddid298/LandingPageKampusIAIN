<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengumuman extends Model
{
     use HasFactory;

    // Nama tabel (WAJIB karena tidak plural normal)
    protected $table = 'pengumumen';

    // Kolom yang boleh diisi (mass assignment)
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
