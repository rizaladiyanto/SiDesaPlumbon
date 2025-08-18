<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>SDG 6 - SiDesaPlumbon</title>

        <link rel="stylesheet" href="{{ asset('/webgis/SDGs6/css/fontawesome-all.min.css') }}">
        <link rel="stylesheet" href="{{ asset('/webgis/SDGs6/css/leaflet.css') }}">
        <link rel="stylesheet" href="{{ asset('/webgis/SDGs6/css/qgis2web.css') }}">

        <link rel="stylesheet" href="{{ asset('/webgis/SDGs6/css/L.Control.Layers.Tree.css') }}">
        <link rel="stylesheet" href="{{ asset('/webgis/SDGs6/css/L.Control.Locate.min.css') }}">
        <link rel="stylesheet" href="{{ asset('/webgis/SDGs6/css/leaflet.photon.css') }}">
        <link rel="stylesheet" href="{{ asset('/webgis/SDGs6/css/leaflet-measure.css') }}">
        <link rel="stylesheet" href="{{ asset('/webgis/SDGs6/css/MarkerCluster.css') }}">
        <link rel="stylesheet" href="{{ asset('/webgis/SDGs6/css/MarkerCluster.Default.css') }}">
        
        @vite('resources/css/app.css')

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet" />

        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.9.1/chart.min.js"></script>

        <style>
            #map {
                height: 600px; /* Tinggi peta bisa disesuaikan */
                width: 100%;
                border-radius: 0.5rem;
            }
        </style>
    </head>
    <body class="min-h-screen bg-gray-100">
        <x-header />

        <main>
            <!-- Hero Section -->
            <section id="home" class="relative w-full h-screen hero-bg flex items-center justify-center"
                style="background-image: url('{{ asset('images/hero-surveilance.jpg') }}'); background-size: cover; background-position: center; background-repeat: no-repeat;"
            >
                <div class="absolute inset-0 top-0 left-0 bg-gradient-to-b from-black via-black/50 to-transparent h-56 opacity-40 z-10"></div>
                <div class="absolute bottom-0 left-0 w-full h-48 bg-gradient-to-t from-black via-black/50 to-transparent z-20"></div>
                
                <div id="typingEffect" class="relative z-30 text-center text-4xl text-white px-6 md:px-12 max-w-4xl md:text-6xl font-bold tracking-wide typing-cursor">
                </div>
            </section>

            <section class="py-16 bg-white">
                <div class="container mx-auto px-6 md:px-12">
                    <div class="max-w-5xl mx-auto text-center fade-in-up">
                        <h2 class="text-4xl font-bold text-gray-800 mb-6">SDG 6: Air Bersih dan Sanitasi Layak</h2>
                        <div class="w-24 h-1 bg-black mx-auto mb-8"></div>
                        <p class="text-lg text-gray-600 leading-relaxed mb-8 text-justify">
                            Sustainable Development Goal 6 bertujuan untuk memastikan ketersediaan air bersih dan sanitasi yang layak serta pengelolaan air secara berkelanjutan untuk semua. SDG ini mencakup berbagai aspek mulai dari akses terhadap air minum yang aman, pengelolaan sanitasi, hingga kualitas sumber daya air yang digunakan untuk kehidupan sehari-hari.
                        </p>
                    </div>
                </div>
            </section>

        <section class="py-16 bg-gray-50">
            <div class="container mx-auto px-6 md:px-12">
                <div class="text-center mb-12 max-w-5xl mx-auto fade-in-up">
                    <h2 class="text-3xl font-bold text-gray-800 mb-4">Hasil Analisis SDG 6 Desa Plumbon</h2>
                    <p class="text-lg text-gray-600 text-justify">
                        Analisis data dilakukan secara deskriptif dengan membuat distribusi frekuensi untuk tiap indikator SDGs Desa 6. Hasil distribusi frekuensi menggambarkan capaian indikator di tiap RW dan di level desa. Berdasarkan hasil distribusi frekuensi tersebut, maka dilakukan analisis perbandingan dengan standar indikator capaian SDGs Desa dan penilaian dalam bentuk kategori capaian untuk tiap indikator. Perlu dicatat, analisis ini tidak memasukkan indikator nomor 2 dan 6 dari daftar resmi SDGs Desa karena tidak ada pertanyaan yang relevan dalam kuesioner yang digunakan.
                    </p>
                </div>

                <div class="bg-white rounded-lg shadow-lg overflow-hidden max-w-7xl mx-auto fade-in-right">
                    <div class="bg-gray-900 text-white px-6 py-4">
                        <h3 class="text-xl font-semibold">Tabel Perbandingan Distribusi Frekuensi Berdasarkan Indikator SDGs Desa 6</h3>
                    </div>
                    <div class="overflow-x-auto">
                        <table class="w-full">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Indikator</th>
                                    <th class="px-4 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">RW 1</th>
                                    <th class="px-4 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">RW 2</th>
                                    <th class="px-4 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">RW 3</th>
                                    <th class="px-4 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">RW 4</th>
                                    <th class="px-4 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">RW 5</th>
                                    <th class="px-4 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">RW 6</th>
                                    <th class="px-4 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">RW 7</th>
                                    <th class="px-4 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">RW 8</th>
                                    <th class="px-4 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">RW 9</th>
                                    <th class="px-4 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">RW 10</th>
                                    <th class="px-4 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">Desa</th>
                                    <th class="px-4 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">Target</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                <tr>
                                    <td class="px-4 py-3 text-sm font-medium text-gray-900">Akses terhadap layanan air minum dan sanitasi layak (%)</td>
                                    <td class="px-4 py-3 text-sm text-center">91.4</td>
                                    <td class="px-4 py-3 text-sm text-center">100</td>
                                    <td class="px-4 py-3 text-sm text-center">90.9</td>
                                    <td class="px-4 py-3 text-sm text-center">100</td>
                                    <td class="px-4 py-3 text-sm text-center">95.2</td>
                                    <td class="px-4 py-3 text-sm text-center">100</td>
                                    <td class="px-4 py-3 text-sm text-center">100</td>
                                    <td class="px-4 py-3 text-sm text-center">100</td>
                                    <td class="px-4 py-3 text-sm text-center">96.3</td>
                                    <td class="px-4 py-3 text-sm text-center">100</td>
                                    <td class="px-4 py-3 text-sm text-center font-semibold">97.1</td>
                                    <td class="px-4 py-3 text-sm text-center text-green-600 font-semibold">100%</td>
                                </tr>
                                <tr class="bg-gray-50">
                                    <td class="px-4 py-3 text-sm font-medium text-gray-900">Keluarga dan industri pengguna fasilitas air limbah dan lumpur tinja (%)</td>
                                    <td class="px-4 py-3 text-sm text-center">1.7</td>
                                    <td class="px-4 py-3 text-sm text-center">97.8</td>
                                    <td class="px-4 py-3 text-sm text-center">90.9</td>
                                    <td class="px-4 py-3 text-sm text-center">94.1</td>
                                    <td class="px-4 py-3 text-sm text-center">92.9</td>
                                    <td class="px-4 py-3 text-sm text-center">100</td>
                                    <td class="px-4 py-3 text-sm text-center">100</td>
                                    <td class="px-4 py-3 text-sm text-center">95.7</td>
                                    <td class="px-4 py-3 text-sm text-center">92.6</td>
                                    <td class="px-4 py-3 text-sm text-center">98</td>
                                    <td class="px-4 py-3 text-sm text-center font-semibold">81.6</td>
                                    <td class="px-4 py-3 text-sm text-center text-green-600 font-semibold">100%</td>
                                </tr>
                                <tr>
                                    <td class="px-4 py-3 text-sm font-medium text-gray-900">Kualitas sumber air tidak berwarna, tidak berbau, tidak berasa (%)</td>
                                    <td class="px-4 py-3 text-sm text-center">17.2</td>
                                    <td class="px-4 py-3 text-sm text-center">15.2</td>
                                    <td class="px-4 py-3 text-sm text-center">24.2</td>
                                    <td class="px-4 py-3 text-sm text-center">5.9</td>
                                    <td class="px-4 py-3 text-sm text-center">2.4</td>
                                    <td class="px-4 py-3 text-sm text-center">7.9</td>
                                    <td class="px-4 py-3 text-sm text-center">10</td>
                                    <td class="px-4 py-3 text-sm text-center">8.7</td>
                                    <td class="px-4 py-3 text-sm text-center">11.1</td>
                                    <td class="px-4 py-3 text-sm text-center">4</td>
                                    <td class="px-4 py-3 text-sm text-center font-semibold">10.3</td>
                                    <td class="px-4 py-3 text-sm text-center text-red-600 font-semibold">0%</td>
                                </tr>
                                <tr class="bg-gray-50">
                                    <td class="px-4 py-3 text-sm font-medium text-gray-900">Terdapat perdes/SK kades pelestarian lingkungan di sekitar aliran sungai (%)</td>
                                    <td class="px-4 py-3 text-sm text-center">19</td>
                                    <td class="px-4 py-3 text-sm text-center">21.7</td>
                                    <td class="px-4 py-3 text-sm text-center">9.1</td>
                                    <td class="px-4 py-3 text-sm text-center">26.5</td>
                                    <td class="px-4 py-3 text-sm text-center">21.4</td>
                                    <td class="px-4 py-3 text-sm text-center">21.1</td>
                                    <td class="px-4 py-3 text-sm text-center">56.7</td>
                                    <td class="px-4 py-3 text-sm text-center">78.3</td>
                                    <td class="px-4 py-3 text-sm text-center">7.4</td>
                                    <td class="px-4 py-3 text-sm text-center">40</td>
                                    <td class="px-4 py-3 text-sm text-center font-semibold">24.5</td>
                                    <td class="px-4 py-3 text-sm text-center font-semibold">-</td>
                                </tr>
                                <tr>
                                    <td class="px-4 py-3 text-sm font-medium text-gray-900">Tersedianya Perdes/SK kades pelestarian lingkungan di sekitar aliran sungai (%)</td>
                                    <td class="px-4 py-3 text-sm text-center">51.7</td>
                                    <td class="px-4 py-3 text-sm text-center">52.2</td>
                                    <td class="px-4 py-3 text-sm text-center">72.7</td>
                                    <td class="px-4 py-3 text-sm text-center">55.9</td>
                                    <td class="px-4 py-3 text-sm text-center">35.7</td>
                                    <td class="px-4 py-3 text-sm text-center">65.8</td>
                                    <td class="px-4 py-3 text-sm text-center">66.7</td>
                                    <td class="px-4 py-3 text-sm text-center">34.8</td>
                                    <td class="px-4 py-3 text-sm text-center">37</td>
                                    <td class="px-4 py-3 text-sm text-center">52</td>
                                    <td class="px-4 py-3 text-sm text-center font-semibold">48.9</td>
                                    <td class="px-4 py-3 text-sm text-center font-semibold">-</td>
                                </tr>
                                <tr class="bg-gray-50">
                                    <td class="px-4 py-3 text-sm font-medium text-gray-900">Tersedianya informasi dari stasiun hidrologi dan klimatologi terdekat (%)</td>
                                    <td class="px-4 py-3 text-sm text-center">37.9</td>
                                    <td class="px-4 py-3 text-sm text-center">37</td>
                                    <td class="px-4 py-3 text-sm text-center">30.3</td>
                                    <td class="px-4 py-3 text-sm text-center">44.1</td>
                                    <td class="px-4 py-3 text-sm text-center">23.8</td>
                                    <td class="px-4 py-3 text-sm text-center">50</td>
                                    <td class="px-4 py-3 text-sm text-center">33.3</td>
                                    <td class="px-4 py-3 text-sm text-center">39.1</td>
                                    <td class="px-4 py-3 text-sm text-center">22.2</td>
                                    <td class="px-4 py-3 text-sm text-center">40</td>
                                    <td class="px-4 py-3 text-sm text-center font-semibold">36.1</td>
                                    <td class="px-4 py-3 text-sm text-center font-semibold">-</td>
                                </tr>
                                <tr>
                                    <td class="px-4 py-3 text-sm font-medium text-gray-900">Tersedianya informasi sumber daya air (%)</td>
                                    <td class="px-4 py-3 text-sm text-center">50</td>
                                    <td class="px-4 py-3 text-sm text-center">37</td>
                                    <td class="px-4 py-3 text-sm text-center">30</td>
                                    <td class="px-4 py-3 text-sm text-center">38.2</td>
                                    <td class="px-4 py-3 text-sm text-center">23.8</td>
                                    <td class="px-4 py-3 text-sm text-center">42.1</td>
                                    <td class="px-4 py-3 text-sm text-center">16.7</td>
                                    <td class="px-4 py-3 text-sm text-center">39.1</td>
                                    <td class="px-4 py-3 text-sm text-center">25.9</td>
                                    <td class="px-4 py-3 text-sm text-center">62</td>
                                    <td class="px-4 py-3 text-sm text-center font-semibold">38.7</td>
                                    <td class="px-4 py-3 text-sm text-center font-semibold">-</td>
                                </tr>
                                <tr class="bg-gray-50">
                                    <td class="px-4 py-3 text-sm font-medium text-gray-900">Jumlah mata air tetap (ya) (%)</td>
                                    <td class="px-4 py-3 text-sm text-center">62.1</td>
                                    <td class="px-4 py-3 text-sm text-center">58.7</td>
                                    <td class="px-4 py-3 text-sm text-center">78.8</td>
                                    <td class="px-4 py-3 text-sm text-center">82.4</td>
                                    <td class="px-4 py-3 text-sm text-center">66.7</td>
                                    <td class="px-4 py-3 text-sm text-center">73.7</td>
                                    <td class="px-4 py-3 text-sm text-center">70</td>
                                    <td class="px-4 py-3 text-sm text-center">52.2</td>
                                    <td class="px-4 py-3 text-sm text-center">63</td>
                                    <td class="px-4 py-3 text-sm text-center">64</td>
                                    <td class="px-4 py-3 text-sm text-center font-semibold">66.8</td>
                                    <td class="px-4 py-3 text-sm text-center font-semibold">-</td>
                                </tr>
                                <tr>
                                    <td class="px-4 py-3 text-sm font-medium text-gray-900">Terdapat kegiatan penanaman pohon di sekitar aliran dan pengerukan sungai (%)</td>
                                    <td class="px-4 py-3 text-sm text-center">17.2</td>
                                    <td class="px-4 py-3 text-sm text-center">23.9</td>
                                    <td class="px-4 py-3 text-sm text-center">6.1</td>
                                    <td class="px-4 py-3 text-sm text-center">17.6</td>
                                    <td class="px-4 py-3 text-sm text-center">9.5</td>
                                    <td class="px-4 py-3 text-sm text-center">7.9</td>
                                    <td class="px-4 py-3 text-sm text-center">10</td>
                                    <td class="px-4 py-3 text-sm text-center">13</td>
                                    <td class="px-4 py-3 text-sm text-center">11.1</td>
                                    <td class="px-4 py-3 text-sm text-center">22</td>
                                    <td class="px-4 py-3 text-sm text-center font-semibold">16.1</td>
                                    <td class="px-4 py-3 text-sm text-center font-semibold">-</td>
                                </tr>
                                <tr class="bg-gray-50">
                                    <td class="px-4 py-3 text-sm font-medium text-gray-900">Air danau dan sungai tidak berwarna, tidak berbau, tidak berasa (%)</td>
                                    <td class="px-4 py-3 text-sm text-center">24.1</td>
                                    <td class="px-4 py-3 text-sm text-center">13</td>
                                    <td class="px-4 py-3 text-sm text-center">9.1</td>
                                    <td class="px-4 py-3 text-sm text-center">32.4</td>
                                    <td class="px-4 py-3 text-sm text-center">14.3</td>
                                    <td class="px-4 py-3 text-sm text-center">7.9</td>
                                    <td class="px-4 py-3 text-sm text-center">10</td>
                                    <td class="px-4 py-3 text-sm text-center">13</td>
                                    <td class="px-4 py-3 text-sm text-center">29.6</td>
                                    <td class="px-4 py-3 text-sm text-center">16</td>
                                    <td class="px-4 py-3 text-sm text-center font-semibold">17.4</td>
                                    <td class="px-4 py-3 text-sm text-center text-red-600 font-semibold">0%</td>
                                </tr>
                                <tr>
                                    <td class="px-4 py-3 text-sm font-medium text-gray-900">Tidak ada lahan tandus dan erosi (%)</td>
                                    <td class="px-4 py-3 text-sm text-center">77.6</td>
                                    <td class="px-4 py-3 text-sm text-center">69.6</td>
                                    <td class="px-4 py-3 text-sm text-center">66.7</td>
                                    <td class="px-4 py-3 text-sm text-center">88.2</td>
                                    <td class="px-4 py-3 text-sm text-center">64.3</td>
                                    <td class="px-4 py-3 text-sm text-center">94.7</td>
                                    <td class="px-4 py-3 text-sm text-center">56.7</td>
                                    <td class="px-4 py-3 text-sm text-center">73.9</td>
                                    <td class="px-4 py-3 text-sm text-center">70.4</td>
                                    <td class="px-4 py-3 text-sm text-center">82</td>
                                    <td class="px-4 py-3 text-sm text-center font-semibold">75</td>
                                    <td class="px-4 py-3 text-sm text-center font-semibold">-</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-16 bg-white">
            <div class="container mx-auto px-6 md:px-12">
                <div class="text-center mb-12">
                    <h2 class="text-3xl font-bold text-gray-800 mb-4">Analisis dan Temuan</h2>
                </div>
                <div class="max-w-4xl mx-auto space-y-8 text-gray-700">
                    <div class="p-6 border-l-4 border-gray-400 bg-gray-50 rounded-r-lg fade-in-right stagger-animation" style="--delay: 0.3s;">
                        <h4 class="text-xl font-bold mb-2 text-gray-800">1. Akses terhadap Layanan Air Minum dan Sanitasi Layak (Standar: 100%)</h4>
                        <ul class="list-disc list-inside space-y-1">
                            <li><strong>Memenuhi 100%:</strong> RW 2, RW 4, RW 6, RW 7, RW 8, RW 10.</li>
                            <li><strong>Belum Memenuhi:</strong> RW 1 (91,4%), RW 3 (90,9%), RW 5 (95,2%), RW 9 (96,3%).</li>
                            <li><strong>RW Terendah:</strong> RW 3 (90,9%).</li>
                        </ul>
                    </div>

                    <div class="p-6 border-l-4 border-gray-400 bg-gray-50 rounded-r-lg fade-in-right stagger-animation" style="--delay: 0.3s;">
                        <h4 class="text-xl font-bold mb-2 text-gray-800">2. Keluarga dan Industri Pengguna Fasilitas Air Limbah dan Lumpur Tinja (Standar: 100%)</h4>
                        <ul class="list-disc list-inside space-y-1">
                            <li><strong>Memenuhi 100%:</strong> RW 6, RW 7.</li>
                            <li><strong>Belum Memenuhi:</strong> RW 1, RW 2, RW 3, RW 4, RW 5, RW 8, RW 9, RW 10.</li>
                            <li><strong>RW Terendah:</strong> RW 1 (1,7%).</li>
                        </ul>
                    </div>

                    <div class="p-6 border-l-4 border-gray-400 bg-gray-50 rounded-r-lg fade-in-right stagger-animation" style="--delay: 0.3s;">
                        <h4 class="text-xl font-bold mb-2 text-gray-800">3. Kualitas Sumber Air Tidak Berwarna, Tidak Berbau, Tidak Berasa (Standar: 0%)</h4>
                        <ul class="list-disc list-inside space-y-1">
                            <li><strong>Memenuhi 0%:</strong> Tidak ada.</li>
                            <li><strong>RW Terbaik (terendah):</strong> RW 5 (2,4%).</li>
                            <li><strong>RW Terburuk:</strong> RW 3 (24,2%).</li>
                        </ul>
                    </div>
                    
                    <div class="p-6 border-l-4 border-gray-400 bg-gray-50 rounded-r-lg fade-in-right stagger-animation" style="--delay: 0.3s;">
                        <h4 class="text-xl font-bold mb-2 text-gray-800">4. Terdapat Perdes/SK Kades Pelestarian Lingkungan di Sekitar Aliran Sungai (Standar: 100%)</h4>
                        <ul class="list-disc list-inside space-y-1">
                            <li><strong>Memenuhi 100%:</strong> Tidak ada.</li>
                            <li><strong>RW Paling Tinggi:</strong> RW 8 (78,3%).</li>
                            <li><strong>RW Terendah:</strong> RW 9 (7,4%).</li>
                        </ul>
                    </div>

                    <div class="p-6 border-l-4 border-gray-400 bg-gray-50 rounded-r-lg fade-in-right stagger-animation" style="--delay: 0.3s;">
                        <h4 class="text-xl font-bold mb-2 text-gray-800">5. Tersedianya Perdes/SK Kades Pelestarian Lingkungan di Sekitar Aliran Sungai (Standar: 100%)</h4>
                        <ul class="list-disc list-inside space-y-1">
                            <li><strong>Memenuhi 100%:</strong> Tidak ada.</li>
                            <li><strong>RW Paling Tinggi:</strong> RW 3 (72,7%).</li>
                            <li><strong>RW Terendah:</strong> RW 5 (35,7%).</li>
                        </ul>
                    </div>

                    <div class="p-6 border-l-4 border-gray-400 bg-gray-50 rounded-r-lg fade-in-right stagger-animation" style="--delay: 0.3s;">
                        <h4 class="text-xl font-bold mb-2 text-gray-800">6. Tersedianya Informasi dari Stasiun Hidrologi dan Klimatologi Terdekat (Standar: 100%)</h4>
                        <ul class="list-disc list-inside space-y-1">
                            <li><strong>Memenuhi 100%:</strong> Tidak ada.</li>
                            <li><strong>RW Paling Tinggi:</strong> RW 6 (50%).</li>
                            <li><strong>RW Terendah:</strong> RW 5 (23,8%).</li>
                        </ul>
                    </div>
                    
                    <div class="p-6 border-l-4 border-gray-400 bg-gray-50 rounded-r-lg fade-in-right stagger-animation" style="--delay: 0.3s;">
                        <h4 class="text-xl font-bold mb-2 text-gray-800">7. Tersedianya Informasi Sumber Daya Air (Standar: 100%)</h4>
                        <ul class="list-disc list-inside space-y-1">
                            <li><strong>Memenuhi 100%:</strong> Tidak ada.</li>
                            <li><strong>RW Paling Tinggi:</strong> RW 1 (50%).</li>
                            <li><strong>RW Terendah:</strong> RW 7 (16,7%).</li>
                        </ul>
                    </div>

                    <div class="p-6 border-l-4 border-gray-400 bg-gray-50 rounded-r-lg fade-in-right stagger-animation" style="--delay: 0.3s;">
                        <h4 class="text-xl font-bold mb-2 text-gray-800">8. Jumlah Mata Air Tetap (Standar: 100%)</h4>
                        <ul class="list-disc list-inside space-y-1">
                            <li><strong>Memenuhi 100%:</strong> Tidak ada.</li>
                            <li><strong>RW Paling Tinggi:</strong> RW 4 (82,4%).</li>
                            <li><strong>RW Terendah:</strong> RW 8 (52,2%).</li>
                        </ul>
                    </div>
                    
                    <div class="p-6 border-l-4 border-gray-400 bg-gray-50 rounded-r-lg fade-in-right stagger-animation" style="--delay: 0.3s;">
                        <h4 class="text-xl font-bold mb-2 text-gray-800">9. Terdapat Kegiatan Penanaman Pohon dan Pengerukan Sungai (Standar: 100%)</h4>
                        <ul class="list-disc list-inside space-y-1">
                            <li><strong>Memenuhi 100%:</strong> Tidak ada.</li>
                            <li><strong>RW Paling Tinggi:</strong> RW 2 (23,9%).</li>
                            <li><strong>RW Terendah:</strong> RW 3 (6,1%).</li>
                        </ul>
                    </div>
                    
                    <div class="p-6 border-l-4 border-gray-400 bg-gray-50 rounded-r-lg fade-in-right stagger-animation" style="--delay: 0.3s;">
                        <h4 class="text-xl font-bold mb-2 text-gray-800">10. Air Danau dan Sungai Tidak Berwarna, Tidak Berbau, Tidak Berasa (Standar: 100%)</h4>
                        <ul class="list-disc list-inside space-y-1">
                            <li><strong>Memenuhi 100%:</strong> Tidak ada.</li>
                            <li><strong>RW Paling Tinggi:</strong> RW 4 (32,4%).</li>
                            <li><strong>RW Terendah:</strong> RW 3 (9,1%).</li>
                        </ul>
                    </div>

                    <div class="p-6 border-l-4 border-gray-400 bg-gray-50 rounded-r-lg fade-in-right stagger-animation" style="--delay: 0.3s;">
                        <h4 class="text-xl font-bold mb-2 text-gray-800">11. Tidak Ada Lahan Tandus dan Erosi (Standar: 100%)</h4>
                        <ul class="list-disc list-inside space-y-1">
                            <li><strong>Memenuhi 100%:</strong> Tidak ada.</li>
                            <li><strong>RW Paling Tinggi:</strong> RW 4 (88,2%).</li>
                            <li><strong>RW Terendah:</strong> RW 7 (56,7%).</li>
                        </ul>
                    </div>

                </div>
            </div>
        </section>

        <section id="peta-interaktif" class="py-16 bg-gray-50">
            <div class="container mx-auto px-6 md:px-12">
                <div class="text-center mb-12">
                    <h2 class="text-3xl font-bold text-gray-800 mb-4">Peta Sebaran Indikator SDGs 6</h2>
                    <p class="text-lg text-gray-600">Visualisasi data SDGs 6 Desa Plumbon dalam bentuk peta interaktif.</p>
                </div>
                
                <div id="map"></div>
            </div>
        </section>

        </main>

        <x-footer />

        <script>
            // Simple scroll effect for navbar
            window.addEventListener('scroll', function() {
                const navbar = document.querySelector('nav');
                if (window.scrollY > 200) {
                    navbar.classList.add('bg-gray-800', 'bg-opacity-90');
                    navbar.classList.remove('bg-opacity-20');
                } else {
                    navbar.classList.add('bg-opacity-20');
                    navbar.classList.remove('bg-gray-800', 'bg-opacity-90');
                }
            });

            const text = "SURVEILANCE SDGs 6";
            let j = 0;
            const typingEffect = document.getElementById('typingEffect');

            function typeWriter() {
                if (j < text.length) {
                    typingEffect.innerHTML += text.charAt(j);
                    j++;
                    setTimeout(typeWriter, 80); 
                } else {
                    typingEffect.classList.remove('typing'); 
                }
            }

            typingEffect.classList.add('typing'); 
            typeWriter();
            
            document.addEventListener('DOMContentLoaded', () => {
                const elementsToAnimate = document.querySelectorAll('.fade-in-up, .fade-in-left, .fade-in-right, .scale-in');
                const observer = new IntersectionObserver((entries, observer) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            entry.target.classList.add('animate');
                            observer.unobserve(entry.target);
                        }
                    });
                }, { threshold: 0.5 });
                elementsToAnimate.forEach(element => {
                    observer.observe(element);
                });
            });
        </script>

        <script src="{{ asset('/webgis/SDGs6/js/qgis2web_expressions.js') }}"></script>
        <script src="{{ asset('/webgis/SDGs6/js/leaflet.js') }}"></script>
        <script src="{{ asset('/webgis/SDGs6/js/leaflet.rotatedMarker.js') }}"></script>
        <script src="{{ asset('/webgis/SDGs6/js/leaflet.pattern.js') }}"></script>
        <script src="{{ asset('/webgis/SDGs6/js/leaflet-hash.js') }}"></script>
        <script src="{{ asset('/webgis/SDGs6/js/Autolinker.min.js') }}"></script>
        <script src="{{ asset('/webgis/SDGs6/js/rbush.min.js') }}"></script>
        <script src="{{ asset('/webgis/SDGs6/js/labelgun.min.js') }}"></script> 
        <script src="{{ asset('/webgis/SDGs6/js/labels.js') }}"></script>
        <script src="{{ asset('/webgis/SDGs6/js/leaflet-measure.js') }}"></script>
        <script src="{{ asset('/webgis/SDGs6/js/L.Control.Layers.Tree.min.js') }}"></script>
        <script src="{{ asset('/webgis/SDGs6/js/L.Control.Locate.min.js') }}"></script>
        <script src="{{ asset('/webgis/SDGs6/js/leaflet.markercluster.js') }}"></script>
        <script src="{{ asset('/webgis/SDGs6/js/leaflet.photon.js') }}"></script>

        <script src="{{ asset('/webgis/SDGs6/data/BatasRukunWarga_3.js') }}"></script>
        <script src="{{ asset('/webgis/SDGs6/data/HasilCapaianSDGs6diDesaPlumbon_2.js') }}"></script>
        <script src="{{ asset('/webgis/SDGs6/data/RukunWarga_1.js') }}"></script>

        <script>
            var map = L.map('map', {
                zoomControl: true,
                maxZoom: 28,
                minZoom: 1,
                scrollWheelZoom: true
            }).fitBounds([[-7.603228004225992, 110.82698433856959], [-7.574999977387668, 110.88367897512377]]);

            var hash = new L.Hash(map);
            map.attributionControl.setPrefix('<a href="https://github.com/tomchadwin/qgis2web" target="_blank">qgis2web</a> &middot; <a href="https://leafletjs.com" title="A JS library for interactive maps">Leaflet</a> &middot; <a href="https://qgis.org">QGIS</a>');
            var autolinker = new Autolinker({
                truncate: {
                    length: 30,
                    location: 'smart'
                }
            });

            function removeEmptyRowsFromPopupContent(content, feature) {
                var tempDiv = document.createElement('div');
                tempDiv.innerHTML = content;
                var rows = tempDiv.querySelectorAll('tr');
                for (var i = 0; i < rows.length; i++) {
                    var td = rows[i].querySelector('td.visible-with-data');
                    var key = td ? td.id : '';
                    if (td && td.classList.contains('visible-with-data') && feature.properties[key] == null) {
                        rows[i].parentNode.removeChild(rows[i]);
                    }
                }
                return tempDiv.innerHTML;
            }

            function addClassToPopupIfMedia(content, popup) {
                var tempDiv = document.createElement('div');
                tempDiv.innerHTML = content;
                if (tempDiv.querySelector('td img')) {
                    popup._contentNode.classList.add('media');
                    setTimeout(function() {
                        popup.update();
                    }, 10);
                } else {
                    popup._contentNode.classList.remove('media');
                }
            }
            var zoomControl = L.control.zoom({
                position: 'topleft'
            }).addTo(map);
            L.control.locate({
                locateOptions: {
                    maxZoom: 19
                }
            }).addTo(map);
            var measureControl = new L.Control.Measure({
                position: 'topleft',
                primaryLengthUnit: 'meters',
                secondaryLengthUnit: 'kilometers',
                primaryAreaUnit: 'sqmeters',
                secondaryAreaUnit: 'hectares'
            });
            measureControl.addTo(map);
            document.getElementsByClassName('leaflet-control-measure-toggle')[0].innerHTML = '';
            document.getElementsByClassName('leaflet-control-measure-toggle')[0].className += ' fas fa-ruler';
            var bounds_group = new L.featureGroup([]);

            function setBounds() {}
            map.createPane('pane_SALITER_0');
            map.getPane('pane_SALITER_0').style.zIndex = 400;
            var layer_SALITER_0 = L.tileLayer('http://mt0.google.com/vt/lyrs=s&hl=en&x={x}&y={y}&z={z}', {
                pane: 'pane_SALITER_0',
                opacity: 1.0,
                attribution: '',
                minZoom: 1,
                maxZoom: 28,
                minNativeZoom: 0,
                maxNativeZoom: 18
            });
            layer_SALITER_0;
            map.addLayer(layer_SALITER_0);

            function pop_RukunWarga_1(feature, layer) {
                var popupContent = '<table>\
                                    <tr>\
                                        <th scope="row">RW</th>\
                                        <td>' + (feature.properties['RW'] !== null ? autolinker.link(String(feature.properties['RW'])) : '') + '</td>\
                                    </tr>\
                                    <tr>\
                                        <td colspan="2">' + (feature.properties['SDGS_3'] !== null ? autolinker.link(String(feature.properties['SDGS_3'])) : '') + '</td>\
                                    </tr>\
                                    <tr>\
                                        <th scope="row">DESA</th>\
                                        <td>' + (feature.properties['DESA'] !== null ? autolinker.link(String(feature.properties['DESA'])) : '') + '</td>\
                                    </tr>\
                                    <tr>\
                                        <th scope="row">Grafik</th>\
                                        <td>' + (feature.properties['Grafik'] !== null ? '<img src="{{ asset("/webgis/SDGs6/images") }}/' + feature.properties['Grafik'] + '">' : '') + '</td>\
                                    </tr>\
                                    <tr>\
                                        <td colspan="2">' + (feature.properties['rwww'] !== null ? autolinker.link(String(feature.properties['rwww'])) : '') + '</td>\
                                    </tr>\
                                </table>';
                var content = removeEmptyRowsFromPopupContent(popupContent, feature);
                layer.on('popupopen', function(e) {
                    addClassToPopupIfMedia(content, e.popup);
                });
                layer.bindPopup(content, {
                    maxHeight: 400
                });
            }

            function style_RukunWarga_1_0(feature) {
                switch (String(feature.properties['RW'])) {
                    case '1':
                        return {
                            pane: 'pane_RukunWarga_1',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(215,25,28,1.0)',
                            interactive: true,
                        }
                        break;
                    case '2':
                        return {
                            pane: 'pane_RukunWarga_1',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(95,203,73,1.0)',
                            interactive: true,
                        }
                        break;
                    case '3':
                        return {
                            pane: 'pane_RukunWarga_1',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(215,25,28,1.0)',
                            interactive: true,
                        }
                        break;
                    case '4':
                        return {
                            pane: 'pane_RukunWarga_1',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(95,203,73,1.0)',
                            interactive: true,
                        }
                        break;
                    case '5':
                        return {
                            pane: 'pane_RukunWarga_1',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(215,25,28,1.0)',
                            interactive: true,
                        }
                        break;
                    case '6':
                        return {
                            pane: 'pane_RukunWarga_1',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(95,203,73,1.0)',
                            interactive: true,
                        }
                        break;
                    case '7':
                        return {
                            pane: 'pane_RukunWarga_1',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(95,203,73,1.0)',
                            interactive: true,
                        }
                        break;
                    case '8':
                        return {
                            pane: 'pane_RukunWarga_1',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(215,25,28,1.0)',
                            interactive: true,
                        }
                        break;
                    case '9':
                        return {
                            pane: 'pane_RukunWarga_1',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(215,25,28,1.0)',
                            interactive: true,
                        }
                        break;
                    case '10':
                        return {
                            pane: 'pane_RukunWarga_1',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(95,203,73,1.0)',
                            interactive: true,
                        }
                        break;
                }
            }
            map.createPane('pane_RukunWarga_1');
            map.getPane('pane_RukunWarga_1').style.zIndex = 401;
            map.getPane('pane_RukunWarga_1').style['mix-blend-mode'] = 'normal';
            var layer_RukunWarga_1 = new L.geoJson(json_RukunWarga_1, {
                attribution: '',
                interactive: true,
                dataVar: 'json_RukunWarga_1',
                layerName: 'layer_RukunWarga_1',
                pane: 'pane_RukunWarga_1',
                onEachFeature: pop_RukunWarga_1,
                style: style_RukunWarga_1_0,
            });
            bounds_group.addLayer(layer_RukunWarga_1);
            map.addLayer(layer_RukunWarga_1);

            function pop_HasilCapaianSDGs6diDesaPlumbon_2(feature, layer) {
                var popupContent = '<table>\
                                    <tr>\
                                        <td colspan="2">' + (feature.properties['1'] !== null ? autolinker.link(String(feature.properties['1'])) : '') + '</td>\
                                    </tr>\
                                    <tr>\
                                        <td colspan="2">' + (feature.properties['3'] !== null ? autolinker.link(String(feature.properties['3'])) : '') + '</td>\
                                    </tr>\
                                    <tr>\
                                        <td colspan="2">' + (feature.properties['4'] !== null ? autolinker.link(String(feature.properties['4'])) : '') + '</td>\
                                    </tr>\
                                    <tr>\
                                        <td colspan="2">' + (feature.properties['5'] !== null ? autolinker.link(String(feature.properties['5'])) : '') + '</td>\
                                    </tr>\
                                    <tr>\
                                        <td colspan="2">' + (feature.properties['7'] !== null ? autolinker.link(String(feature.properties['7'])) : '') + '</td>\
                                    </tr>\
                                    <tr>\
                                        <td colspan="2">' + (feature.properties['8'] !== null ? autolinker.link(String(feature.properties['8'])) : '') + '</td>\
                                    </tr>\
                                    <tr>\
                                        <td colspan="2">' + (feature.properties['9'] !== null ? autolinker.link(String(feature.properties['9'])) : '') + '</td>\
                                    </tr>\
                                    <tr>\
                                        <td colspan="2">' + (feature.properties['10'] !== null ? '<img src="{{ asset("/webgis/SDGs6/images/grafik_desa_sdgs6.png") }}">' : '') + '</td>\
                                    </tr>\
                                </table>';
                var content = removeEmptyRowsFromPopupContent(popupContent, feature);
                layer.on('popupopen', function(e) {
                    addClassToPopupIfMedia(content, e.popup);
                });
                layer.bindPopup(content, {
                    maxHeight: 400
                });
            }

            function style_HasilCapaianSDGs6diDesaPlumbon_2_0() {
                return {
                    pane: 'pane_HasilCapaianSDGs6diDesaPlumbon_2',
                    opacity: 1,
                    color: 'rgba(35,35,35,1.0)',
                    dashArray: '',
                    lineCap: 'butt',
                    lineJoin: 'miter',
                    weight: 1.0,
                    fill: true,
                    fillOpacity: 1,
                    fillColor: 'rgba(87,200,194,1.0)',
                    interactive: true,
                }
            }
            map.createPane('pane_HasilCapaianSDGs6diDesaPlumbon_2');
            map.getPane('pane_HasilCapaianSDGs6diDesaPlumbon_2').style.zIndex = 402;
            map.getPane('pane_HasilCapaianSDGs6diDesaPlumbon_2').style['mix-blend-mode'] = 'normal';
            var layer_HasilCapaianSDGs6diDesaPlumbon_2 = new L.geoJson(json_HasilCapaianSDGs6diDesaPlumbon_2, {
                attribution: '',
                interactive: true,
                dataVar: 'json_HasilCapaianSDGs6diDesaPlumbon_2',
                layerName: 'layer_HasilCapaianSDGs6diDesaPlumbon_2',
                pane: 'pane_HasilCapaianSDGs6diDesaPlumbon_2',
                onEachFeature: pop_HasilCapaianSDGs6diDesaPlumbon_2,
                style: style_HasilCapaianSDGs6diDesaPlumbon_2_0,
            });
            bounds_group.addLayer(layer_HasilCapaianSDGs6diDesaPlumbon_2);
            map.addLayer(layer_HasilCapaianSDGs6diDesaPlumbon_2);

            function pop_BatasRukunWarga_3(feature, layer) {
                var popupContent = '<table>\
                                    <tr>\
                                        <td colspan="2">' + (feature.properties['RW'] !== null ? autolinker.link(String(feature.properties['RW'])) : '') + '</td>\
                                    </tr>\
                                    <tr>\
                                        <td colspan="2">' + (feature.properties['SDGS_3'] !== null ? autolinker.link(String(feature.properties['SDGS_3'])) : '') + '</td>\
                                    </tr>\
                                    <tr>\
                                        <td colspan="2">' + (feature.properties['DESA'] !== null ? autolinker.link(String(feature.properties['DESA'])) : '') + '</td>\
                                    </tr>\
                                    <tr>\
                                        <td colspan="2">' + (feature.properties['Grafik'] !== null ? autolinker.link(String(feature.properties['Grafik'])) : '') + '</td>\
                                    </tr>\
                                </table>';
                var content = removeEmptyRowsFromPopupContent(popupContent, feature);
                layer.on('popupopen', function(e) {
                    addClassToPopupIfMedia(content, e.popup);
                });
                layer.bindPopup(content, {
                    maxHeight: 400
                });
            }

            function style_BatasRukunWarga_3_0() {
                return {
                    pane: 'pane_BatasRukunWarga_3',
                    opacity: 1,
                    color: 'rgba(0,0,0,1.0)',
                    dashArray: '',
                    lineCap: 'square',
                    lineJoin: 'bevel',
                    weight: 1.0,
                    fillOpacity: 0,
                    interactive: true, 
                }
            }
            map.createPane('pane_BatasRukunWarga_3');
            map.getPane('pane_BatasRukunWarga_3').style.zIndex = 403; // Paling tinggi agar garis terlihat
            map.getPane('pane_BatasRukunWarga_3').style['mix-blend-mode'] = 'normal';
            var layer_BatasRukunWarga_3 = new L.geoJson(json_BatasRukunWarga_3, {
                attribution: '',
                interactive: false, // Dibuat false juga di sini
                dataVar: 'json_BatasRukunWarga_3',
                layerName: 'layer_BatasRukunWarga_3',
                pane: 'pane_BatasRukunWarga_3',
                onEachFeature: pop_BatasRukunWarga_3,
                style: style_BatasRukunWarga_3_0,
            });
            bounds_group.addLayer(layer_BatasRukunWarga_3);
            map.addLayer(layer_BatasRukunWarga_3);
            
            var overlaysTree = [{
                label: '<img src="{{ asset("/webgis/SDGs6/legend/BatasRukunWarga_3.png") }}" /> Batas Rukun Warga',
                layer: layer_BatasRukunWarga_3
            }, {
                label: '<img src="{{ asset("/webgis/SDGs6/legend/HasilCapaianSDGs6diDesaPlumbon_2.png") }}" /> Hasil Capaian SDGs 6 di Desa Plumbon',
                layer: layer_HasilCapaianSDGs6diDesaPlumbon_2
            }, {
                label: '<b>Hasil Capaian SDGs 6 per RW di Desa Plumbon</b>',
                selectAllCheckbox: true,
                children: [{
                    label: 'Rukun Warga<br /><table><tr><td style="text-align: center;"><img src="{{ asset("/webgis/SDGs6/legend/RukunWarga_1_1TidakSesuai0.png") }}" /></td><td>1 Tidak Sesuai</td></tr><tr><td style="text-align: center;"><img src="{{ asset("/webgis/SDGs6/legend/RukunWarga_1_2Sesuai1.png") }}" /></td><td>2 Sesuai</td></tr><tr><td style="text-align: center;"><img src="{{ asset("webgis/SDGs6/legend/RukunWarga_1_3TidakSesuai2.png") }}" /></td><td>3 Tidak Sesuai</td></tr><tr><td style="text-align: center;"><img src="{{ asset("webgis/SDGs6/legend/RukunWarga_1_4Sesuai3.png") }}" /></td><td>4 Sesuai</td></tr><tr><td style="text-align: center;"><img src="{{ asset("webgis/SDGs6/legend/RukunWarga_1_5TidakSesuai4.png") }}" /></td><td>5 Tidak Sesuai</td></tr><tr><td style="text-align: center;"><img src="{{ asset("webgis/SDGs6/legend/RukunWarga_1_6Sesuai5.png") }}" /></td><td>6 Sesuai</td></tr><tr><td style="text-align: center;"><img src="{{ asset("webgis/SDGs6/legend/RukunWarga_1_7Sesuai6.png") }}" /></td><td>7 Sesuai</td></tr><tr><td style="text-align: center;"><img src="{{ asset("webgis/SDGs6/legend/RukunWarga_1_8TidakSesuai7.png") }}" /></td><td>8 Tidak Sesuai</td></tr><tr><td style="text-align: center;"><img src="{{ asset("webgis/SDGs6/legend/RukunWarga_1_9TidakSesuai8.png") }}" /></td><td>9 Tidak Sesuai</td></tr><tr><td style="text-align: center;"><img src="{{ asset("webgis/SDGs6/legend/RukunWarga_1_10Sesuai9.png") }}" /></td><td>10 Sesuai</td></tr></table>',
                    layer: layer_RukunWarga_1
                }, ]
            }, {
                label: "SALITER ",
                layer: layer_SALITER_0,
                radioGroup: 'bm'
            }, ]
            var lay = L.control.layers.tree(null, overlaysTree, {
                collapsed: false,
            });
            lay.addTo(map);
            document.addEventListener("DOMContentLoaded", function() {
                function newLayersListHeight() {
                    var layerScrollbarElement = document.querySelector('.leaflet-control-layers-scrollbar');
                    if (layerScrollbarElement) {
                        var layersListElement = document.querySelector('.leaflet-control-layers-list');
                        var originalHeight = layersListElement.style.height ||
                            window.getComputedStyle(layersListElement).height;
                        var newHeight = parseFloat(originalHeight) - 50;
                        layersListElement.style.height = newHeight + 'px';
                    }
                }
                var isLayersListExpanded = true;
                var controlLayersElement = document.querySelector('.leaflet-control-layers');
                var toggleLayerControl = document.querySelector('.leaflet-control-layers-toggle');
                toggleLayerControl.addEventListener('click', function() {
                    if (isLayersListExpanded) {
                        controlLayersElement.classList.remove('leaflet-control-layers-expanded');
                    } else {
                        controlLayersElement.classList.add('leaflet-control-layers-expanded');
                    }
                    isLayersListExpanded = !isLayersListExpanded;
                    newLayersListHeight()
                });
                if (controlLayersElement) {
                    controlLayersElement.addEventListener('click', function(event) {
                        var toggleLayerHeaderPointer = event.target.closest('.leaflet-layerstree-header-pointer span');
                        if (toggleLayerHeaderPointer) {
                            newLayersListHeight();
                        }
                    });
                }
                setTimeout(function() {
                    toggleLayerControl.click();
                }, 10);
                setTimeout(function() {
                    toggleLayerControl.click();
                }, 10);
                var isSmallScreen = window.innerWidth < 650;
                if (isSmallScreen) {
                    setTimeout(function() {
                        controlLayersElement.classList.remove('leaflet-control-layers-expanded');
                        isLayersListExpanded = !isLayersListExpanded;
                    }, 500);
                }
            });
            setBounds();
            var i = 0;
            layer_RukunWarga_1.eachLayer(function(layer) {
                var context = {
                    feature: layer.feature,
                    variables: {}
                };
                layer.bindTooltip((layer.feature.properties['rwww'] !== null ? String('<div style="color: #323232; font-size: 13pt; font-family: \'Times New Roman\', sans-serif;">' + layer.feature.properties['rwww']) + '</div>' : ''), {
                    permanent: true,
                    offset: [-0, -16],
                    className: 'css_RukunWarga_1'
                });
                labels.push(layer);
                totalMarkers += 1;
                layer.added = true;
                addLabel(layer, i);
                i++;
            });
            var k = 0; // Menggunakan variabel j untuk loop kedua
            layer_HasilCapaianSDGs6diDesaPlumbon_2.eachLayer(function(layer) {
                var context = {
                    feature: layer.feature,
                    variables: {}
                };
                layer.bindTooltip((layer.feature.properties['1'] !== null ? String('<div style="color: #323232; font-size: 12pt; font-weight: bold; font-family: \'Times New Roman\', sans-serif;">' + layer.feature.properties['1']) + '</div>' : ''), {
                    permanent: true,
                    offset: [-0, -16],
                    className: 'css_HasilCapaianSDGs6diDesaPlumbon_2'
                });
                labels.push(layer);
                totalMarkers += 1;
                layer.added = true;
                addLabel(layer, k); // Menggunakan k
                k++;
            });
            resetLabels([layer_RukunWarga_1, layer_HasilCapaianSDGs6diDesaPlumbon_2]);
            map.on("zoomend", function() {
                resetLabels([layer_RukunWarga_1, layer_HasilCapaianSDGs6diDesaPlumbon_2]);
            });
            map.on("layeradd", function() {
                resetLabels([layer_RukunWarga_1, layer_HasilCapaianSDGs6diDesaPlumbon_2]);
            });
            map.on("layerremove", function() {
                resetLabels([layer_RukunWarga_1, layer_HasilCapaianSDGs6diDesaPlumbon_2]);
            });
        </script>
    </body>
</html>