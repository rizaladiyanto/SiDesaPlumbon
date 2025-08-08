<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite('resources/css/app.css')

        <title>Layanan</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet" />
    </head>
    <body class="min-h-screen bg-gray-100">
        <x-header />

        <main>
            <!-- Hero Section -->
            <section id="home" class="relative w-full h-screen hero-bg flex items-center justify-center mb-100"
                style="background-image: url('{{ asset('images/hero-layanan.jpg') }}'); background-size: cover; background-position: center; background-repeat: no-repeat;"
            >
                <div class="absolute inset-0 bg-gradient-to-b from-black/30 via-black/20 to-black/40"></div>
                
                <div class="absolute bottom-0 left-0 w-full h-48 bg-gradient-to-t from-black/80 to-transparent"></div>
                
                <div id="typingEffect" class="relative z-10 text-center text-4xl text-white px-6 md:px-12 max-w-4xl md:text-6xl font-bold tracking-wide">

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

            const text = "LAYANAN DESA PLUMBON";
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