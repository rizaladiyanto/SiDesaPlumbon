<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $berita = Berita::where('status', 'published')
                    ->orderBy('tanggal_publikasi', 'desc') // Urutkan berdasarkan tanggal publikasi terbaru
                    ->take(3) // Ambil hanya 3 berita terbaru
                    ->get();

        return view('home', compact('berita'));
    }
}
