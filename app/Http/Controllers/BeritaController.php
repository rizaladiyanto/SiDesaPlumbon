<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function index()
    {
        $berita = Berita::where('status', 'published')
            ->orderBy('tanggal_publikasi', 'desc')
            ->paginate(9);

        return view('berita', compact('berita'));
    }

    public function show($id)
    {
        // Find the berita
        $berita = Berita::published()->findOrFail($id);

        // Get related berita (same category, exclude current berita, limit 3)
        $relatedBerita = Berita::published()
            ->where('id', '!=', $berita->id)
            ->when($berita->kategori, function ($query) use ($berita) {
                return $query->where('kategori', $berita->kategori);
            })
            ->orderBy('tanggal_publikasi', 'desc')
            ->limit(3)
            ->get();

        // If no related berita with same category, get latest berita
        if ($relatedBerita->count() < 3) {
            $additionalBerita = Berita::published()
                ->where('id', '!=', $berita->id)
                ->whereNotIn('id', $relatedBerita->pluck('id'))
                ->orderBy('tanggal_publikasi', 'desc')
                ->limit(3 - $relatedBerita->count())
                ->get();

            $relatedBerita = $relatedBerita->merge($additionalBerita);
        }

        return view('showberita', compact('berita', 'relatedBerita'));
    }
}
