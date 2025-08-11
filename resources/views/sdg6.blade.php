<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite('resources/css/app.css')

        <title>SDG 6 - SiDesaPlumbon</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet" />

        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.9.1/chart.min.js"></script>
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
            let i = 0;
            const typingEffect = document.getElementById('typingEffect');

            function typeWriter() {
                if (i < text.length) {
                    typingEffect.innerHTML += text.charAt(i);
                    i++;
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
    </body>
</html>