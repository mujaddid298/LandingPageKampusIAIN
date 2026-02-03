<?php

namespace App\Http\Controllers;

use App\Models\Prodi;
use App\Models\Akreditasi;
use Illuminate\Http\Request;

class AkreditasiController extends Controller
{
    public function index()
    {
        $prodi = Prodi::latest()
                    ->get();

        return view('pages.akreditasi', compact('prodi'));
    }
}
