<?php

namespace App\Http\Controllers;

use App\Models\Kalender;
use App\Models\Pengumuman;
use App\Models\Peprodi;
use App\Models\Slideshow;
use Illuminate\Http\Request;

class BerandaController extends Controller
{
        public function index()
        {

                //    dd(\App\Models\Pengumuman::get());

                $announcements = Pengumuman::latest()
                        ->take(6)
                        ->get();
                $peprodi = Peprodi::with('prodis')->get();

                $peprodi->map(function ($item) {
                        $item->nama_prodi = $item->prodis
                                ->pluck('name')
                                ->implode(', ');
                        return $item;
                });
                $kalender = Kalender::first();

                $slideshow = Slideshow::select('image')->get();

                return view('beranda', compact('announcements', 'peprodi', 'kalender', 'slideshow'));
        }
}
