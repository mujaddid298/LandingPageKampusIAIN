<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengumuman;

class PengumumanController extends Controller
{
    public function index(){
        $announcements = Pengumuman::latest()
                ->take(6)
                ->get();
        return view('pages.pengumuman',compact('announcements'));

    }
}
