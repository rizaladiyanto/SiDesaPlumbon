<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite('resources/css/app.css')

        <title>Profil</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&family=Lora:wght@400;700&display=swap" rel="stylesheet">

        <style>
            /* Dropdown hover effects */
            .dropdown-parent:hover .dropdown-menu {
                opacity: 1 !important;
                visibility: visible !important;
                transform: translateY(0) !important;
            }
            .dropdown-parent:hover .dropdown-arrow {
                transform: rotate(180deg) !important;
            }
            /* Sub-dropdown hover effects */
            .sub-dropdown-parent:hover .sub-dropdown-menu {
                opacity: 1 !important;
                visibility: visible !important;
                transform: translateX(0) !important;
            }
            .sub-dropdown-parent:hover .sub-dropdown-arrow {
                transform: rotate(90deg) !important;
            }
            /* Ensure dropdown stays visible when hovering over the menu itself */
            .dropdown-menu:hover {
                opacity: 1 !important;
                visibility: visible !important;
            }
            .sub-dropdown-menu:hover {
                opacity: 1 !important;
                visibility: visible !important;
            }
            /* Add some padding to prevent gaps that might break hover */
            .dropdown-parent {
                position: relative;
            }
            .dropdown-menu {
                margin-top: 0;
                padding-top: 8px;
            }
            .sub-dropdown-menu {
                margin-left: 0;
                padding-left: 4px;
            }
        </style>
    </head>
    <body class="min-h-screen bg-gray-100">
        <x-header />

        <main>
            <!-- Hero Section -->
            <section id="home" class="relative w-full h-screen hero-bg flex items-center justify-center"
                style="background-image: url('{{ asset('images/hero-profil.jpg') }}'); background-size: cover; background-position: center; background-repeat: no-repeat;"
            >
                <div class="absolute inset-0 bg-gradient-to-b from-black/30 via-black/20 to-black/40"></div>
                
                <div class="absolute bottom-0 left-0 w-full h-48 bg-gradient-to-t from-black/80 to-transparent"></div>
                
                <div id="typingEffect" class="relative z-10 text-center text-4xl text-white px-6 md:px-12 max-w-4xl md:text-6xl font-bold tracking-wide">

                </div>
            </section>

            <!-- About Section -->
            <section id="profil" class="py-16 bg-gray-50">
                <div class="max-w-7xl mx-auto px-6">
                    <div class="text-center mb-8">
                        <div class="w-2/3 bg-white rounded-lg shadow-lg p-8 mx-auto mb-6">
                            <h2 class="text-3xl font-bold text-gray-800 mb-4">Visi</h2>
                            <p class="text-xl text-gray-700 max-w-3xl mx-auto font-bold font-lora">
                                “MENJADI DESA YANG BERDYA, MODERN, TRANSPARAN, DAN RELIGIUS“
                            </p>
                        </div>

                        <div class="w-2/3 bg-white rounded-lg shadow-lg p-8 mx-auto">
                            <h2 class="text-3xl font-bold text-gray-800 mb-6 text-center">Misi</h2>
                            <ol class="list-decimal list-inside space-y-3 text-left px-4 font-medium">
                                <li class="text-lg text-gray-700">Mewujudkan Pemerintahan yang efektif, bersih dan demokratis melalui penyelenggaraan Pemerintahan yang Profesional, Aspiratif, Partisipatif dan Transparan.</li>
                                <li class="text-lg text-gray-700">Meningkatkan Kualitas dan Kuantitas sarana dan prasarana publik dan menerapkan pembangunan infrastruktur berkelanjutan.</li>
                                <li class="text-lg text-gray-700">Mengoptimalkan ketepatan alokasi dan distribusi Sumber-sumber dana dan khususnya APBDes untuk peningkatan kesejahteraan masyarakat.</li>
                                <li class="text-lg text-gray-700">Meningkatkan kecerdasan dan kualitas sumber daya manusia (SDM) yang beriman dan bertaqwa kepada Tuhan Yang Maha Esa.</li>
                                <li class="text-lg text-gray-700">Mendorong terciptanya Kamtibmas dalam kehidupan bernegara, berbangsa dan bermasyarakat melalui pembuatan Perdes, Penegakan Peraturan dan Pelaksanaan Hukum yang berkeadilan.</li>
                                <li class="text-lg text-gray-700">Meningkatkan ekonomi kerakyatan yang berdaya saing.</li>
                                <li class="text-lg text-gray-700">Peningkatan kegiatan bidang seni budaya dan olah raga.</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Video Profile Section -->
            <section class="py-16 bg-white">
                <div class="max-w-7xl mx-auto px-6">
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
                    <div class="text-center mb-12">
                        <h2 class="text-3xl font-bold text-gray-800 mb-4">Lokasi Desa Plumbon</h2>
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

            const text = "PROFIL DESA PLUMBON";
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