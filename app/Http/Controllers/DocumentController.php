<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DocumentController extends Controller
{
    public function downloadFormulirSurveilance()
    {
        $publicPath = public_path('documents/formulir-surveilance.pdf');
        
        if (file_exists($publicPath)) {
            return response()->download($publicPath, 'formulir-surveilance.pdf');
        }
        
        // Jika file tidak ditemukan
        abort(404, 'File tidak ditemukan');
    }
}
