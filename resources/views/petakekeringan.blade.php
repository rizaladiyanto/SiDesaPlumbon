<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite('resources/css/app.css')

        <title>Peta Kekeringan - SiDesaPlumbon</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet" />

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
                style="background-image: url('{{ asset('images/hero-layanan.jpg') }}'); background-size: cover; background-position: center; background-repeat: no-repeat;"
            >
                <div class="absolute inset-0 bg-gradient-to-b from-black/30 via-black/20 to-black/40"></div>
                
                <div class="absolute bottom-0 left-0 w-full h-48 bg-gradient-to-t from-black/80 to-transparent"></div>
                
                <div id="typingEffect" class="relative z-10 text-center text-4xl text-white px-6 md:px-12 max-w-4xl md:text-6xl font-bold tracking-wide">

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

            const text = "PETA KEKERINGAN DESA";
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