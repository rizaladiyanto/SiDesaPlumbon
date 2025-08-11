<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $berita->judul }} - Desa Plumbon</title>
    <meta name="description" content="{{ $berita->getExcerpt(160) }}">
    @vite('resources/css/app.css')

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet" />
</head>

<body class="min-h-screen bg-gray-50">
    <header class="relative z-50">
        <nav class="fixed top-0 w-full p-4 bg-opacity-90 bg-gray-800 transition-all duration-300">
            <div class="max-w-7xl mx-auto flex justify-between items-center">
                <!-- Logo -->
                <div class="flex items-center space-x-3">
                    <img src="{{ asset('images/logo-undip.png') }}" alt="logo" class="w-full h-12 object-cover">
                    <img src="{{ asset('images/logo-kkn.png') }}" alt="logo" class="w-full h-12 object-cover">
                    <img src="{{ asset('images/logo-plumbon.png') }}" alt="logo" class="w-full h-12 object-cover">
                </div>

                <!-- Desktop Navigation Menu -->
                <ul class="hidden md:flex space-x-10 text-white">
                    <li><a href="/" class="hover:text-yellow-400 transition duration-300 {{ Request::is('/') ? 'border-b-2 border-white' : '' }}">Beranda</a></li>
                    <li><a href="/profil" class="hover:text-yellow-400 transition duration-300 {{ Request::is('profil') ? 'border-b-2 border-white' : '' }}">Profil</a></li>

                    <!-- Dropdown Data Surveilance -->
                    <li class="relative dropdown-parent">
                        <a href="#" class="flex items-center space-x-1 hover:text-yellow-400 transition duration-300">
                            <span>Data Surveilance</span>
                            <svg class="w-4 h-4 transition-transform duration-150 dropdown-arrow" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </a>
                        <div class="dropdown-menu absolute left-0 top-full w-40 opacity-0 invisible transition-all duration-200 ease-in-out transform translate-y-2 z-50">
                            <div class="bg-white text-black shadow-xl rounded-lg overflow-hidden mt-2 border border-gray-200">
                                <a href="/surveilance/sdgs3" class="block px-4 py-3 hover:bg-gray-100 transition duration-200 border-b border-gray-100">SDG 3</a>
                                <a href="/surveilance/sdgs6" class="block px-4 py-3 hover:bg-gray-100 transition duration-200 border-b border-gray-100">SDG 6</a>
                                <a href="/surveilance/sdgs11" class="block px-4 py-3 hover:bg-gray-100 transition duration-200">SDG 11</a>
                            </div>
                        </div>
                    </li>

                    <!-- Dropdown Data Sumber Air -->
                    <li class="relative dropdown-parent">
                        <a href="#" class="flex items-center space-x-1 hover:text-yellow-400 transition duration-300">
                            <span>Data Sumber Air</span>
                            <svg class="w-4 h-4 transition-transform duration-150 dropdown-arrow" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </a>
                        <div class="dropdown-menu absolute left-0 top-full w-48 opacity-0 invisible transition-all duration-200 ease-in-out transform translate-y-2 z-50">
                            <div class="bg-white text-black shadow-xl rounded-lg overflow-hidden mt-2 border border-gray-200">
                                <a href="/sumberair/MAT" class="block px-4 py-3 hover:bg-gray-100 transition duration-200 border-b border-gray-100">Muka Air Tanah</a>
                                <a href="/sumberair/KAT" class="block px-4 py-3 hover:bg-gray-100 transition duration-200 border-b border-gray-100">Kualitas Air Tanah</a>
                                <a href="/sumberair/petakekeringan" class="block px-4 py-3 hover:bg-gray-100 transition duration-200">Peta Kekeringan</a>
                            </div>
                        </div>
                    </li>

                    <!-- Dropdown Layanan -->
                    <li class="relative dropdown-parent">
                        <a href="#" class="flex items-center space-x-1 hover:text-yellow-400 transition duration-300">
                            <span>Layanan</span>
                            <svg class="w-4 h-4 transition-transform duration-150 dropdown-arrow" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </a>
                        <div class="dropdown-menu absolute left-0 top-full w-56 opacity-0 invisible transition-all duration-200 ease-in-out transform translate-y-2 z-50">
                            <div class="bg-white text-black shadow-xl rounded-lg overflow-hidden mt-2 border border-gray-200">
                                <a href="/layanan/berita" class="block px-4 py-3 hover:bg-gray-100 transition duration-200 border-b border-gray-100">Berita</a>
                                <a href="/layanan" class="block px-4 py-3 hover:bg-gray-100 transition duration-200 border-b border-gray-100">Layanan</a>
                            </div>
                        </div>
                    </li>

                    <li><a href="/produk-kkn" class="hover:text-yellow-400 transition duration-300 {{ Request::is('produk-kkn') ? 'border-b-2 border-white' : '' }}">Produk KKN</a></li>
                </ul>

                <!-- Mobile Menu Button -->
                <button id="mobile-menu-button" class="md:hidden text-white focus:outline-none">
                    <svg id="hamburger-icon" class="w-6 h-6 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                    <svg id="close-icon" class="w-6 h-6 hidden transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>

            <!-- Mobile Menu -->
            <div id="mobile-menu" class="md:hidden absolute top-full left-0 right-0 bg-black bg-opacity-95 backdrop-blur-sm transform translate-y-[-100%] opacity-0 invisible transition-all duration-300 ease-in-out">
                <div class="px-4 py-6 space-y-1">
                    <!-- Beranda -->
                    <a href="/" class="block px-4 py-3 text-white hover:text-yellow-400 hover:bg-white hover:bg-opacity-10 rounded-md transition-all duration-300 {{ Request::is('/') ? 'bg-white bg-opacity-20 text-yellow-400' : '' }}">
                        Beranda
                    </a>

                    <!-- Profil -->
                    <a href="/profil" class="block px-4 py-3 text-white hover:text-yellow-400 hover:bg-white hover:bg-opacity-10 rounded-md transition-all duration-300 {{ Request::is('profil') ? 'bg-white bg-opacity-20 text-yellow-400' : '' }}">
                        Profil
                    </a>

                    <!-- Data Surveilance Dropdown -->
                    <div class="mobile-dropdown">
                        <button class="w-full flex justify-between items-center px-4 py-3 text-white hover:text-yellow-400 hover:bg-white hover:bg-opacity-10 rounded-md transition-all duration-300 focus:outline-none mobile-dropdown-trigger">
                            <span>Data Surveilance</span>
                            <svg class="w-4 h-4 transition-transform duration-300 mobile-dropdown-arrow" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div class="mobile-dropdown-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                            <div class="pl-8 py-2 space-y-1">
                                <a href="/surveilance/sdgs3" class="block px-4 py-2 text-gray-300 hover:text-yellow-400 hover:bg-white hover:bg-opacity-10 rounded-md transition-all duration-300">
                                    SDG 3
                                </a>
                                <a href="/surveilance/sdgs6" class="block px-4 py-2 text-gray-300 hover:text-yellow-400 hover:bg-white hover:bg-opacity-10 rounded-md transition-all duration-300">
                                    SDG 6
                                </a>
                                <a href="/surveilance/sdgs11" class="block px-4 py-2 text-gray-300 hover:text-yellow-400 hover:bg-white hover:bg-opacity-10 rounded-md transition-all duration-300">
                                    SDG 11
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Data Sumber Air Dropdown -->
                    <div class="mobile-dropdown">
                        <button class="w-full flex justify-between items-center px-4 py-3 text-white hover:text-yellow-400 hover:bg-white hover:bg-opacity-10 rounded-md transition-all duration-300 focus:outline-none mobile-dropdown-trigger">
                            <span>Data Sumber Air</span>
                            <svg class="w-4 h-4 transition-transform duration-300 mobile-dropdown-arrow" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div class="mobile-dropdown-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                            <div class="pl-8 py-2 space-y-1">
                                <a href="/sumberair/MAT" class="block px-4 py-2 text-gray-300 hover:text-yellow-400 hover:bg-white hover:bg-opacity-10 rounded-md transition-all duration-300">
                                    Muka Air Tanah
                                </a>
                                <a href="/sumberair/KAT" class="block px-4 py-2 text-gray-300 hover:text-yellow-400 hover:bg-white hover:bg-opacity-10 rounded-md transition-all duration-300">
                                    Kualitas Air Tanah
                                </a>
                                <a href="/sumberair/petakekeringan" class="block px-4 py-2 text-gray-300 hover:text-yellow-400 hover:bg-white hover:bg-opacity-10 rounded-md transition-all duration-300">
                                    Peta Kekeringan
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Layanan Dropdown -->
                    <div class="mobile-dropdown">
                        <button class="w-full flex justify-between items-center px-4 py-3 text-white hover:text-yellow-400 hover:bg-white hover:bg-opacity-10 rounded-md transition-all duration-300 focus:outline-none mobile-dropdown-trigger">
                            <span>Layanan</span>
                            <svg class="w-4 h-4 transition-transform duration-300 mobile-dropdown-arrow" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div class="mobile-dropdown-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                            <div class="pl-8 py-2 space-y-1">
                                <a href="/layanan/berita" class="block px-4 py-2 text-gray-300 hover:text-yellow-400 hover:bg-white hover:bg-opacity-10 rounded-md transition-all duration-300">
                                    Berita
                                </a>
                                <a href="/layanan" class="block px-4 py-2 text-gray-300 hover:text-yellow-400 hover:bg-white hover:bg-opacity-10 rounded-md transition-all duration-300">
                                    Layanan
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Produk KKN -->
                    <a href="/produk-kkn" class="block px-4 py-3 text-white hover:text-yellow-400 hover:bg-white hover:bg-opacity-10 rounded-md transition-all duration-300 {{ Request::is('produk-kkn') ? 'bg-white bg-opacity-20 text-yellow-400' : '' }}">
                        Produk KKN
                    </a>
                </div>
            </div>
        </nav>
    </header>

    <main class="pt-20">
        <!-- Article Header -->
        <section class="bg-white">
            <div class="max-w-5xl mx-auto px-6 py-8">
                <!-- Category Badge -->
                @if($berita->kategori)
                    <div class="mb-4">
                        <span class="inline-block bg-blue-100 text-blue-800 text-sm font-medium px-3 py-1 rounded-full">
                            {{ $berita->kategori }}
                        </span>
                    </div>
                @endif

                <!-- Article Title -->
                <h1 class="text-3xl md:text-4xl font-bold text-gray-900 leading-tight mb-6">
                    {{ $berita->judul }}
                </h1>

                <!-- Article Meta -->
                <div class="flex items-center text-sm text-gray-600 mb-8 pb-6 border-b border-gray-200">
                    <div class="flex items-center space-x-4">
                        <span class="flex items-center">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3a1 1 0 011-1h6a1 1 0 011 1v4M3 10h18M5 10v10a1 1 0 001 1h12a1 1 0 001 1V10"></path>
                            </svg>
                            {{ $berita->tanggal_publikasi->locale('id')->translatedFormat('l, d F Y') }}
                        </span>
                        <span class="flex items-center">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            {{ $berita->tanggal_publikasi->locale('id')->translatedFormat('H:i') }} WIB
                        </span>
                    </div>
                </div>
            </div>
        </section>

        <!-- Article Image -->
        @if($berita->gambar)
        <section class="bg-white">
            <div class="max-w-5xl mx-auto px-6">
                <div>
                    <img src="{{ asset('storage/' . $berita->gambar) }}" 
                         alt="{{ $berita->judul }}" 
                         class="w-full h-72 md:h-96 object-cover rounded-lg shadow-lg">
                </div>
            </div>
        </section>
        @endif

        <!-- Article Content -->
        <section class="bg-white py-12">
            <div class="max-w-5xl mx-auto px-6">
                <article class="prose prose-lg max-w-none text-justify">
                    {!! $berita->konten !!}
                </article>

                <!-- Article Footer -->
                <div class="mt-12 pt-8 border-t border-gray-200">
                    <!-- Tags Section (if you want to add tags later) -->
                    <div class="mb-8">
                        <h3 class="text-lg font-semibold text-gray-900 mb-4">Kategori</h3>
                        @if($berita->kategori)
                        <span class="inline-block bg-gray-100 text-gray-800 text-sm font-medium px-3 py-1 rounded-full mr-2">
                            {{ $berita->kategori }}
                        </span>
                        @endif
                    </div>

                    <!-- Share Buttons -->
                    <div class="flex items-center justify-between flex-wrap gap-4">
                        <div>
                            <h3 class="text-lg font-semibold text-gray-900 mb-2">Bagikan Artikel</h3>
                            <div class="flex space-x-3">
                                <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(request()->fullUrl()) }}" 
                                   target="_blank" 
                                   class="flex items-center px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition duration-200">
                                    <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                                    </svg>
                                    Facebook
                                </a>
                                <a href="https://twitter.com/intent/tweet?text={{ urlencode($berita->judul) }}&url={{ urlencode(request()->fullUrl()) }}" 
                                   target="_blank" 
                                   class="flex items-center px-4 py-2 bg-blue-400 text-white rounded-lg hover:bg-blue-500 transition duration-200">
                                    <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/>
                                    </svg>
                                    Twitter
                                </a>
                                <a href="https://wa.me/?text={{ urlencode($berita->judul . ' - ' . request()->fullUrl()) }}" 
                                   target="_blank" 
                                   class="flex items-center px-4 py-2 bg-green-600 text-white rounded-lg hover:bg-green-700 transition duration-200">
                                    <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.55-.01-.18 0-.47.068-.718.34-.297.297-1.128 1.1-1.128 2.683 0 1.584 1.155 3.117 1.316 3.334.161.218 2.273 3.467 5.507 4.863.77.331 1.371.528 1.841.676.773.245 1.477.21 2.033.127.62-.092 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0020.885 3.488"/>
                                    </svg>
                                    WhatsApp
                                </a>
                            </div>
                        </div>

                        <!-- Back to List Button -->
                        <div>
                            <a href="/layanan/berita" 
                               class="inline-flex items-center px-6 py-3 bg-gray-900 text-white rounded-lg hover:bg-gray-700 transition duration-200">
                                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                                </svg>
                                Kembali ke Daftar Berita
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Related Articles Section -->
        @if($relatedBerita && $relatedBerita->count() > 0)
            <section class="bg-gray-50 py-12">
                <div class="max-w-6xl mx-auto px-6">
                    <h2 class="text-2xl font-bold text-gray-900 mb-8">Berita Terkait</h2>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        @foreach($relatedBerita as $related)
                            <article class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition duration-200">
                                @if($related->gambar)
                                    <div class="h-48 overflow-hidden">
                                        <img src="{{ asset('storage/' . $related->gambar) }}" 
                                            alt="{{ $related->judul }}" 
                                            class="w-full h-full object-cover hover:scale-105 transition duration-200">
                                    </div>
                                @endif
                                <div class="p-6">
                                    <div class="flex items-center text-sm text-gray-600 mb-2">
                                        <span>{{ $related->tanggal_publikasi->locale('id')->translatedFormat('d F Y') }}</span>
                                        @if($related->kategori)
                                            <span class="mx-2">•</span>
                                            <span class="text-blue-600">{{ $related->kategori }}</span>
                                        @endif
                                    </div>
                                    <h3 class="font-semibold text-gray-900 mb-3 line-clamp-2">
                                        <a href="/layanan/berita/{{ $related->id }}" class="hover:text-blue-600 transition duration-200">
                                            {{ $related->judul }}
                                        </a>
                                    </h3>
                                    <p class="text-gray-600 text-sm mb-4 line-clamp-3">
                                        {{ $related->getExcerpt(120) }}
                                    </p>
                                    <a href="/layanan/berita/{{ $related->id }}" 
                                    class="text-blue-600 text-sm font-medium hover:text-blue-800 transition duration-200">
                                        Baca Selengkapnya →
                                    </a>
                                </div>
                            </article>
                        @endforeach
                    </div>
                </div>
            </section>
        @endif
    </main>

    <x-footer />

    <script>
    document.addEventListener('DOMContentLoaded', function() {
        // Mobile menu toggle
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');
        const hamburgerIcon = document.getElementById('hamburger-icon');
        const closeIcon = document.getElementById('close-icon');
        let isMobileMenuOpen = false;

        mobileMenuButton.addEventListener('click', function() {
            isMobileMenuOpen = !isMobileMenuOpen;
            
            if (isMobileMenuOpen) {
                // Show mobile menu
                mobileMenu.classList.remove('translate-y-[-100%]', 'opacity-0', 'invisible');
                mobileMenu.classList.add('translate-y-0', 'opacity-100', 'visible');
                
                // Switch icons
                hamburgerIcon.classList.add('hidden');
                closeIcon.classList.remove('hidden');
                
                // Prevent body scroll
                document.body.style.overflow = 'hidden';
            } else {
                // Hide mobile menu
                mobileMenu.classList.add('translate-y-[-100%]', 'opacity-0', 'invisible');
                mobileMenu.classList.remove('translate-y-0', 'opacity-100', 'visible');
                
                // Switch icons
                hamburgerIcon.classList.remove('hidden');
                closeIcon.classList.add('hidden');
                
                // Allow body scroll
                document.body.style.overflow = '';
            }
        });

        // Mobile dropdown functionality
        const mobileDropdownTriggers = document.querySelectorAll('.mobile-dropdown-trigger');
        
        mobileDropdownTriggers.forEach(trigger => {
            trigger.addEventListener('click', function(e) {
                e.preventDefault();
                
                const dropdown = this.parentElement;
                const content = dropdown.querySelector('.mobile-dropdown-content');
                const arrow = dropdown.querySelector('.mobile-dropdown-arrow');
                const isOpen = content.style.maxHeight && content.style.maxHeight !== '0px';
                
                // Close other dropdowns
                mobileDropdownTriggers.forEach(otherTrigger => {
                    if (otherTrigger !== this) {
                        const otherDropdown = otherTrigger.parentElement;
                        const otherContent = otherDropdown.querySelector('.mobile-dropdown-content');
                        const otherArrow = otherDropdown.querySelector('.mobile-dropdown-arrow');
                        
                        otherContent.style.maxHeight = '0px';
                        otherArrow.style.transform = 'rotate(0deg)';
                    }
                });
                
                // Toggle current dropdown
                if (isOpen) {
                    content.style.maxHeight = '0px';
                    arrow.style.transform = 'rotate(0deg)';
                } else {
                    content.style.maxHeight = content.scrollHeight + 'px';
                    arrow.style.transform = 'rotate(180deg)';
                }
            });
        });

        // Desktop dropdown functionality (existing code)
        const dropdownParents = document.querySelectorAll('.dropdown-parent');
        
        dropdownParents.forEach(parent => {
            const menu = parent.querySelector('.dropdown-menu');
            const arrow = parent.querySelector('.dropdown-arrow');
            
            parent.addEventListener('mouseenter', function() {
                menu.classList.remove('opacity-0', 'invisible', 'translate-y-2');
                menu.classList.add('opacity-100', 'visible', 'translate-y-0');
                arrow.style.transform = 'rotate(180deg)';
            });
            
            parent.addEventListener('mouseleave', function() {
                menu.classList.add('opacity-0', 'invisible', 'translate-y-2');
                menu.classList.remove('opacity-100', 'visible', 'translate-y-0');
                arrow.style.transform = 'rotate(0deg)';
            });
        });

        // Close mobile menu when clicking on links
        const mobileMenuLinks = document.querySelectorAll('#mobile-menu a');
        mobileMenuLinks.forEach(link => {
            link.addEventListener('click', function() {
                // Close mobile menu
                isMobileMenuOpen = false;
                mobileMenu.classList.add('translate-y-[-100%]', 'opacity-0', 'invisible');
                mobileMenu.classList.remove('translate-y-0', 'opacity-100', 'visible');
                
                // Switch icons
                hamburgerIcon.classList.remove('hidden');
                closeIcon.classList.add('hidden');
                
                // Allow body scroll
                document.body.style.overflow = '';
            });
        });

        // Close mobile menu on window resize
        window.addEventListener('resize', function() {
            if (window.innerWidth >= 768 && isMobileMenuOpen) {
                isMobileMenuOpen = false;
                mobileMenu.classList.add('translate-y-[-100%]', 'opacity-0', 'invisible');
                mobileMenu.classList.remove('translate-y-0', 'opacity-100', 'visible');
                
                hamburgerIcon.classList.remove('hidden');
                closeIcon.classList.add('hidden');
                
                document.body.style.overflow = '';
            }
        });
    });
    </script>
</body>
</html>