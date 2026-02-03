<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengumuman;

class PengumumanController extends Controller
{
    public function index()
    {
        return view('pages.pengumuman.index');
    }
    public function show($id)
    {
        $pengumuman = Pengumuman::findOrFail($id);
        return view('pages.pengumuman.show',compact('pengumuman'));
    }
}
