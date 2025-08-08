<?php

use App\Http\Controllers\BeritaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UmkmController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home.berita');

Route::get('/profil', function () {
    return view('profil');
});

Route::get('/surveilance/sdgs3', function () {
    return view('sdg3');
});

Route::get('/surveilance/sdgs6', function () {
    return view('sdg6');
}); 

Route::get('/surveilance/sdgs11', function () {
    return view('sdg11');
});

Route::get('/sumberair/petacurahhujan', function () {
    return view('petacurahhujan');
});

Route::get('/sumberair/petakekeringan', function () {
    return view('petakekeringan');
});

Route::get('/sumberair/airbersih', function () {
    return view('airbersih');
});

Route::get('/layanan/berita', [BeritaController::class, 'index'])->name('berita');
Route::get('/layanan/berita/{id}', [BeritaController::class, 'show'])->name('berita.show');

Route::get('/layanan', function () {
    return view('layanan');
});

Route::get('/produk-kkn', function () {
    return view('produk-kkn');
});

