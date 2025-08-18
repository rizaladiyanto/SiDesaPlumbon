<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>SDG 3 - SiDesaPlumbon</title>
        
        <link rel="stylesheet" href="{{ asset('/webgis/SDGs3/css/fontawesome-all.min.css') }}">
        <link rel="stylesheet" href="{{ asset('/webgis/SDGs3/css/leaflet.css') }}">
        <link rel="stylesheet" href="{{ asset('/webgis/SDGs3/css/qgis2web.css') }}">

        <link rel="stylesheet" href="{{ asset('/webgis/SDGs3/css/L.Control.Layers.Tree.css') }}">
        <link rel="stylesheet" href="{{ asset('/webgis/SDGs3/css/L.Control.Locate.min.css') }}">
        <link rel="stylesheet" href="{{ asset('/webgis/SDGs3/css/leaflet.photon.css') }}">
        <link rel="stylesheet" href="{{ asset('/webgis/SDGs3/css/leaflet-measure.css') }}">
        <link rel="stylesheet" href="{{ asset('/webgis/SDGs3/css/MarkerCluster.css') }}">
        <link rel="stylesheet" href="{{ asset('/webgis/SDGs3/css/MarkerCluster.Default.css') }}">

        @vite('resources/css/app.css')

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet" />
        
        <!-- Chart.js -->
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

            <!-- SDG 3 Description Section -->
            <section class="py-16 bg-white">
                <div class="container mx-auto px-6 md:px-12">
                    <div class="max-w-5xl mx-auto text-center fade-in-up">
                        <h2 class="text-4xl font-bold text-gray-800 mb-6">SDG 3: Kesehatan dan Kesejahteraan</h2>
                        <div class="w-24 h-1 bg-black mx-auto mb-8"></div>
                        <p class="text-lg text-gray-600 leading-relaxed mb-8 text-justify">
                            Sustainable Development Goal 3 bertujuan untuk memastikan kehidupan yang sehat dan mendorong kesejahteraan untuk semua di segala usia. 
                            SDG ini mencakup berbagai aspek kesehatan mulai dari kesehatan ibu dan anak, pencegahan penyakit, akses terhadap layanan kesehatan, 
                            hingga promosi kesehatan mental dan fisik.
                        </p>
                    </div>
                </div>
            </section>

            <section class="py-16 bg-gray-50">
                <div class="container mx-auto px-6 md:px-12">
                    <div class="text-center mb-12 max-w-5xl mx-auto fade-in-up">
                        <h2 class="text-3xl font-bold text-gray-800 mb-4">Hasil Analisis SDG 3 Desa Plumbon</h2>
                        <p class="text-lg text-gray-600 text-justify">
                            Analisis data dilakukan secara deskriptif dengan membuat distribusi frekuensi untuk tiap indikator SDGs Desa 3. Hasil distribusi frekuensi menggambarkan capaian indikator di tiap RW dan di level desa. Berdasarkan hasil distribusi frekuensi tersebut, maka dilakukananalisis perbandingan dengan standar indikator capaian SDGs Desa dan penilaian dalam bentuk kategori capaian untuk tiap indikator.
                        </p>
                    </div>

                    <div class="bg-white rounded-lg shadow-lg overflow-hidden max-w-7xl mx-auto fade-in-right">
                        <div class="bg-gray-900 text-white px-6 py-4">
                            <h3 class="text-xl font-semibold">Tabel Perbandingan Distribusi Frekuensi Berdasarkan Indikator SDGs Desa 3</h3>
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
                                        <td class="px-4 py-3 text-sm font-medium text-gray-900">BPJS Kesehatan (%)</td>
                                        <td class="px-4 py-3 text-sm text-center">87.9</td>
                                        <td class="px-4 py-3 text-sm text-center">82.6</td>
                                        <td class="px-4 py-3 text-sm text-center">97.0</td>
                                        <td class="px-4 py-3 text-sm text-center">79.4</td>
                                        <td class="px-4 py-3 text-sm text-center">88.1</td>
                                        <td class="px-4 py-3 text-sm text-center">71.1</td>
                                        <td class="px-4 py-3 text-sm text-center">66.7</td>
                                        <td class="px-4 py-3 text-sm text-center">95.7</td>
                                        <td class="px-4 py-3 text-sm text-center">92.6</td>
                                        <td class="px-4 py-3 text-sm text-center">90.0</td>
                                        <td class="px-4 py-3 text-sm text-center font-semibold">85.0</td>
                                        <td class="px-4 py-3 text-sm text-center text-green-600 font-semibold">100%</td>
                                    </tr>
                                    <tr class="bg-gray-50">
                                        <td class="px-4 py-3 text-sm font-medium text-gray-900">Unmet Need Pelayanan Kesehatan (%)</td>
                                        <td class="px-4 py-3 text-sm text-center">29.3</td>
                                        <td class="px-4 py-3 text-sm text-center">32.6</td>
                                        <td class="px-4 py-3 text-sm text-center">27.3</td>
                                        <td class="px-4 py-3 text-sm text-center">20.6</td>
                                        <td class="px-4 py-3 text-sm text-center">14.3</td>
                                        <td class="px-4 py-3 text-sm text-center">15.8</td>
                                        <td class="px-4 py-3 text-sm text-center">33.3</td>
                                        <td class="px-4 py-3 text-sm text-center">26.1</td>
                                        <td class="px-4 py-3 text-sm text-center">29.6</td>
                                        <td class="px-4 py-3 text-sm text-center">32.0</td>
                                        <td class="px-4 py-3 text-sm text-center font-semibold">26.3</td>
                                        <td class="px-4 py-3 text-sm text-center text-green-600 font-semibold">0%</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-3 text-sm font-medium text-gray-900">Persalinan di Fasilitas Kesehatan (%)</td>
                                        <td class="px-4 py-3 text-sm text-center">65.5</td>
                                        <td class="px-4 py-3 text-sm text-center">87.0</td>
                                        <td class="px-4 py-3 text-sm text-center">60.6</td>
                                        <td class="px-4 py-3 text-sm text-center">82.4</td>
                                        <td class="px-4 py-3 text-sm text-center">71.4</td>
                                        <td class="px-4 py-3 text-sm text-center">31.6</td>
                                        <td class="px-4 py-3 text-sm text-center">70.0</td>
                                        <td class="px-4 py-3 text-sm text-center">78.3</td>
                                        <td class="px-4 py-3 text-sm text-center">70.4</td>
                                        <td class="px-4 py-3 text-sm text-center">70.0</td>
                                        <td class="px-4 py-3 text-sm text-center font-semibold">72.1</td>
                                        <td class="px-4 py-3 text-sm text-center text-green-600 font-semibold">100%</td>
                                    </tr>
                                    <tr class="bg-gray-50">
                                        <td class="px-4 py-3 text-sm font-medium text-gray-900">Angka Kematian Ibu (AKI) per Kelahiran</td>
                                        <td class="px-4 py-3 text-sm text-center">0</td>
                                        <td class="px-4 py-3 text-sm text-center">0</td>
                                        <td class="px-4 py-3 text-sm text-center">0</td>
                                        <td class="px-4 py-3 text-sm text-center">0</td>
                                        <td class="px-4 py-3 text-sm text-center">0</td>
                                        <td class="px-4 py-3 text-sm text-center">0</td>
                                        <td class="px-4 py-3 text-sm text-center">0</td>
                                        <td class="px-4 py-3 text-sm text-center">0</td>
                                        <td class="px-4 py-3 text-sm text-center">0</td>
                                        <td class="px-4 py-3 text-sm text-center">0</td>
                                        <td class="px-4 py-3 text-sm text-center font-semibold">0</td>
                                        <td class="px-4 py-3 text-sm text-center text-green-600 font-semibold">0%</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-3 text-sm font-medium text-gray-900">Angka Kematian Bayi (AKB) per Kelahiran</td>
                                        <td class="px-4 py-3 text-sm text-center">0</td>
                                        <td class="px-4 py-3 text-sm text-center">0</td>
                                        <td class="px-4 py-3 text-sm text-center">0</td>
                                        <td class="px-4 py-3 text-sm text-center">0</td>
                                        <td class="px-4 py-3 text-sm text-center">0</td>
                                        <td class="px-4 py-3 text-sm text-center">0</td>
                                        <td class="px-4 py-3 text-sm text-center">0</td>
                                        <td class="px-4 py-3 text-sm text-center">0</td>
                                        <td class="px-4 py-3 text-sm text-center">0</td>
                                        <td class="px-4 py-3 text-sm text-center">0</td>
                                        <td class="px-4 py-3 text-sm text-center font-semibold">0</td>
                                        <td class="px-4 py-3 text-sm text-center text-green-600 font-semibold">0%</td>
                                    </tr>
                                    <tr class="bg-gray-50">
                                        <td class="px-4 py-3 text-sm font-medium text-gray-900">Imunisasi Dasar Lengkap pada Bayi (%)</td>
                                        <td class="px-4 py-3 text-sm text-center">8.6</td>
                                        <td class="px-4 py-3 text-sm text-center">89.1</td>
                                        <td class="px-4 py-3 text-sm text-center">90.0</td>
                                        <td class="px-4 py-3 text-sm text-center">73.5</td>
                                        <td class="px-4 py-3 text-sm text-center">81.0</td>
                                        <td class="px-4 py-3 text-sm text-center">86.8</td>
                                        <td class="px-4 py-3 text-sm text-center">80.0</td>
                                        <td class="px-4 py-3 text-sm text-center">87.0</td>
                                        <td class="px-4 py-3 text-sm text-center">77.8</td>
                                        <td class="px-4 py-3 text-sm text-center">98.0</td>
                                        <td class="px-4 py-3 text-sm text-center font-semibold">73.9</td>
                                        <td class="px-4 py-3 text-sm text-center text-green-600 font-semibold">100%</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-3 text-sm font-medium text-gray-900">Prevalensi HIV,TBC, Tekanan darah tinggi, obesitas, narkoba (%)</td>
                                        <td class="px-4 py-3 text-sm text-center">43.1</td>
                                        <td class="px-4 py-3 text-sm text-center">47.8</td>
                                        <td class="px-4 py-3 text-sm text-center">36.4</td>
                                        <td class="px-4 py-3 text-sm text-center">23.5</td>
                                        <td class="px-4 py-3 text-sm text-center">66.7</td>
                                        <td class="px-4 py-3 text-sm text-center">36.8</td>
                                        <td class="px-4 py-3 text-sm text-center">70.0</td>
                                        <td class="px-4 py-3 text-sm text-center">73.9</td>
                                        <td class="px-4 py-3 text-sm text-center">25.9</td>
                                        <td class="px-4 py-3 text-sm text-center">3.8</td>
                                        <td class="px-4 py-3 text-sm text-center font-semibold">37.1</td>
                                        <td class="px-4 py-3 text-sm text-center text-green-600 font-semibold">0%</td>
                                    </tr>
                                    <tr class="bg-gray-50">
                                        <td class="px-4 py-3 text-sm font-medium text-gray-900">Jumlah RT yang menjalankan eliminasi malaria, kusta, dan filariasis (kaki gajah) (%)</td>
                                        <td class="px-4 py-3 text-sm text-center">0</td>
                                        <td class="px-4 py-3 text-sm text-center">4.3</td>
                                        <td class="px-4 py-3 text-sm text-center">0</td>
                                        <td class="px-4 py-3 text-sm text-center">2.9</td>
                                        <td class="px-4 py-3 text-sm text-center">2.4</td>
                                        <td class="px-4 py-3 text-sm text-center">2.6</td>
                                        <td class="px-4 py-3 text-sm text-center">0</td>
                                        <td class="px-4 py-3 text-sm text-center">0</td>
                                        <td class="px-4 py-3 text-sm text-center">0</td>
                                        <td class="px-4 py-3 text-sm text-center">0</td>
                                        <td class="px-4 py-3 text-sm text-center font-semibold">0.3</td>
                                        <td class="px-4 py-3 text-sm text-center text-green-600 font-semibold">100%</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-3 text-sm font-medium text-gray-900">Persentase Perokok (%)</td>
                                        <td class="px-4 py-3 text-sm text-center">6.9</td>
                                        <td class="px-4 py-3 text-sm text-center">10.9</td>
                                        <td class="px-4 py-3 text-sm text-center">9.1</td>
                                        <td class="px-4 py-3 text-sm text-center">2.9</td>
                                        <td class="px-4 py-3 text-sm text-center">2.4</td>
                                        <td class="px-4 py-3 text-sm text-center">5.3</td>
                                        <td class="px-4 py-3 text-sm text-center">20.0</td>
                                        <td class="px-4 py-3 text-sm text-center">8.7</td>
                                        <td class="px-4 py-3 text-sm text-center">3.7</td>
                                        <td class="px-4 py-3 text-sm text-center">6.0</td>
                                        <td class="px-4 py-3 text-sm text-center font-semibold">14.5</td>
                                        <td class="px-4 py-3 text-sm text-center text-green-600 font-semibold">0%</td>
                                    </tr>
                                    <tr class="bg-gray-50">
                                        <td class="px-4 py-3 text-sm font-medium text-gray-900">Posyandu Kesehatan Jiwa pada RT (%)</td>
                                        <td class="px-4 py-3 text-sm text-center">100</td>
                                        <td class="px-4 py-3 text-sm text-center">6.5</td>
                                        <td class="px-4 py-3 text-sm text-center">3.0</td>
                                        <td class="px-4 py-3 text-sm text-center">2.9</td>
                                        <td class="px-4 py-3 text-sm text-center">0</td>
                                        <td class="px-4 py-3 text-sm text-center">0</td>
                                        <td class="px-4 py-3 text-sm text-center">3.3</td>
                                        <td class="px-4 py-3 text-sm text-center">0</td>
                                        <td class="px-4 py-3 text-sm text-center">0</td>
                                        <td class="px-4 py-3 text-sm text-center">0</td>
                                        <td class="px-4 py-3 text-sm text-center font-semibold">16.8</td>
                                        <td class="px-4 py-3 text-sm text-center text-green-600 font-semibold">100%</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-3 text-sm font-medium text-gray-900">Korban penyalahgunaan NAPZA (narkoba) ditangani panti rehabilitasi sosial (%)</td>
                                        <td class="px-4 py-3 text-sm text-center">0</td>
                                        <td class="px-4 py-3 text-sm text-center">2.2</td>
                                        <td class="px-4 py-3 text-sm text-center">6.1</td>
                                        <td class="px-4 py-3 text-sm text-center">2.9</td>
                                        <td class="px-4 py-3 text-sm text-center">0</td>
                                        <td class="px-4 py-3 text-sm text-center">2.6</td>
                                        <td class="px-4 py-3 text-sm text-center">0</td>
                                        <td class="px-4 py-3 text-sm text-center">0</td>
                                        <td class="px-4 py-3 text-sm text-center">0</td>
                                        <td class="px-4 py-3 text-sm text-center">0</td>
                                        <td class="px-4 py-3 text-sm text-center font-semibold">1.3</td>
                                        <td class="px-4 py-3 text-sm text-center text-green-600 font-semibold">0%</td>
                                    </tr>
                                    <tr class="bg-gray-50">
                                        <td class="px-4 py-3 text-sm font-medium text-gray-900">Korban mati dan luka berat akibat kecelakaan lalu lintas (%)</td>
                                        <td class="px-4 py-3 text-sm text-center">3.4</td>
                                        <td class="px-4 py-3 text-sm text-center">6.5</td>
                                        <td class="px-4 py-3 text-sm text-center">6.1</td>
                                        <td class="px-4 py-3 text-sm text-center">2.9</td>
                                        <td class="px-4 py-3 text-sm text-center">4.8</td>
                                        <td class="px-4 py-3 text-sm text-center">13.2</td>
                                        <td class="px-4 py-3 text-sm text-center">0</td>
                                        <td class="px-4 py-3 text-sm text-center">0</td>
                                        <td class="px-4 py-3 text-sm text-center">14.8</td>
                                        <td class="px-4 py-3 text-sm text-center">16.0</td>
                                        <td class="px-4 py-3 text-sm text-center font-semibold">7.1</td>
                                        <td class="px-4 py-3 text-sm text-center text-green-600 font-semibold">0%</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-3 text-sm font-medium text-gray-900 max-w-xs">Prevalensi pemakaian kontrasepsi jangka pendek dan jangka panjang pada usia produktif (18-49 tahun) (%)</td>
                                        <td class="px-4 py-3 text-sm text-center">31.0</td>
                                        <td class="px-4 py-3 text-sm text-center">41.3</td>
                                        <td class="px-4 py-3 text-sm text-center">45.5</td>
                                        <td class="px-4 py-3 text-sm text-center">38.2</td>
                                        <td class="px-4 py-3 text-sm text-center">42.9</td>
                                        <td class="px-4 py-3 text-sm text-center">52.6</td>
                                        <td class="px-4 py-3 text-sm text-center">36.7</td>
                                        <td class="px-4 py-3 text-sm text-center">60.9</td>
                                        <td class="px-4 py-3 text-sm text-center">51.9</td>
                                        <td class="px-4 py-3 text-sm text-center">40.0</td>
                                        <td class="px-4 py-3 text-sm text-center font-semibold">42.4</td>
                                        <td class="px-4 py-3 text-sm text-center text-green-600 font-semibold">100%</td>
                                    </tr>
                                    <tr class="bg-gray-50">
                                        <td class="px-4 py-3 text-sm font-medium text-gray-900">Angka kelahiran pada remaja usia 15-19 tahun (%)</td>
                                        <td class="px-4 py-3 text-sm text-center">0</td>
                                        <td class="px-4 py-3 text-sm text-center">4.3</td>
                                        <td class="px-4 py-3 text-sm text-center">3.0</td>
                                        <td class="px-4 py-3 text-sm text-center">0</td>
                                        <td class="px-4 py-3 text-sm text-center">2.4</td>
                                        <td class="px-4 py-3 text-sm text-center">2.6</td>
                                        <td class="px-4 py-3 text-sm text-center">0</td>
                                        <td class="px-4 py-3 text-sm text-center">4.3</td>
                                        <td class="px-4 py-3 text-sm text-center">3.7</td>
                                        <td class="px-4 py-3 text-sm text-center">0</td>
                                        <td class="px-4 py-3 text-sm text-center font-semibold">1.8</td>
                                        <td class="px-4 py-3 text-sm text-center text-green-600 font-semibold">0%</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-3 text-sm font-medium text-gray-900">Total Fertility Rate dibawah 1,5</td>
                                        <td colspan="12" class="px-4 py-3 text-sm text-center font-semibold text-gray-500">DATA TIDAK TERSEDIA</td>
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
                            <h4 class="text-xl font-bold mb-2 text-gray-800">1. Keluarga Memiliki BPJS Kesehatan (Standar: 100%)</h4>
                            <ul class="list-disc list-inside space-y-1">
                                <li><strong>RW Paling Tinggi:</strong> RW 3 (97%)</li>
                                <li><strong>RW Terendah:</strong> RW 7 (66,7%)</li>
                                <li><strong>Status:</strong> Semua RW (1-10) belum memenuhi standar 100%.</li>
                            </ul>
                        </div>

                        <div class="p-6 border-l-4 border-gray-400 bg-gray-50 rounded-r-lg fade-in-right stagger-animation" style="--delay: 0.3s;">
                            <h4 class="text-xl font-bold mb-2 text-gray-800">2. Unmet Need Pelayanan Kesehatan (Standar: 0%)</h4>
                            <ul class="list-disc list-inside space-y-1">
                                <li><strong>RW Paling Baik (terendah):</strong> RW 5 (14,3%)</li>
                                <li><strong>RW Terburuk:</strong> RW 7 (33,3%)</li>
                                <li><strong>Status:</strong> Semua RW (1-10) belum memenuhi standar 0%.</li>
                            </ul>
                        </div>
                        
                        <div class="p-6 border-l-4 border-gray-400 bg-gray-50 rounded-r-lg fade-in-right stagger-animation" style="--delay: 0.3s;">
                            <h4 class="text-xl font-bold mb-2 text-gray-800">3. Persalinan di Fasilitas Kesehatan (Standar: 100%)</h4>
                            <ul class="list-disc list-inside space-y-1">
                                <li><strong>RW Paling Tinggi:</strong> RW 2 (87%)</li>
                                <li><strong>RW Terendah:</strong> RW 3 (60,6%)</li>
                                <li><strong>Status:</strong> Semua RW belum memenuhi standar 100%.</li>
                            </ul>
                        </div>

                        <div class="p-6 border-l-4 border-gray-400 bg-gray-50 rounded-r-lg fade-in-right stagger-animation" style="--delay: 0.3s;">
                            <h4 class="text-xl font-bold mb-2 text-gray-800">4. Angka Kematian Ibu (AKI) per Kelahiran (Standar: 0%)</h4>
                            <p><strong>Status:</strong> Semua RW sudah mencapai standar 0%.</p>
                        </div>

                        <div class="p-6 border-l-4 border-gray-400 bg-gray-50 rounded-r-lg fade-in-right stagger-animation" style="--delay: 0.3s;">
                            <h4 class="text-xl font-bold mb-2 text-gray-800">5. Angka Kematian Bayi (AKB) per Kelahiran (Standar: 0%)</h4>
                            <p><strong>Status:</strong> Semua RW sudah mencapai standar 0%.</p>
                        </div>

                        <div class="p-6 border-l-4 border-gray-400 bg-gray-50 rounded-r-lg fade-in-right stagger-animation" style="--delay: 0.3s;">
                            <h4 class="text-xl font-bold mb-2 text-gray-800">6. Imunisasi Dasar Lengkap pada Bayi (Standar: 100%)</h4>
                            <ul class="list-disc list-inside space-y-1">
                                <li><strong>RW Paling Tinggi:</strong> RW 10 (98%)</li>
                                <li><strong>RW Terendah:</strong> RW 1 (8,6%)</li>
                                <li><strong>Status:</strong> Semua RW belum memenuhi standar 100%.</li>
                            </ul>
                        </div>

                        <div class="p-6 border-l-4 border-gray-400 bg-gray-50 rounded-r-lg fade-in-right stagger-animation" style="--delay: 0.3s;">
                            <h4 class="text-xl font-bold mb-2 text-gray-800">7. Prevalensi HIV, TBC, Tekanan Darah Tinggi, Obesitas, Narkoba (Standar: 0%)</h4>
                            <ul class="list-disc list-inside space-y-1">
                                <li><strong>RW Terendah (Paling Baik):</strong> RW 10 (3,8%)</li>
                                <li><strong>RW Terburuk:</strong> RW 8 (73,9%) dan RW 7 (70%)</li>
                                <li><strong>Status:</strong> Semua RW belum memenuhi standar 0%.</li>
                            </ul>
                        </div>

                        <div class="p-6 border-l-4 border-gray-400 bg-gray-50 rounded-r-lg fade-in-right stagger-animation" style="--delay: 0.3s;">
                            <h4 class="text-xl font-bold mb-2 text-gray-800">8. Jumlah RT Eliminasi Malaria, Kusta, Filariasis (Standar: 100%)</h4>
                            <ul class="list-disc list-inside space-y-1">
                                <li><strong>RW Paling Tinggi:</strong> RW 2 (4,3%)</li>
                                <li><strong>RW Terendah:</strong> RW 1, RW 3, RW 6, RW 7, RW 8, RW 9, RW 10 (0%)</li>
                                <li><strong>Status:</strong> Semua RW belum memenuhi standar 100%.</li>
                            </ul>
                        </div>

                        <div class="p-6 border-l-4 border-gray-400 bg-gray-50 rounded-r-lg fade-in-right stagger-animation" style="--delay: 0.3s;">
                            <h4 class="text-xl font-bold mb-2 text-gray-800">9. Persentase Perokok (Standar: 0%)</h4>
                            <ul class="list-disc list-inside space-y-1">
                                <li><strong>RW Terendah (Paling Baik):</strong> RW 5 (2,4%) dan RW 4 (2,9%)</li>
                                <li><strong>RW Terburuk:</strong> RW 7 (20%)</li>
                                <li><strong>Status:</strong> Semua RW belum memenuhi standar 0%.</li>
                            </ul>
                        </div>

                        <div class="p-6 border-l-4 border-gray-400 bg-gray-50 rounded-r-lg fade-in-right stagger-animation" style="--delay: 0.3s;">
                            <h4 class="text-xl font-bold mb-2 text-gray-800">10. Posyandu Kesehatan Jiwa pada RT (Standar: 100%)</h4>
                            <ul class="list-disc list-inside space-y-1">
                                <li><strong>Memenuhi 100%:</strong> RW 1</li>
                                <li><strong>Belum Memenuhi:</strong> RW 2, 3, 4, 5, 6, 7, 8, 9, 10.</li>
                                <li><strong>RW Terendah:</strong> RW 5, RW 6, RW 8, RW 9, RW 10 (0%)</li>
                            </ul>
                        </div>

                        <div class="p-6 border-l-4 border-gray-400 bg-gray-50 rounded-r-lg fade-in-right stagger-animation" style="--delay: 0.3s;">
                            <h4 class="text-xl font-bold mb-2 text-gray-800">11. Korban Penyalahgunaan NAPZA Ditangani (Standar: 100%)</h4>
                            <ul class="list-disc list-inside space-y-1">
                                <li><strong>RW Terburuk:</strong> RW 3 (6,1%)</li>
                                <li><strong>RW Terendah:</strong> RW 1, 5, 7, 8, 9, 10 (0%)</li>
                                <li><strong>Status:</strong> Semua RW belum memenuhi standar 100%.</li>
                            </ul>
                        </div>

                        <div class="p-6 border-l-4 border-gray-400 bg-gray-50 rounded-r-lg fade-in-right stagger-animation" style="--delay: 0.3s;">
                            <h4 class="text-xl font-bold mb-2 text-gray-800">12. Korban Mati dan Luka Berat Kecelakaan Lalin (Standar: 0%)</h4>
                            <ul class="list-disc list-inside space-y-1">
                                <li><strong>Memenuhi 0%:</strong> RW 7, RW 8</li>
                                <li><strong>Belum Memenuhi:</strong> RW 1, 2, 3, 4, 5, 6, 9, 10</li>
                                <li><strong>RW Terburuk:</strong> RW 10 (16%)</li>
                            </ul>
                        </div>

                        <div class="p-6 border-l-4 border-gray-400 bg-gray-50 rounded-r-lg fade-in-right stagger-animation" style="--delay: 0.3s;">
                            <h4 class="text-xl font-bold mb-2 text-gray-800">13. Prevalensi Pemakaian Kontrasepsi (Standar: 100%)</h4>
                            <ul class="list-disc list-inside space-y-1">
                                <li><strong>RW Paling Tinggi:</strong> RW 8 (60,9%)</li>
                                <li><strong>RW Terendah:</strong> RW 1 (31%)</li>
                                <li><strong>Status:</strong> Semua RW belum memenuhi standar 100%.</li>
                            </ul>
                        </div>

                        <div class="p-6 border-l-4 border-gray-400 bg-gray-50 rounded-r-lg fade-in-right stagger-animation" style="--delay: 0.3s;">
                            <h4 class="text-xl font-bold mb-2 text-gray-800">14. Angka Kelahiran Remaja Usia 15-19 tahun (Standar: 0%)</h4>
                            <ul class="list-disc list-inside space-y-1">
                                <li><strong>Memenuhi 0%:</strong> RW 1, RW 4, RW 7, RW 10</li>
                                <li><strong>Belum Memenuhi:</strong> RW 2, 3, 5, 6, 8, 9</li>
                                <li><strong>RW Terburuk:</strong> RW 2 (4,3%)</li>
                            </ul>
                        </div>

                        <div class="p-6 border-l-4 border-gray-400 bg-gray-50 rounded-r-lg fade-in-right stagger-animation" style="--delay: 0.3s;">
                            <h4 class="text-xl font-bold mb-2 text-gray-800">15. TFR (Total Fertility Rate) di bawah 1,5</h4>
                            <p><strong>Status:</strong> Data Tidak Tersedia.</p>
                        </div>

                    </div>
                </div>
            </section>

            <section id="peta-interaktif" class="py-16 bg-gray-50">
                <div class="container mx-auto px-6 md:px-12">
                    <div class="text-center mb-12">
                        <h2 class="text-3xl font-bold text-gray-800 mb-4">Peta Sebaran Indikator Kesehatan</h2>
                        <p class="text-lg text-gray-600">Visualisasi data SDGs 3 Desa Plumbon dalam bentuk peta interaktif.</p>
                    </div>
                    
                    {{-- Ini adalah tempat peta akan dimuat oleh JavaScript --}}
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

            // Typing effect
            const text = "SURVEILANCE SDGs 3";
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

            // Animation observer
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

        <script src="{{ asset('/webgis/SDGs3/js/qgis2web_expressions.js') }}"></script>
        <script src="{{ asset('/webgis/SDGs3/js/leaflet.js') }}"></script>
        <script src="{{ asset('/webgis/SDGs3/js/leaflet.rotatedMarker.js') }}"></script>
        <script src="{{ asset('/webgis/SDGs3/js/leaflet.pattern.js') }}"></script>
        <script src="{{ asset('/webgis/SDGs3/js/leaflet-hash.js') }}"></script>
        <script src="{{ asset('/webgis/SDGs3/js/Autolinker.min.js') }}"></script>
        <script src="{{ asset('/webgis/SDGs3/js/rbush.min.js') }}"></script>
        <script src="{{ asset('/webgis/SDGs3/js/labelgun.min.js') }}"></script> 
        <script src="{{ asset('/webgis/SDGs3/js/labels.js') }}"></script>
        <script src="{{ asset('/webgis/SDGs3/js/leaflet-measure.js') }}"></script>
        <script src="{{ asset('/webgis/SDGs3/js/L.Control.Layers.Tree.min.js') }}"></script>
        <script src="{{ asset('/webgis/SDGs3/js/L.Control.Locate.min.js') }}"></script>
        <script src="{{ asset('/webgis/SDGs3/js/leaflet.markercluster.js') }}"></script>
        <script src="{{ asset('/webgis/SDGs3/js/leaflet.photon.js') }}"></script>

        <script src="{{ asset('/webgis/SDGs3/data/RukunWarga_1.js') }}"></script>
        <script src="{{ asset('/webgis/SDGs3/data/HasilCapaianSDGs3diDesaPlumbon_2.js') }}"></script>
        <script src="{{ asset('/webgis/SDGs3/data/BatasRukunWarga_3.js') }}"></script>

        <script>
            var map = L.map('map', {
                zoomControl:false, maxZoom:28, minZoom:1
            }).fitBounds([[-7.603331211159897,110.83297137548763],[-7.5751031910964715,110.88966601204183]]);
            var hash = new L.Hash(map);
            map.attributionControl.setPrefix('<a href="https://github.com/tomchadwin/qgis2web" target="_blank">qgis2web</a> &middot; <a href="https://leafletjs.com" title="A JS library for interactive maps">Leaflet</a> &middot; <a href="https://qgis.org">QGIS</a>');
            var autolinker = new Autolinker({truncate: {length: 30, location: 'smart'}});
            // remove popup's row if "visible-with-data"
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
            // add class to format popup if it contains media
            function addClassToPopupIfMedia(content, popup) {
                var tempDiv = document.createElement('div');
                tempDiv.innerHTML = content;
                if (tempDiv.querySelector('td img')) {
                    popup._contentNode.classList.add('media');
                        // Delay to force the redraw
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
            L.control.locate({locateOptions: {maxZoom: 19}}).addTo(map);
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
            function setBounds() {
            }
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
                            <td class="visible-with-data" id="RW">' + (feature.properties['RW'] !== null ? autolinker.link(String(feature.properties['RW']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                        </tr>\
                        <tr>\
                            <td colspan="2">' + (feature.properties['SDGS_3'] !== null ? autolinker.link(String(feature.properties['SDGS_3']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                        </tr>\
                        <tr>\
                            <th scope="row">DESA</th>\
                            <td class="visible-with-data" id="DESA">' + (feature.properties['DESA'] !== null ? autolinker.link(String(feature.properties['DESA']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                        </tr>\
                        <tr>\
                            <td colspan="2"><strong>Grafik</strong><br />' + (feature.properties['Grafik'] !== null ? '<img src="{{ asset("/webgis/SDGs3/images") }}/' + String(feature.properties['Grafik']).replace(/[\\/:]/g, '_').trim() + '">' : '') + '</td>\
                        </tr>\
                        <tr>\
                            <td colspan="2">' + (feature.properties['rwww'] !== null ? autolinker.link(String(feature.properties['rwww']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                        </tr>\
                    </table>';
                var content = removeEmptyRowsFromPopupContent(popupContent, feature);
                layer.on('popupopen', function(e) {
                    addClassToPopupIfMedia(content, e.popup);
                });
                layer.bindPopup(content, { maxHeight: 400 });
            }

            function style_RukunWarga_1_0(feature) {
                switch(String(feature.properties['RW'])) {
                    case '1':
                        return {
                    pane: 'pane_RukunWarga_1',
                    opacity: 1,
                    color: 'rgba(35,35,35,1.0)',
                    dashArray: '',
                    lineCap: 'butt',
                    lineJoin: 'miter',
                    weight: 2.0, 
                    fill: true,
                    fillOpacity: 1,
                    fillColor: 'rgba(95,203,73,1.0)',
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
                    weight: 2.0, 
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
                    weight: 2.0, 
                    fill: true,
                    fillOpacity: 1,
                    fillColor: 'rgba(95,203,73,1.0)',
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
                    weight: 2.0, 
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
                    weight: 2.0, 
                    fill: true,
                    fillOpacity: 1,
                    fillColor: 'rgba(95,203,73,1.0)',
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
                    weight: 2.0, 
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
                    weight: 2.0, 
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
                    weight: 2.0, 
                    fill: true,
                    fillOpacity: 1,
                    fillColor: 'rgba(95,203,73,1.0)',
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
                    weight: 2.0, 
                    fill: true,
                    fillOpacity: 1,
                    fillColor: 'rgba(95,203,73,1.0)',
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
                    weight: 2.0, 
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
            
            function pop_HasilCapaianSDGs3diDesaPlumbon_2(feature, layer) {
                var popupContent = '<table>\
                        <tr>\
                            <td colspan="2">' + (feature.properties['1'] !== null ? autolinker.link(String(feature.properties['1']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                        </tr>\
                        <tr>\
                            <td colspan="2">' + (feature.properties['3'] !== null ? autolinker.link(String(feature.properties['3']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                        </tr>\
                        <tr>\
                            <td colspan="2">' + (feature.properties['4'] !== null ? autolinker.link(String(feature.properties['4']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                        </tr>\
                        <tr>\
                            <td colspan="2">' + (feature.properties['5'] !== null ? autolinker.link(String(feature.properties['5']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                        </tr>\
                        <tr>\
                            <td colspan="2">' + (feature.properties['7'] !== null ? autolinker.link(String(feature.properties['7']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                        </tr>\
                        <tr>\
                            <td colspan="2">' + (feature.properties['8'] !== null ? autolinker.link(String(feature.properties['8']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                        </tr>\
                        <tr>\
                            <td colspan="2">' + (feature.properties['9'] !== null ? autolinker.link(String(feature.properties['9']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                        </tr>\
                        <tr>\
                            <td colspan="2"><img src="{{ asset('webgis/SDGs3/images/grafik_capaian_desa.png') }}"></td>\
                        </tr>\
                    </table>';
                var content = removeEmptyRowsFromPopupContent(popupContent, feature);
                layer.on('popupopen', function(e) {
                    addClassToPopupIfMedia(content, e.popup);
                });
                layer.bindPopup(content, { maxHeight: 400 });
            }

            function style_HasilCapaianSDGs3diDesaPlumbon_2_0() {
                return {
                    pane: 'pane_HasilCapaianSDGs3diDesaPlumbon_2',
                    opacity: 1,
                    color: 'rgba(35,35,35,1.0)',
                    dashArray: '',
                    lineCap: 'butt',
                    lineJoin: 'miter',
                    weight: 1.0, 
                    fill: true,
                    fillOpacity: 1,
                    fillColor: 'rgba(120,232,124,1.0)',
                    interactive: true,
                }
            }
            map.createPane('pane_HasilCapaianSDGs3diDesaPlumbon_2');
            map.getPane('pane_HasilCapaianSDGs3diDesaPlumbon_2').style.zIndex = 402;
            map.getPane('pane_HasilCapaianSDGs3diDesaPlumbon_2').style['mix-blend-mode'] = 'normal';
            var layer_HasilCapaianSDGs3diDesaPlumbon_2 = new L.geoJson(json_HasilCapaianSDGs3diDesaPlumbon_2, {
                attribution: '',
                interactive: true,
                dataVar: 'json_HasilCapaianSDGs3diDesaPlumbon_2',
                layerName: 'layer_HasilCapaianSDGs3diDesaPlumbon_2',
                pane: 'pane_HasilCapaianSDGs3diDesaPlumbon_2',
                onEachFeature: pop_HasilCapaianSDGs3diDesaPlumbon_2,
                style: style_HasilCapaianSDGs3diDesaPlumbon_2_0,
            });
            bounds_group.addLayer(layer_HasilCapaianSDGs3diDesaPlumbon_2);
            map.addLayer(layer_HasilCapaianSDGs3diDesaPlumbon_2);
            function pop_BatasRukunWarga_3(feature, layer) {
                var popupContent = '<table>\
                        <tr>\
                            <td colspan="2">' + (feature.properties['RW'] !== null ? autolinker.link(String(feature.properties['RW']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                        </tr>\
                        <tr>\
                            <td colspan="2">' + (feature.properties['SDGS_3'] !== null ? autolinker.link(String(feature.properties['SDGS_3']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                        </tr>\
                        <tr>\
                            <td colspan="2">' + (feature.properties['DESA'] !== null ? autolinker.link(String(feature.properties['DESA']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                        </tr>\
                        <tr>\
                            <td colspan="2">' + (feature.properties['Grafik'] !== null ? autolinker.link(String(feature.properties['Grafik']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                        </tr>\
                    </table>';
                var content = removeEmptyRowsFromPopupContent(popupContent, feature);
                layer.on('popupopen', function(e) {
                    addClassToPopupIfMedia(content, e.popup);
                });
                layer.bindPopup(content, { maxHeight: 400 });
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
            map.getPane('pane_BatasRukunWarga_3').style.zIndex = 403;
            map.getPane('pane_BatasRukunWarga_3').style['mix-blend-mode'] = 'normal';
            var layer_BatasRukunWarga_3 = new L.geoJson(json_BatasRukunWarga_3, {
                attribution: '',
                interactive: true,
                dataVar: 'json_BatasRukunWarga_3',
                layerName: 'layer_BatasRukunWarga_3',
                pane: 'pane_BatasRukunWarga_3',
                onEachFeature: pop_BatasRukunWarga_3,
                style: style_BatasRukunWarga_3_0,
            });
            bounds_group.addLayer(layer_BatasRukunWarga_3);
            map.addLayer(layer_BatasRukunWarga_3);
            var overlaysTree = [
                {label: '<img src="{{ asset("/webgis/SDGs3/legend/BatasRukunWarga_3.png") }}" /> Batas Rukun Warga', layer: layer_BatasRukunWarga_3},
                {label: '<img src="{{ asset("/webgis/SDGs3/legend/HasilCapaianSDGs3diDesaPlumbon_2.png") }}" /> Hasil Capaian SDGs 3 di Desa Plumbon', layer: layer_HasilCapaianSDGs3diDesaPlumbon_2},
                {label: '<b>Hasil Capaian SDGs 3 per RW di Desa Plumbon</b>', selectAllCheckbox: true, children: [
                    {label: 'Rukun Warga<br /><table>' +
                        '<tr><td style="text-align: center;"><img src="{{ asset("/webgis/SDGs3/legend/RukunWarga_1_1Sesuai0.png") }}" /></td><td>1 Sesuai</td></tr>' +
                        '<tr><td style="text-align: center;"><img src="{{ asset("/webgis/SDGs3/legend/RukunWarga_1_2Sesuai1.png") }}" /></td><td>2 Sesuai</td></tr>' +
                        '<tr><td style="text-align: center;"><img src="{{ asset("/webgis/SDGs3/legend/RukunWarga_1_3Sesuai2.png") }}" /></td><td>3 Sesuai</td></tr>' +
                        '<tr><td style="text-align: center;"><img src="{{ asset("/webgis/SDGs3/legend/RukunWarga_1_4Sesuai3.png") }}" /></td><td>4 Sesuai</td></tr>' +
                        '<tr><td style="text-align: center;"><img src="{{ asset("/webgis/SDGs3/legend/RukunWarga_1_5Sesuai4.png") }}" /></td><td>5 Sesuai</td></tr>' +
                        '<tr><td style="text-align: center;"><img src="{{ asset("/webgis/SDGs3/legend/RukunWarga_1_6Sesuai5.png") }}" /></td><td>6 Sesuai</td></tr>' +
                        '<tr><td style="text-align: center;"><img src="{{ asset("/webgis/SDGs3/legend/RukunWarga_1_7Sesuai6.png") }}" /></td><td>7 Sesuai</td></tr>' +
                        '<tr><td style="text-align: center;"><img src="{{ asset("/webgis/SDGs3/legend/RukunWarga_1_8Sesuai7.png") }}" /></td><td>8 Sesuai</td></tr>' +
                        '<tr><td style="text-align: center;"><img src="{{ asset("/webgis/SDGs3/legend/RukunWarga_1_9Sesuai8.png") }}" /></td><td>9 Sesuai</td></tr>' +
                        '<tr><td style="text-align: center;"><img src="{{ asset("/webgis/SDGs3/legend/RukunWarga_1_10Sesuai9.png") }}" /></td><td>10 Sesuai</td></tr>' +
                        '</table>', 
                        layer: layer_RukunWarga_1
                    }
                ]},
                {label: "SALITER ", layer: layer_SALITER_0, radioGroup: 'bm' }
            ];
            var lay = L.control.layers.tree(null, overlaysTree,{
                //namedToggle: true,
                //selectorBack: false,
                //closedSymbol: '&#8862; &#x1f5c0;',
                //openedSymbol: '&#8863; &#x1f5c1;',
                //collapseAll: 'Collapse all',
                //expandAll: 'Expand all',
                collapsed: false, 
            });
            lay.addTo(map);
            document.addEventListener("DOMContentLoaded", function() {
                // set new Layers List height which considers toggle icon
                function newLayersListHeight() {
                    var layerScrollbarElement = document.querySelector('.leaflet-control-layers-scrollbar');
                    if (layerScrollbarElement) {
                        var layersListElement = document.querySelector('.leaflet-control-layers-list');
                        var originalHeight = layersListElement.style.height 
                            || window.getComputedStyle(layersListElement).height;
                        var newHeight = parseFloat(originalHeight) - 50;
                        layersListElement.style.height = newHeight + 'px';
                    }
                }
                var isLayersListExpanded = true;
                var controlLayersElement = document.querySelector('.leaflet-control-layers');
                var toggleLayerControl = document.querySelector('.leaflet-control-layers-toggle');
                // toggle Collapsed/Expanded and apply new Layers List height
                toggleLayerControl.addEventListener('click', function() {
                    if (isLayersListExpanded) {
                        controlLayersElement.classList.remove('leaflet-control-layers-expanded');
                    } else {
                        controlLayersElement.classList.add('leaflet-control-layers-expanded');
                    }
                    isLayersListExpanded = !isLayersListExpanded;
                    newLayersListHeight()
                });	
                // apply new Layers List height if toggle layerstree
                if (controlLayersElement) {
                    controlLayersElement.addEventListener('click', function(event) {
                        var toggleLayerHeaderPointer = event.target.closest('.leaflet-layerstree-header-pointer span');
                        if (toggleLayerHeaderPointer) {
                            newLayersListHeight();
                        }
                    });
                }
                // Collapsed/Expanded at Start to apply new height
                setTimeout(function() {
                    toggleLayerControl.click();
                }, 10);
                setTimeout(function() {
                    toggleLayerControl.click();
                }, 10);
                // Collapsed touch/small screen
                var isSmallScreen = window.innerWidth < 650;
                if (isSmallScreen) {
                    setTimeout(function() {
                        controlLayersElement.classList.remove('leaflet-control-layers-expanded');
                        isLayersListExpanded = !isLayersListExpanded;
                    }, 500);
                }  
            });       
            setBounds();
            let i = 0;
            layer_RukunWarga_1.eachLayer(function(layer) {
                var context = {
                    feature: layer.feature,
                    variables: {}
                };
                layer.bindTooltip((layer.feature.properties['rwww'] !== null?String('<div style="color: #323232; font-size: 11pt; font-family: \'Times New Roman\', sans-serif;">' + layer.feature.properties['rwww']) + '</div>':''), {permanent: true, offset: [-0, -16], className: 'css_RukunWarga_1'});
                labels.push(layer);
                totalMarkers += 1;
                layer.added = true;
                addLabel(layer, i);
                i++;
            });
            let k = 0;
            layer_HasilCapaianSDGs3diDesaPlumbon_2.eachLayer(function(layer) {
                var context = {
                    feature: layer.feature,
                    variables: {}
                };
                layer.bindTooltip((layer.feature.properties['1'] !== null?String('<div style="color: #000000; font-size: 12pt; font-weight: bold; font-family: \'Times New Roman\', sans-serif;">' + layer.feature.properties['1']) + '</div>':''), {permanent: true, offset: [-0, -16], className: 'css_HasilCapaianSDGs3diDesaPlumbon_2'});
                labels.push(layer);
                totalMarkers += 1;
                layer.added = true;
                addLabel(layer, j);
                k++;
            });
            resetLabels([layer_RukunWarga_1,layer_HasilCapaianSDGs3diDesaPlumbon_2]);
            map.on("zoomend", function(){
                resetLabels([layer_RukunWarga_1,layer_HasilCapaianSDGs3diDesaPlumbon_2]);
            });
            map.on("layeradd", function(){
                resetLabels([layer_RukunWarga_1,layer_HasilCapaianSDGs3diDesaPlumbon_2]);
            });
            map.on("layerremove", function(){
                resetLabels([layer_RukunWarga_1,layer_HasilCapaianSDGs3diDesaPlumbon_2]);
            });
        </script>
    </body>
</html>