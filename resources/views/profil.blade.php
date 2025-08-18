<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite('resources/css/app.css')

        <title>Profil - SiDesaPlumbon</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&family=Lora:wght@400;700&display=swap" rel="stylesheet">

        <style>
            ol {
                list-style-type: decimal;
                text-align: justify;
            }

            ol li {
                margin-bottom: 0.5rem;   
            }

            .fade-in-up {
                animation: fadeInUp 0.8s ease-out;
            }
            
            @keyframes fadeInUp {
                from {
                    opacity: 0;
                    transform: translateY(30px);
                }
                to {
                    opacity: 1;
                    transform: translateY(0);
                }
            }
            
            .flipbook-container {
                position: relative;
                width: 100%;
                height: 70vh;
                min-height: 500px;
                border-radius: 12px;
                overflow: hidden;
                box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
            }
            
            .flipbook-iframe {
                width: 100%;
                height: 100%;
                border: none;
                border-radius: 12px;
            }
            
            .loading-spinner {
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                z-index: 10;
            }
            
            .spinner {
                width: 40px;
                height: 40px;
                border: 4px solid #f3f4f6;
                border-top: 4px solid #3b82f6;
                border-radius: 50%;
                animation: spin 1s linear infinite;
            }
            
            @keyframes spin {
                0% { transform: rotate(0deg); }
                100% { transform: rotate(360deg); }
            }
            
            /* Responsive adjustments */
            @media (max-width: 768px) {
                .flipbook-container {
                    height: 60vh;
                    min-height: 400px;
                }
            }
            
            @media (max-width: 640px) {
                .flipbook-container {
                    height: 50vh;
                    min-height: 350px;
                }
            }
        </style>
    </head>
    <body class="min-h-screen bg-gray-100">
        <x-header />

        <main>
            <!-- Hero Section -->
            <section id="home" class="relative w-full h-screen hero-bg flex items-center justify-center"
                style="background-image: url('{{ asset('images/hero-profil.jpg') }}'); background-size: cover; background-position: center; background-repeat: no-repeat;">
                <!-- Dark overlay layers - FIXED -->
                <div class="absolute inset-0 top-0 left-0 bg-gradient-to-b from-black via-black/50 to-transparent h-56 opacity-40 z-10"></div>
                <div class="absolute bottom-0 left-0 w-full h-48 bg-gradient-to-t from-black via-black/50 to-transparent z-20"></div>
                
                <div id="typingEffect" class="relative z-30 text-center text-4xl text-white px-6 md:px-12 max-w-4xl md:text-6xl font-bold tracking-wide typing-cursor">
                </div>  
            </section>

            <section id="profil" class="py-16 bg-white">
                <div class="max-w-7xl mx-auto px-6">
                    <div class="text-center mb-12 fade-in-up">
                        <h2 class="text-3xl font-bold text-gray-800 mb-4">Sejarah Desa Plumbon</h2>
                        <p class="text-lg text-gray-600 max-w-5xl mx-auto text-justify">
                            {!! nl2br(e(strip_tags($profil->sejarah))) !!}
                        </p>
                    </div>
                </div>
            </section>

            <!-- About Section -->
            <section id="profil" class="py-16 bg-gray-50">
                <div class="max-w-7xl mx-auto px-6">
                    <div class="text-center mb-8">
                        <div class="w-2/3 bg-white rounded-lg shadow-lg p-8 mx-auto mb-6 fade-in-left">
                            <h2 class="text-3xl font-bold text-gray-800 mb-4">Visi</h2>
                            <p class="text-xl text-gray-700 max-w-3xl mx-auto font-bold font-lora">
                                “{!! $profil->visi !!}“
                            </p>
                        </div>

                        <div class="w-2/3 bg-white rounded-lg shadow-lg p-8 mx-auto fade-in-right">
                            <h2 class="text-3xl font-bold text-gray-800 mb-6 text-center">Misi</h2>
                            <ol class="list-decimal list-inside space-y-3 text-left px-4 font-medium">
                                {!! $profil->misi !!}
                            </ol>
                        </div>
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
                            src="https://www.youtube.com/embed/MFCFqg_SglU?si=5NakZGvrM8LBW87u" 
                            title="YouTube video player" 
                            frameborder="0" 
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                            referrerpolicy="strict-origin-when-cross-origin" 
                            allowfullscreen>
                        </iframe>
                    </div>
                </div>
            </section>

            <!-- Flipbook Section -->
            <section class="py-16 bg-gray-50">
                <div class="max-w-7xl mx-auto px-6">
                    <div class="text-center mb-12 fade-in-up">
                        <h2 class="text-3xl font-bold text-gray-800 mb-4">Dokumen Profil Desa</h2>
                        <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                            Jelajahi profil lengkap Desa Plumbon dalam format flipbook interaktif yang mudah dibaca dan dipahami.
                        </p>
                    </div>
                    
                    <!-- Flipbook Container -->
                    <div class="flipbook-container mx-auto max-w-6xl">
                        <!-- Loading Spinner -->
                        <div id="loadingSpinner" class="loading-spinner">
                            <div class="spinner"></div>
                            <p class="mt-4 text-gray-600">Memuat dokumen...</p>
                        </div>
                        
                        <!-- Flipbook Iframe -->
                        <iframe 
                            id="flipbookFrame"
                            class="flipbook-iframe"
                            src="https://heyzine.com/flip-book/5379000428.html#page/1"
                            title="Profil Desa Plumbon - Flipbook"
                            onload="hideLoading()"
                            allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen>
                        </iframe>
                    </div>
                    
                    <!-- Action Buttons -->
                    <div class="flex flex-col sm:flex-row gap-4 justify-center mt-8 fade-in-up">
                        <button onclick="openFullscreen()" class="bg-blue-600 hover:bg-blue-700 text-white px-8 py-3 rounded-lg font-semibold transition-colors duration-300 shadow-lg hover:shadow-xl">
                            <svg class="w-5 h-5 inline-block mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 8V4m0 0h4M4 4l5 5m11-1V4m0 0h-4m4 0l-5 5M4 16v4m0 0h4m-4 0l5-5m11 5l-5-5m5 5v-4m0 4h-4"></path>
                            </svg>
                            Buka Fullscreen
                        </button>
                        
                        <a href="https://heyzine.com/flip-book/5379000428.html#page/1" target="_blank" class="bg-green-600 hover:bg-green-700 text-white px-8 py-3 rounded-lg font-semibold transition-colors duration-300 shadow-lg hover:shadow-xl text-center">
                            <svg class="w-5 h-5 inline-block mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                            </svg>
                            Buka Tab Baru
                        </a>
                    </div>
                </div>
            </section>

            <!-- News and Events Section -->
            <section class="py-16 bg-white">
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

            function hideLoading() {
            const spinner = document.getElementById('loadingSpinner');
            if (spinner) {
                spinner.style.display = 'none';
            }
        }
        
        function openFullscreen() {
            const iframe = document.getElementById('flipbookFrame');
            if (iframe.requestFullscreen) {
                iframe.requestFullscreen();
            } else if (iframe.webkitRequestFullscreen) { // Safari
                iframe.webkitRequestFullscreen();
            } else if (iframe.msRequestFullscreen) { // IE11
                iframe.msRequestFullscreen();
            }
        }
        
        // Alternative: Open in new window
        function openInNewWindow() {
            window.open('https://heyzine.com/flip-book/5379000428.html#page/1', '_blank', 'width=1200,height=800,scrollbars=yes,resizable=yes');
        }
        
        // Handle iframe load error
        document.getElementById('flipbookFrame').onerror = function() {
            const container = document.querySelector('.flipbook-container');
            container.innerHTML = `
                <div class="flex items-center justify-center h-full bg-gray-100 rounded-lg">
                    <div class="text-center">
                        <svg class="w-16 h-16 text-gray-400 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                        </svg>
                        <h3 class="text-lg font-semibold text-gray-800 mb-2">Flipbook tidak dapat dimuat</h3>
                        <p class="text-gray-600 mb-4">Silakan coba buka di tab baru</p>
                        <a href="https://heyzine.com/flip-book/5379000428.html#page/1" target="_blank" class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded-lg font-semibold">
                            Buka di Tab Baru
                        </a>
                    </div>
                </div>
            `;
        };
        </script>
    </body>
</html>