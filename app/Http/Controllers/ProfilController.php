<?php

namespace App\Http\Controllers;

use App\Models\profile;
use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function index()
    {
        $profil = profile::first();
        return view('profil', compact('profil'));
    }
}
