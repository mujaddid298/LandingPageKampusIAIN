<?php

namespace App\Http\Controllers;

use App\Models\Kip;
use Illuminate\Http\Request;

class KipController extends Controller
{
    public function index()
    {
        return view('pages.kip.index');
    }

    public function show($id)
    {
        $kip = Kip::findOrFail($id);
        return view('pages.kip.show', compact('kip'));
    }
}