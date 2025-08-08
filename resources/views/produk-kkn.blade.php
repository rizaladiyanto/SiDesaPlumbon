<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite('resources/css/app.css')

        <title>Produk KKN-T 29</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet" />
    </head>
    <body class="min-h-screen bg-gray-100">
        <!-- Header with Navigation -->
        <header class="relative z-50">
            <nav class="fixed top-0 w-full p-4 bg-opacity-20 transition-all duration-300">
                <div class="max-w-7xl mx-auto flex justify-between items-center">
                    <!-- Logo -->
                    <div class="flex items-center space-x-3">
                        <img src="images/logo-undip.png" alt="logo" class="w-full h-12 object-cover">
                        <img src="images/logo-kkn.png" alt="logo" class="w-full h-12 object-cover">
                        <img src="images/logo-plumbon.png" alt="logo" class="w-full h-12 object-cover">
                    </div>
                    
                    <!-- Navigation Menu -->
                    <ul class="hidden md:flex space-x-10 text-white">
                        <li><a href="/" class="hover:text-yellow-400 transition duration-300 {{ Request::is('/') ? 'border-b-2 border-white' : '' }}">Beranda</a></li>
                        <li><a href="/profil" class="hover:text-yellow-400 transition duration-300 {{ Request::is('profil') ? 'border-b-2 border-white' : '' }}">Profil</a></li>
                        
                        <!-- Dropdown Menu with proper hover handling -->
                        <li class="relative group">
                            <a href="#" class="flex items-center space-x-1 hover:text-yellow-400 transition duration-300">
                                <span>Data Desa</span>
                                <!-- Dropdown Icon -->
                                <svg class="w-4 h-4 transition-transform duration-150 group-hover:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </a>
                            
                            <!-- Dropdown Menu -->
                            <div class="absolute left-0 top-full w-48 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 ease-in-out transform translate-y-2 group-hover:translate-y-0 z-50">
                                <!-- Dropdown Content (tanpa arrow) -->
                                <div class="bg-white text-black shadow-xl rounded-lg overflow-hidden mt-2 border border-gray-200">
                                    <a href="/data/sumberair" class="block px-4 py-3 hover:bg-gray-100 transition duration-200 border-b border-gray-100">
                                        <div class="flex items-center">
                                            <span>Data Sumber Air</span>
                                        </div>
                                    </a>

                                    <a href="/data/kependudukan" class="block px-4 py-3 hover:bg-gray-100 transition duration-200 border-b border-gray-100">
                                        <div class="flex items-center">
                                            <span>Data Kependudukan</span>
                                        </div>
                                    </a>

                                    <a href="/data/kesehatan" class="block px-4 py-3 hover:bg-gray-100 transition duration-200">
                                        <div class="flex items-center">
                                            <span>Data Kesehatan</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </li>

                        <li class="relative group">
                            <a href="#" class="flex items-center space-x-1 hover:text-yellow-400 transition duration-300">
                                <span>Layanan</span>
                                <!-- Dropdown Icon -->
                                <svg class="w-4 h-4 transition-transform duration-150 group-hover:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </a>
                            
                            <!-- Dropdown Menu -->
                            <div class="absolute left-0 top-full w-56 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 ease-in-out transform translate-y-2 group-hover:translate-y-0 z-50">
                                <!-- Dropdown Content (tanpa arrow) -->
                                <div class="bg-white text-black shadow-xl rounded-lg overflow-hidden mt-2 border border-gray-200">
                                    <a href="/layanan/berita" class="block px-4 py-3 hover:bg-gray-100 transition duration-200 border-b border-gray-100">
                                        <div class="flex items-center">
                                            <span>Berita</span>
                                        </div>
                                    </a>

                                    <a href="/layanan/pengaduan" class="block px-4 py-3 hover:bg-gray-100 transition duration-200 border-b border-gray-100">
                                        <div class="flex items-center">
                                            <span>Pengaduan Masyarakat</span>
                                        </div>
                                    </a>

                                    <a href="/layanan/pembuatanktp" class="block px-4 py-3 hover:bg-gray-100 transition duration-200 border-b border-gray-100">
                                        <div class="flex items-center">
                                            <span>Pembuatan KTP</span>
                                        </div>
                                    </a>
                                    
                                    <a href="/layanan/pembuatankk" class="block px-4 py-3 hover:bg-gray-100 transition duration-200 border-b border-gray-100">
                                        <div class="flex items-center">
                                            <span>Pembuatan KK</span>
                                        </div>
                                    </a>

                                    <a href="/layanan/pembuatanakte" class="block px-4 py-3 hover:bg-gray-100 transition duration-200">
                                        <div class="flex items-center">
                                            <span>Pembuatan Akte Kelahiran</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li><a href="/umkm" class="hover:text-yellow-400 transition duration-300 {{ Request::is('umkm') ? 'border-b-2 border-white' : '' }}">UMKM</a></li>
                        <li><a href="/produk-kkn" class="hover:text-yellow-400 transition duration-300 {{ Request::is('produk-kkn') ? 'border-b-2 border-white' : '' }}">Produk KKN</a></li>
                    </ul>
                    
                    <!-- Mobile Menu Button -->
                    <button class="md:hidden text-white">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                </div>
            </nav>
        </header>

        <main>
            <!-- Hero Section -->
            <section id="home" class="relative w-full h-screen hero-bg flex items-center justify-center mb-100"
                style="background-image: url('{{ asset('images/hero-data.jpg') }}'); background-size: cover; background-position: center; background-repeat: no-repeat;"
            >
                <div class="absolute inset-0 bg-gradient-to-b from-black/30 via-black/20 to-black/40"></div>
                
                <div class="absolute bottom-0 left-0 w-full h-48 bg-gradient-to-t from-black/80 to-transparent"></div>
                
                <div id="typingEffect" class="relative z-10 text-center text-4xl text-white px-6 md:px-12 max-w-5xl md:text-6xl font-bold tracking-wide">

                </div>
            </section>
        </main>

        <!-- Footer -->
        <footer class="bg-gray-800 text-white">
            <div class="max-w-7xl mx-auto px-6 py-12">
                <div class="grid grid-cols-1 md:grid-cols-5 gap-8">
                    <div>
                        <div class="flex flex-col justify-between mb-4 gap-4">
                            <div>
                                <img src="images/logo-plumbon.png" alt="logo" class="w-4/5 h-auto object-cover">
                            </div>

                            <div class="flex flex-row space-x-5">
                                <img src="images/logo-undip.png" alt="logo" class="w-14 h-auto object-cover">
                                <img src="images/logo-kkn.png" alt="logo" class="w-14 h-auto object-cover">
                            </div>
                        </div>
                    </div>
                    
                    <div>
                        <h4 class="font-semibold mb-4">Navigasi</h4>
                        <ul class="space-y-2 text-sm">
                            <li><a href="/" class="hover:text-yellow-400">Beranda</a></li>
                            <li><a href="/profil" class="hover:text-yellow-400">Profil Desa</a></li>
                            <li><a href="/layanan" class="hover:text-yellow-400">Layanan</a></li>
                            <li><a href="/umkm" class="hover:text-yellow-400">UMKM</a></li>
                            <li><a href="/produk-kkn" class="hover:text-yellow-400">Produk KKN</a></li>
                        </ul>
                    </div>
                    
                    <div>
                        <h4 class="font-semibold mb-4">Data Desa</h4>
                        <ul class="space-y-2 text-sm">
                            <li><a href="/data/sumberair" class="hover:text-yellow-400">Data Sumber Air Bersih</a></li>
                            <li><a href="/data/kependudukan" class="hover:text-yellow-400">Data Kependudukan</a></li>
                            <li><a href="/data/kesehatan" class="hover:text-yellow-400">Data Kesehatan</a></li>
                        </ul>
                    </div>

                    <div>
                        <h4 class="font-semibold mb-4">Unduhan</h4>
                        <ul class="space-y-2 text-sm">
                            <li><a href="#" class="hover:text-yellow-400">Formulir Surveilance</a></li>
                            <li><a href="#" class="hover:text-yellow-400">Desain Revitalisasi Lapangan</a></li>
                            <li><a href="#" class="hover:text-yellow-400">Flipbook Profil Desa</a></li>
                        </ul>
                    </div>
                    
                    <div>
                        <h4 class="font-semibold mb-4">Kontak</h4>
                        <div class="space-y-2 text-sm">
                            <p>Plumbon, Kec. Mojolaban, Kab. Sukoharjo, Jawa Tengah</p>
                            <p>desaplumbon@gmail.com</p>
                            <p>+62812345678</p>
                        </div>
                        
                        <div class="flex space-x-4 mt-4">
                            <a href="#" class="w-8 h-8 bg-blue-600 rounded-full flex items-center justify-center hover:bg-blue-700">
                                <span class="text-xs">f</span>
                            </a>
                            <a href="#" class="w-8 h-8 bg-blue-400 rounded-full flex items-center justify-center hover:bg-blue-500">
                                <span class="text-xs">t</span>
                            </a>
                            <a href="#" class="w-8 h-8 bg-green-600 rounded-full flex items-center justify-center hover:bg-green-700">
                                <span class="text-xs">w</span>
                            </a>
                        </div>
                    </div>
                </div>
                
                <div class="border-t border-gray-700 mt-8 pt-8 text-center text-sm opacity-80">
                    <p>&copy; 2025 Desa Plumbon & KKN-T IDBU 29 UNDIP | All Rights Reserved.</p>
                </div>
            </div>
        </footer>

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

            const text = "PRODUK KKN-T IDBU 29 UNIVERSITAS DIPONEGORO";
            let i = 0;
            const typingEffect = document.getElementById('typingEffect');

            function typeWriter() {
                if (i < text.length) {
                    typingEffect.innerHTML += text.charAt(i);
                    i++;
                    setTimeout(typeWriter, 80); // Delay setiap karakter
                } else {
                    typingEffect.classList.remove('typing'); // Hapus border saat selesai
                }
            }

            typingEffect.classList.add('typing'); // Menambahkan kelas typing untuk efek border
            typeWriter();
        </script>
    </body>
</html>