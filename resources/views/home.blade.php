<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite('resources/css/app.css')
        <title>Beranda - SiDesaPlumbon</title>
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet" />
    </head>
    <body class="min-h-screen bg-gray-100">
        <x-header />

        <main>
            <!-- Hero Section -->
            <section id="home" class="relative w-full h-screen hero-bg flex items-center justify-center"
                style="background-image: url('{{ asset('images/hero-home.jpg') }}'); background-size: cover; background-position: center; background-repeat: no-repeat;">
                <!-- Dark overlay layers - FIXED -->
                <div class="absolute inset-0 top-0 left-0 bg-gradient-to-b from-black via-black/50 to-transparent h-56 opacity-40 z-10"></div>
                <div class="absolute bottom-0 left-0 w-full h-48 bg-gradient-to-t from-black via-black/50 to-transparent z-20"></div>
                
                <div id="typingEffect" class="relative z-30 text-center text-4xl text-white px-6 md:px-12 max-w-4xl md:text-6xl font-bold tracking-wide typing-cursor">
                </div>

                <div class="flex pb-16 ">

                </div>
            </section>

            <section class="py-16 bg-white">
                <div class="max-w-7xl mx-auto px-6">
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
                        <a href="{{ route('download.formulir.surveilance') }}" class="text-center group transform transition-all duration-300 hover:scale-105 fade-in-up stagger-animation" style="--delay: 0.1s;">
                            <div class="w-16 h-16 bg-blue-500 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:bg-blue-600 transition-colors duration-300 shadow-lg group-hover:shadow-xl">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                                </svg>
                            </div>
                            <h3 class="font-semibold mb-2 group-hover:text-blue-600 transition-colors duration-300">Formulir Surveilance</h3>
                        </a>

                        <a href="/layanan/berita" class="text-center group transform transition-all duration-300 hover:scale-105 fade-in-up stagger-animation" style="--delay: 0.2s;">
                            <div class="w-16 h-16 bg-green-500 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:bg-green-600 transition-colors duration-300 shadow-lg group-hover:shadow-xl">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                </svg>
                            </div>
                            <h3 class="font-semibold mb-2 group-hover:text-green-600 transition-colors duration-300">Berita Desa</h3>
                        </a>
                        
                        <a href="/layanan" class="text-center group transform transition-all duration-300 hover:scale-105 fade-in-up stagger-animation" style="--delay: 0.3s;">
                            <div class="w-16 h-16 bg-yellow-500 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:bg-yellow-600 transition-colors duration-300 shadow-lg group-hover:shadow-xl">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                                </svg>
                            </div>
                            <h3 class="font-semibold mb-2 group-hover:text-yellow-600 transition-colors duration-300">Layanan</h3>
                        </a>
                        
                        <a href="#" class="text-center group transform transition-all duration-300 hover:scale-105 fade-in-up stagger-animation" style="--delay: 0.4s;">
                            <div class="w-16 h-16 bg-red-500 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:bg-red-600 transition-colors duration-300 shadow-lg group-hover:shadow-xl">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                </svg>
                            </div>
                            <h3 class="font-semibold mb-2 group-hover:text-red-600 transition-colors duration-300">Kontak</h3>
                        </a>
                    </div>
                </div>
            </section>

            <!-- About Section -->
            <section id="profil" class="py-16 bg-gray-50">
                <div class="max-w-7xl mx-auto px-6">
                    <div class="text-center mb-12 fade-in-up">
                        <h2 class="text-3xl font-bold text-gray-800 mb-4">Tentang Kami</h2>
                        <p class="text-lg text-gray-600 max-w-5xl mx-auto text-justify">
                            {!! nl2br(e(strip_tags($home->about))) !!}
                        </p>
                    </div>
                </div>
            </section>

            <!-- Video Profile Section -->
            <section class="py-16 bg-white">
                <div class="max-w-7xl mx-auto px-6 fade-in-right">
                    <div class="text-center mb-8">
                        <h2 class="text-3xl font-bold text-gray-800 mb-4">Video Profil Desa</h2>
                    </div>
                    
                    <div class="flex justify-center">
                        <iframe 
                            width="1000" 
                            height="500" 
                            src="https://www.youtube.com/embed/WQvUW4QdWqA?si=jlYxMJ9btNEwnnu_" 
                            title="YouTube video player" 
                            frameborder="0" 
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                            referrerpolicy="strict-origin-when-cross-origin" 
                            allowfullscreen
                        >
                        </iframe>
                    </div>
                </div>
            </section>
            
            <!-- News and Events Section -->
            <section class="py-16 bg-gray-50">
                <div class="max-w-7xl mx-auto px-6">
                    <div class="text-center mb-12 fade-in-up">
                        <h2 class="text-3xl font-bold text-gray-800 mb-4">Berita Terkini</h2>
                    </div>
                    
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                        @foreach($berita as $item)
                            <div class="bg-white rounded-lg shadow-md overflow-hidden fade-in-up stagger-animation" style="--delay: 0.5s;">
                                <div class="h-48 w-full overflow-hidden">
                                    <!-- Gambar berita -->
                                    <img src="{{ asset('storage/' . $item->gambar) }}" alt="{{ $item->judul }}" class="w-full h-full object-cover">
                                </div>
                                <div class="p-4">
                                    <!-- Tanggal publikasi -->
                                    <p class="text-xs text-gray-400 mb-2">{{ $item->tanggal_publikasi->format('d F Y') }}</p>
                                    <!-- Judul berita -->
                                    <h4 class="font-semibold mb-2">{{ $item->judul }}</h4>
                                    <!-- Konten berita (ringkasan) -->
                                    <p class="text-sm text-gray-600 mb-4">
                                        {{ Str::limit(strip_tags($item->konten), 100) }}  <!-- Menampilkan 100 karakter pertama -->
                                    </p>
                                    <!-- Tombol Baca Selengkapnya -->
                                    <a href="{{ route('berita.show', $item->id) }}" class="text-gray-800 text-sm font-medium">Baca Selengkapnya</a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="flex justify-end mt-8">
                        <a href="/layanan/berita" class="inline-block bg-gray-900 text-white px-6 py-3 rounded-lg hover:bg-slate-800 transition duration-300">
                            Lihat lebih banyak
                        </a>
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

            // Typing effect
            const text = "SELAMAT DATANG DI DESA PLUMBON!";
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

            // Trigger animations when elements come into view
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