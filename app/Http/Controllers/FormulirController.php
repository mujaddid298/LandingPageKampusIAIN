<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormulirController extends Controller
{
    public function aktifkuliah()
    {
        return view('pages.formulir.aktifkuliah');
    }

    public function penelitian()
    {
        return view('pages.formulir.penelitian');
    }

    public function ketlulus()
    {
        return view('pages.formulir.ketlulus');
    }
}