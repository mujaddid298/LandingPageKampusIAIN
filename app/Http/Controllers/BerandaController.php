<?php

namespace App\Http\Controllers;

use App\Models\Kalender;
use App\Models\Pengumuman;
use App\Models\Peprodi;
use Illuminate\Http\Request;

class BerandaController extends Controller
{
    public function index(){

//    dd(\App\Models\Pengumuman::get());

        $announcements = Pengumuman::latest()
                ->take(6)
                ->get();
        $peprodi = Peprodi::latest()
                ->get();
        $kalender = Kalender::first();
        return view('beranda',compact('announcements', 'peprodi', 'kalender'));

    }
}
