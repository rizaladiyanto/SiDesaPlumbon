<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite('resources/css/app.css')

        <title>Layanan - Desa Plumbon</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet" />

        <style>
            @keyframes blink {
                0%, 50% { opacity: 1; }
                51%, 100% { opacity: 0; }
            }

            /* Hover animation */
            .service-card {
                transition: all 0.3s ease;
                transform: translateY(0);
            }
            .service-card:hover {
                transform: translateY(-5px);
                box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
            }

            .gradient-bg {
                background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            }

            .process-step {
                position: relative;
                padding-left: 2.5rem;
            }

            .process-step::before {
                content: '';
                position: absolute;
                left: 0;
                top: 0;
                width: 2px;
                height: 100%;
                background: linear-gradient(to bottom, #3b82f6, #1d4ed8);
            }
            .process-step::after {
                content: '';
                position: absolute;
                left: -6px;
                top: 8px;
                width: 14px;
                height: 14px;
                background: #3b82f6;
                border-radius: 50%;
                border: 3px solid white;
                box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.2);
            }
        </style>
    </head>
    <body class="min-h-screen bg-gray-100">
        <x-header />

        <main>
            <!-- Hero Section -->
            <section id="home" class="relative w-full h-screen hero-bg flex items-center justify-center mb-100"
                style="background-image: url('{{ asset('images/hero-layanan.jpg') }}'); background-size: cover; background-position: center; background-repeat: no-repeat;">
                <!-- Dark overlay layers - FIXED -->    
                <div class="absolute inset-0 top-0 left-0 bg-gradient-to-b from-black via-black/50 to-transparent h-56 opacity-40 z-10"></div>
                <div class="absolute bottom-0 left-0 w-full h-48 bg-gradient-to-t from-black via-black/50 to-transparent z-20"></div>
                
                <div id="typingEffect" class="relative z-30 text-center text-4xl text-white px-6 md:px-12 md:text-6xl font-bold tracking-wide typing-cursor">
                </div>
            </section>

            <section id="layanan" class="py-16 bg-gray-50">
                <div class="max-w-7xl mx-auto px-6">
                    <h2 class="text-3xl font-bold text-gray-800 mb-4 text-center">Layanan Administrasi</h2>
                    <p class="text-lg text-gray-600 text-center mb-12 max-w-4xl mx-auto">
                        Pemerintah Desa Plumbon menyediakan berbagai layanan administrasi untuk mendukung kesejahteraan warganya. Berikut adalah layanan-layanan yang dapat diakses:
                    </p>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                        <!-- KTP Elektronik -->
                        <div class="service-card bg-white rounded-lg shadow-lg p-6">
                            <h3 class="font-semibold text-xl mb-4">Pembuatan KTP Elektronik</h3>
                            <p class="text-gray-600 mb-4 text-justify">
                                Layanan pembuatan KTP Elektronik baru untuk warga yang telah berusia 17 tahun ke atas. Proses meliputi pendaftaran, verifikasi data, serta perekaman sidik jari dan foto.
                            </p>
                            <ul class="list-disc ml-4 text-gray-600">
                                <li>Berusia 17 tahun ke atas</li>
                                <li>Membawa pengantar RT/RW</li>
                                <li>Formulir dan dokumen pendukung (KK, Akte Kelahiran, dsb)</li>
                            </ul>
                        </div>

                        <!-- Kartu Keluarga -->
                        <div class="service-card bg-white rounded-lg shadow-lg p-6">
                            <h3 class="font-semibold text-xl mb-4">Pembuatan Kartu Keluarga (KK)</h3>
                            <p class="text-gray-600 mb-4 text-justify">
                                Layanan pembuatan Kartu Keluarga untuk keluarga yang baru pindah atau yang belum memiliki KK. Proses pembuatan memerlukan beberapa dokumen seperti KTP, Akta Nikah, dan dokumen pendukung lainnya.
                            </p>
                            <ul class="list-disc ml-4 text-gray-600">
                                <li>KK dan KTP asli</li>
                                <li>Pengantar RT/RW</li>
                                <li>Surat pindah dari daerah asal (jika diperlukan)</li>
                                <li>Fotocopy Akta Nikah / Surat Keterangan Nikah</li>
                            </ul>
                        </div>

                        <!-- Akta Kelahiran -->
                        <div class="service-card bg-white rounded-lg shadow-lg p-6">
                            <h3 class="font-semibold text-xl mb-4">Pembuatan Akta Kelahiran</h3>
                            <p class="text-gray-600 mb-4 text-justify">
                                Proses pembuatan akta kelahiran untuk anak yang baru lahir dengan persyaratan surat pengantar dan dokumen keluarga. Akta kelahiran diperlukan untuk pengurusan berbagai administrasi penting.
                            </p>
                            <ul class="list-disc ml-4 text-gray-600">
                                <li>Surat kelahiran asli dari rumah sakit</li>
                                <li>Fotocopy KTP orang tua</li>
                                <li>Fotocopy KK orang tua</li>
                                <li>Fotocopy Akta Nikah orang tua</li>
                                <li>Surat Kuasa bermaterai (jika dikuasakan oleh pihak lain)</li>
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

            const text = "LAYANAN DESA PLUMBON";
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
