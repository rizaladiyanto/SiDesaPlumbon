<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite('resources/css/app.css')

        <title>UMKM</title>

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
            <section id="home" class="relative w-full h-screen hero-bg flex items-center justify-center"
                style="background-image: url('{{ asset('images/hero-umkm.jpg') }}'); background-size: cover; background-position: center; background-repeat: no-repeat;"
            >
                <div class="absolute inset-0 bg-gradient-to-b from-black/30 via-black/20 to-black/40"></div>
                
                <div class="absolute bottom-0 left-0 w-full h-48 bg-gradient-to-t from-black/80 to-transparent"></div>
                
                <div id="typingEffect" class="relative z-10 text-center text-4xl text-white px-6 md:px-12 max-w-4xl md:text-6xl font-bold tracking-wide">

                </div>
            </section>

            <section class="py-12 bg-gray-50">
                <div class="max-w-7xl mx-auto px-6">
                    <div class="text-center mb-12">
                        <h2 class="text-3xl font-bold text-gray-800 mb-4">UMKM Desa Plumbon</h2>
                    </div>
                    
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                        @foreach($umkms as $umkm)
                            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                                <div class="h-56 w-full overflow-hidden px-3 pt-3">
                                    <!-- Menampilkan foto UMKM jika ada -->
                                    @if($umkm->foto)
                                        <img src="{{ asset('storage/' . $umkm->foto) }}" alt="{{ $umkm->nama_umkm }}" class="w-full h-full object-cover rounded-t-lg">
                                    @else
                                        <img src="images/default-image.jpg" alt="Default Image" class="w-full h-full object-cover rounded-t-lg">
                                    @endif
                                </div>

                                <div class="p-3">
                                    <!-- Nama UMKM -->
                                    <h4 class="font-bold text-lg text-gray-800 mb-2">{{ $umkm->nama_umkm }}</h4>
                                    <!-- Alamat UMKM -->
                                    <p class="text-sm text-gray-600 mb-2">{{ $umkm->alamat }}</p>
                                    
                                    <!-- Nomor HP UMKM -->
                                    <p class="text-sm text-gray-600 mb-2">No. HP: {{ $umkm->no_hp }}</p>

                                    <div class="flex justify-end items-center">
                                        <!-- Tombol Hubungi UMKM -->
                                        <a 
                                            href="https://wa.me/{{ $umkm->no_hp }}"
                                            target="_blank"
                                            rel="noopener noreferrer"
                                            class="text-sm font-medium text-white bg-slate-900 hover:bg-slate-600 py-2 px-4 rounded-lg shadow-md transition duration-200"
                                        >
                                            Hubungi
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </section>

            <section class="py-12 bg-white">
                <div class="max-w-7xl mx-auto px-6">
                    <div class="text-center mb-12">
                        <h2 class="text-3xl font-bold text-gray-800 mb-4">Lokasi UMKM Kami</h2>
                    </div>
                    
                    <div class="mb-6 flex justify-center">
                        <iframe 
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d10206.411899971392!2d110.84887777781076!3d-7.590661722642918!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a1634687fdef9%3A0xc0da57461a556b8c!2sPlumbon%2C%20Kec.%20Mojolaban%2C%20Kabupaten%20Sukoharjo%2C%20Jawa%20Tengah!5e1!3m2!1sid!2sid!4v1752821558594!5m2!1sid!2sid" 
                            width="1000" height="500" 
                            style="border:0;" 
                            allowfullscreen="" 
                            loading="lazy" 
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
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

            const text = "UMKM DESA PLUMBON";
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