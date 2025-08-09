<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\home;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $berita = Berita::where('status', 'published')
                    ->orderBy('tanggal_publikasi', 'desc') 
                    ->take(3)
                    ->get();

        $home = home::first(); 

        return view('home', compact('berita', 'home'));
    }
}
