<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite('resources/css/app.css')

        <title>SDG 11 - SiDesaPlumbon</title>

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
                        <h2 class="text-4xl font-bold text-gray-800 mb-6">SDG 11: Kota dan Permukiman Berkelanjutan</h2>
                        <div class="w-24 h-1 bg-black mx-auto mb-8"></div>
                        <p class="text-lg text-gray-600 leading-relaxed mb-8 text-justify">
                            Sustainable Development Goal 11 bertujuan untuk menjadikan kota dan permukiman inklusif, aman, tangguh, dan berkelanjutan. Fokusnya adalah memastikan akses bagi semua terhadap perumahan yang layak dan aman, meningkatkan urbanisasi yang inklusif, melindungi warisan budaya dan alam, serta mengurangi dampak lingkungan dari perkotaan.
                        </p>
                    </div>
                </div>
            </section>

            <section class="py-16 bg-gray-50">
                <div class="container mx-auto px-6 md:px-12 fade-in-up">
                    <div class="text-center mb-12 max-w-5xl mx-auto">
                        <h2 class="text-3xl font-bold text-gray-800 mb-4">Hasil Analisis SDG 11 Desa Plumbon</h2>
                        <p class="text-lg text-gray-600 text-justify">
                            Analisis data dilakukan secara deskriptif dengan membuat distribusi frekuensi untuk tiap indikator SDGs Desa 11. Hasil distribusi frekuensi menggambarkan capaian indikator di tiap RW dan di level desa. Berdasarkan hasil distribusi frekuensi tersebut, maka dilakukan analisis perbandingan dengan standar indikator capaian SDGs Desa dan penilaian dalam bentuk kategori capaian untuk tiap indikator.
                        </p>
                    </div>

                    <div class="bg-white rounded-lg shadow-lg overflow-hidden max-w-7xl mx-auto fade-in-right">
                        <div class="bg-gray-900 text-white px-6 py-4">
                            <h3 class="text-xl font-semibold">Tabel Perbandingan Distribusi Frekuensi Berdasarkan Indikator SDGs Desa 11</h3>
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
                                        <td class="px-4 py-3 text-sm font-medium text-gray-900">Rumah kumuh (%)</td>
                                        <td class="px-4 py-3 text-sm text-center">34.5</td>
                                        <td class="px-4 py-3 text-sm text-center">32.6</td>
                                        <td class="px-4 py-3 text-sm text-center">15.2</td>
                                        <td class="px-4 py-3 text-sm text-center">23.5</td>
                                        <td class="px-4 py-3 text-sm text-center">19</td>
                                        <td class="px-4 py-3 text-sm text-center">28.9</td>
                                        <td class="px-4 py-3 text-sm text-center">20</td>
                                        <td class="px-4 py-3 text-sm text-center">34.8</td>
                                        <td class="px-4 py-3 text-sm text-center">48.1</td>
                                        <td class="px-4 py-3 text-sm text-center">34</td>
                                        <td class="px-4 py-3 text-sm text-center font-semibold">29.2</td>
                                        <td class="px-4 py-3 text-sm text-center text-green-600 font-semibold">0%</td>
                                    </tr>
                                    <tr class="bg-gray-50">
                                        <td class="px-4 py-3 text-sm font-medium text-gray-900">Pengamanan dilaksanakan di 100% RT (%)</td>
                                        <td class="px-4 py-3 text-sm text-center">81</td>
                                        <td class="px-4 py-3 text-sm text-center">89.1</td>
                                        <td class="px-4 py-3 text-sm text-center">66.7</td>
                                        <td class="px-4 py-3 text-sm text-center">64.7</td>
                                        <td class="px-4 py-3 text-sm text-center">83.3</td>
                                        <td class="px-4 py-3 text-sm text-center">81.6</td>
                                        <td class="px-4 py-3 text-sm text-center">33</td>
                                        <td class="px-4 py-3 text-sm text-center">82.6</td>
                                        <td class="px-4 py-3 text-sm text-center">59.3</td>
                                        <td class="px-4 py-3 text-sm text-center">86</td>
                                        <td class="px-4 py-3 text-sm text-center font-semibold">75</td>
                                        <td class="px-4 py-3 text-sm text-center text-green-600 font-semibold">100%</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-3 text-sm font-medium text-gray-900">Keluarga, orang tua, perempuan dan difabel pengguna transportasi umum (%)</td>
                                        <td class="px-4 py-3 text-sm text-center">91.4</td>
                                        <td class="px-4 py-3 text-sm text-center">10.9</td>
                                        <td class="px-4 py-3 text-sm text-center">9.1</td>
                                        <td class="px-4 py-3 text-sm text-center">8.8</td>
                                        <td class="px-4 py-3 text-sm text-center">0</td>
                                        <td class="px-4 py-3 text-sm text-center">18.4</td>
                                        <td class="px-4 py-3 text-sm text-center">6.7</td>
                                        <td class="px-4 py-3 text-sm text-center">4.3</td>
                                        <td class="px-4 py-3 text-sm text-center">0</td>
                                        <td class="px-4 py-3 text-sm text-center">2</td>
                                        <td class="px-4 py-3 text-sm text-center font-semibold">7.1</td>
                                        <td class="px-4 py-3 text-sm text-center text-green-600 font-semibold">&gt;50%</td>
                                    </tr>
                                    <tr class="bg-gray-50">
                                        <td class="px-4 py-3 text-sm font-medium text-gray-900">Penduduk yang pindah ke kota (%)</td>
                                        <td class="px-4 py-3 text-sm text-center">22.4</td>
                                        <td class="px-4 py-3 text-sm text-center">26.1</td>
                                        <td class="px-4 py-3 text-sm text-center">18.2</td>
                                        <td class="px-4 py-3 text-sm text-center">38.2</td>
                                        <td class="px-4 py-3 text-sm text-center">11.9</td>
                                        <td class="px-4 py-3 text-sm text-center">7.9</td>
                                        <td class="px-4 py-3 text-sm text-center">23</td>
                                        <td class="px-4 py-3 text-sm text-center">4.3</td>
                                        <td class="px-4 py-3 text-sm text-center">37</td>
                                        <td class="px-4 py-3 text-sm text-center">10</td>
                                        <td class="px-4 py-3 text-sm text-center font-semibold">19.7</td>
                                        <td class="px-4 py-3 text-sm text-center text-green-600 font-semibold">&lt;15%</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-3 text-sm font-medium text-gray-900">Swasta dan organisasi kemasyarakatan cangkrukan untuk pembangunan desa (%)</td>
                                        <td class="px-4 py-3 text-sm text-center">96.6</td>
                                        <td class="px-4 py-3 text-sm text-center">67.4</td>
                                        <td class="px-4 py-3 text-sm text-center">69.7</td>
                                        <td class="px-4 py-3 text-sm text-center">52.9</td>
                                        <td class="px-4 py-3 text-sm text-center">61.9</td>
                                        <td class="px-4 py-3 text-sm text-center">68.4</td>
                                        <td class="px-4 py-3 text-sm text-center">50</td>
                                        <td class="px-4 py-3 text-sm text-center">65.2</td>
                                        <td class="px-4 py-3 text-sm text-center">55.6</td>
                                        <td class="px-4 py-3 text-sm text-center">52</td>
                                        <td class="px-4 py-3 text-sm text-center font-semibold">61.8</td>
                                        <td class="px-4 py-3 text-sm text-center font-semibold">-</td>
                                    </tr>
                                    <tr class="bg-gray-50">
                                        <td class="px-4 py-3 text-sm font-medium text-gray-900">Budaya yang dilestarikan (%)</td>
                                        <td class="px-4 py-3 text-sm text-center">96.6</td>
                                        <td class="px-4 py-3 text-sm text-center">91.3</td>
                                        <td class="px-4 py-3 text-sm text-center">97</td>
                                        <td class="px-4 py-3 text-sm text-center">79.4</td>
                                        <td class="px-4 py-3 text-sm text-center">90.5</td>
                                        <td class="px-4 py-3 text-sm text-center">92.1</td>
                                        <td class="px-4 py-3 text-sm text-center">96.7</td>
                                        <td class="px-4 py-3 text-sm text-center">91.3</td>
                                        <td class="px-4 py-3 text-sm text-center">77.8</td>
                                        <td class="px-4 py-3 text-sm text-center">98</td>
                                        <td class="px-4 py-3 text-sm text-center font-semibold">91.8</td>
                                        <td class="px-4 py-3 text-sm text-center text-green-600 font-semibold">100%</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-3 text-sm font-medium text-gray-900">Tersedia peringatan dini bencana (%)</td>
                                        <td class="px-4 py-3 text-sm text-center">36.2</td>
                                        <td class="px-4 py-3 text-sm text-center">23.9</td>
                                        <td class="px-4 py-3 text-sm text-center">21.2</td>
                                        <td class="px-4 py-3 text-sm text-center">38.2</td>
                                        <td class="px-4 py-3 text-sm text-center">16.7</td>
                                        <td class="px-4 py-3 text-sm text-center">28.9</td>
                                        <td class="px-4 py-3 text-sm text-center">6.7</td>
                                        <td class="px-4 py-3 text-sm text-center">13</td>
                                        <td class="px-4 py-3 text-sm text-center">18.5</td>
                                        <td class="px-4 py-3 text-sm text-center">30</td>
                                        <td class="px-4 py-3 text-sm text-center font-semibold">25</td>
                                        <td class="px-4 py-3 text-sm text-center font-semibold">-</td>
                                    </tr>
                                    <tr class="bg-gray-50">
                                        <td class="px-4 py-3 text-sm font-medium text-gray-900">Indeks risiko bencana (IRB) seluruh RT (%)</td>
                                        <td class="px-4 py-3 text-sm text-center">27.6</td>
                                        <td class="px-4 py-3 text-sm text-center">23.9</td>
                                        <td class="px-4 py-3 text-sm text-center">30.3</td>
                                        <td class="px-4 py-3 text-sm text-center">44.1</td>
                                        <td class="px-4 py-3 text-sm text-center">19</td>
                                        <td class="px-4 py-3 text-sm text-center">31.6</td>
                                        <td class="px-4 py-3 text-sm text-center">6.7</td>
                                        <td class="px-4 py-3 text-sm text-center">17.4</td>
                                        <td class="px-4 py-3 text-sm text-center">7.4</td>
                                        <td class="px-4 py-3 text-sm text-center">32</td>
                                        <td class="px-4 py-3 text-sm text-center font-semibold">25</td>
                                        <td class="px-4 py-3 text-sm text-center text-green-600 font-semibold">0%</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-3 text-sm font-medium text-gray-900">Tersedia peringatan dini bencana (2) (%)</td>
                                        <td class="px-4 py-3 text-sm text-center">37.9</td>
                                        <td class="px-4 py-3 text-sm text-center">28.3</td>
                                        <td class="px-4 py-3 text-sm text-center">27.3</td>
                                        <td class="px-4 py-3 text-sm text-center">38.2</td>
                                        <td class="px-4 py-3 text-sm text-center">16.7</td>
                                        <td class="px-4 py-3 text-sm text-center">44.7</td>
                                        <td class="px-4 py-3 text-sm text-center">13.3</td>
                                        <td class="px-4 py-3 text-sm text-center">26.1</td>
                                        <td class="px-4 py-3 text-sm text-center">18.5</td>
                                        <td class="px-4 py-3 text-sm text-center">32</td>
                                        <td class="px-4 py-3 text-sm text-center font-semibold">29.2</td>
                                        <td class="px-4 py-3 text-sm text-center text-green-600 font-semibold">100%</td>
                                    </tr>
                                    <tr class="bg-gray-50">
                                        <td class="px-4 py-3 text-sm font-medium text-gray-900">Terdapat pengolahan dan penanganan sampah keluarga (%)</td>
                                        <td class="px-4 py-3 text-sm text-center">77.6</td>
                                        <td class="px-4 py-3 text-sm text-center">82.6</td>
                                        <td class="px-4 py-3 text-sm text-center">93.9</td>
                                        <td class="px-4 py-3 text-sm text-center">94.1</td>
                                        <td class="px-4 py-3 text-sm text-center">85.7</td>
                                        <td class="px-4 py-3 text-sm text-center">84.2</td>
                                        <td class="px-4 py-3 text-sm text-center">90</td>
                                        <td class="px-4 py-3 text-sm text-center">78.3</td>
                                        <td class="px-4 py-3 text-sm text-center">81.5</td>
                                        <td class="px-4 py-3 text-sm text-center">90</td>
                                        <td class="px-4 py-3 text-sm text-center font-semibold">85.5</td>
                                        <td class="px-4 py-3 text-sm text-center text-green-600 font-semibold">100%</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-3 text-sm font-medium text-gray-900">Terdapat taman/lapangan (%)</td>
                                        <td class="px-4 py-3 text-sm text-center">72.4</td>
                                        <td class="px-4 py-3 text-sm text-center">89.1</td>
                                        <td class="px-4 py-3 text-sm text-center">87.9</td>
                                        <td class="px-4 py-3 text-sm text-center">73.5</td>
                                        <td class="px-4 py-3 text-sm text-center">71.4</td>
                                        <td class="px-4 py-3 text-sm text-center">76.3</td>
                                        <td class="px-4 py-3 text-sm text-center">70</td>
                                        <td class="px-4 py-3 text-sm text-center">69.6</td>
                                        <td class="px-4 py-3 text-sm text-center">88.9</td>
                                        <td class="px-4 py-3 text-sm text-center">98</td>
                                        <td class="px-4 py-3 text-sm text-center font-semibold">80.3</td>
                                        <td class="px-4 py-3 text-sm text-center text-green-600 font-semibold">100%</td>
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
                            <h4 class="text-xl font-bold mb-2 text-gray-800">1. Rumah Kumuh (Standar: 0%)</h4>
                            <ul class="list-disc list-inside space-y-1">
                                <li><strong>RW Terbaik (terendah):</strong> RW 3 (15,2%)</li>
                                <li><strong>RW Terburuk (tertinggi):</strong> RW 9 (48,1%)</li>
                                <li><strong>Status:</strong> Semua RW (1-10) belum memenuhi standar 0%.</li>
                            </ul>
                        </div>

                        <div class="p-6 border-l-4 border-gray-400 bg-gray-50 rounded-r-lg fade-in-right stagger-animation" style="--delay: 0.3s;" >
                            <h4 class="text-xl font-bold mb-2 text-gray-800">2. Pengamanan dilaksanakan di 100% RT (Standar: 100%)</h4>
                            <ul class="list-disc list-inside space-y-1">
                                <li><strong>RW Paling Tinggi:</strong> RW 2 (89,1%)</li>
                                <li><strong>RW Terendah:</strong> RW 7 (33%)</li>
                                <li><strong>Status:</strong> Semua RW belum memenuhi standar 100%.</li>
                            </ul>
                        </div>
                        
                        <div class="p-6 border-l-4 border-gray-400 bg-gray-50 rounded-r-lg fade-in-right stagger-animation" style="--delay: 0.3s;">
                            <h4 class="text-xl font-bold mb-2 text-gray-800">3. Keluarga/orang tua/perempuan/difabel pengguna moda transportasi umum (Standar: &gt;50%)</h4>
                            <ul class="list-disc list-inside space-y-1">
                                <li><strong>Memenuhi (&gt;50%):</strong> RW 1 (91,4%)</li>
                                <li><strong>Belum Memenuhi:</strong> RW 2, 3, 4, 5, 6, 7, 8, 9, 10.</li>
                                <li><strong>RW Terendah:</strong> RW 9 (0%) dan RW 5 (0%).</li>
                            </ul>
                        </div>

                        <div class="p-6 border-l-4 border-gray-400 bg-gray-50 rounded-r-lg fade-in-right stagger-animation" style="--delay: 0.3s;">
                            <h4 class="text-xl font-bold mb-2 text-gray-800">4. Penduduk yang pindah ke kota (Standar: &lt;15%)</h4>
                            <ul class="list-disc list-inside space-y-1">
                                <li><strong>Memenuhi (&lt;15%):</strong> RW 5 (11,9%), RW 6 (7,9%), RW 8 (4,3%), RW 10 (10%).</li>
                                <li><strong>Belum Memenuhi (≥15%):</strong> RW 1 (22,4%), RW 2 (26,1%), RW 3 (18,2%), RW 4 (38,2%), RW 7 (23%), RW 9 (37%).</li>
                            </ul>
                        </div>

                        <div class="p-6 border-l-4 border-gray-400 bg-gray-50 rounded-r-lg fade-in-right stagger-animation" style="--delay: 0.3s;">
                            <h4 class="text-xl font-bold mb-2 text-gray-800">5. Swasta/organisasi kemasyarakatan cangkrukan untuk pembangunan desa (Tidak Ada Standar)</h4>
                            <ul class="list-disc list-inside space-y-1">
                                <li><strong>RW Tertinggi:</strong> RW 1 (96.6%)</li>
                                <li><strong>RW Terendah:</strong> RW 7 (50%)</li>
                            </ul>
                        </div>

                        <div class="p-6 border-l-4 border-gray-400 bg-gray-50 rounded-r-lg fade-in-right stagger-animation" style="--delay: 0.3s;">
                            <h4 class="text-xl font-bold mb-2 text-gray-800">6. Budaya yang dilestarikan (Standar: 100%)</h4>
                            <ul class="list-disc list-inside space-y-1">
                                <li><strong>RW Paling Tinggi:</strong> RW 10 (98%) dan RW 3 (97%).</li>
                                <li><strong>RW Terendah:</strong> RW 4 (79,4%).</li>
                                <li><strong>Status:</strong> Semua RW belum memenuhi standar 100%.</li>
                            </ul>
                        </div>
                        
                        <div class="p-6 border-l-4 border-gray-400 bg-gray-50 rounded-r-lg fade-in-right stagger-animation" style="--delay: 0.3s;">
                            <h4 class="text-xl font-bold mb-2 text-gray-800">7. Tersedia peringatan dini bencana (Tidak Ada Standar)</h4>
                            <ul class="list-disc list-inside space-y-1">
                                <li><strong>RW Tertinggi:</strong> RW 4 (38,2%)</li>
                                <li><strong>RW Terendah:</strong> RW 7 (6,7%)</li>
                            </ul>
                        </div>

                        <div class="p-6 border-l-4 border-gray-400 bg-gray-50 rounded-r-lg fade-in-right stagger-animation" style="--delay: 0.3s;">
                            <h4 class="text-xl font-bold mb-2 text-gray-800">8. Indeks Risiko Bencana (IRB) Seluruh RT (Standar: 0%)</h4>
                            <ul class="list-disc list-inside space-y-1">
                                <li><strong>RW Terbaik (terendah):</strong> RW 9 (7,4%) dan RW 8 (17,4%).</li>
                                <li><strong>RW Terburuk:</strong> RW 4 (44,1%).</li>
                                <li><strong>Status:</strong> Semua RW belum memenuhi standar 0%.</li>
                            </ul>
                        </div>

                        <div class="p-6 border-l-4 border-gray-400 bg-gray-50 rounded-r-lg fade-in-right stagger-animation" style="--delay: 0.3s;">
                            <h4 class="text-xl font-bold mb-2 text-gray-800">9. Tersedia peringatan dini bencana (Standar: 100%)</h4>
                            <ul class="list-disc list-inside space-y-1">
                                <li><strong>RW Tertinggi:</strong> RW 6 (44,7%)</li>
                                <li><strong>RW Terendah:</strong> RW 7 (13,3%)</li>
                                <li><strong>Status:</strong> Semua RW belum memenuhi standar 100%.</li>
                            </ul>
                        </div>

                        <div class="p-6 border-l-4 border-gray-400 bg-gray-50 rounded-r-lg fade-in-right stagger-animation" style="--delay: 0.3s;">
                            <h4 class="text-xl font-bold mb-2 text-gray-800">10. Terdapat pengolahan sampah/penanganan sampah keluarga (Standar: 100%)</h4>
                            <ul class="list-disc list-inside space-y-1">
                                <li><strong>RW Tertinggi:</strong> RW 4 (94,1%)</li>
                                <li><strong>RW Terendah:</strong> RW 8 (78,3%)</li>
                                <li><strong>Status:</strong> Semua RW belum memenuhi standar 100%.</li>
                            </ul>
                        </div>

                        <div class="p-6 border-l-4 border-gray-400 bg-gray-50 rounded-r-lg fade-in-right stagger-animation" style="--delay: 0.3s;">
                            <h4 class="text-xl font-bold mb-2 text-gray-800">11. Terdapat taman/lapangan (Standar: 100%)</h4>
                            <ul class="list-disc list-inside space-y-1">
                                <li><strong>RW Tertinggi:</strong> RW 10 (98%)</li>
                                <li><strong>RW Terendah:</strong> RW 7 (70%)</li>
                                <li><strong>Status:</strong> Semua RW belum memenuhi standar 100%.</li>
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

            const text = "SURVEILANCE SDGs 11";
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