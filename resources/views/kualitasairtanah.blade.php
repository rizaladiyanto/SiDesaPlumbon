<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite('resources/css/app.css')

        <title>KAT - SiDesaPlumbon</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet" />
    </head>
    <body class="min-h-screen bg-gray-100">
        <x-header />

        <main>
            <!-- Hero Section -->
            <section id="home" class="relative w-full h-screen hero-bg flex items-center justify-center"
                style="background-image: url('{{ asset('images/hero-sumberair.jpg') }}'); background-size: cover; background-position: center; background-repeat: no-repeat;"
            >
                <div class="absolute inset-0 top-0 left-0 bg-gradient-to-b from-black via-black/50 to-transparent h-56 opacity-40 z-10"></div>
                <div class="absolute bottom-0 left-0 w-full h-48 bg-gradient-to-t from-black via-black/50 to-transparent z-20"></div>
                
                <div id="typingEffect" class="relative z-30 text-center text-4xl text-white px-6 md:px-12 md:text-6xl font-bold tracking-wide typing-cursor">
                </div>  
            </section>

            <section id="kualitas-air-tanah" class="py-16 bg-white">
                <div class="max-w-7xl mx-auto px-6">
                    <div class="text-center mb-12 fade-in-up">
                        <h2 class="text-3xl font-bold text-gray-800 mb-4">Kualitas Air Tanah Desa Plumbon</h2>
                        <p class="text-lg text-gray-600 max-w-5xl mx-auto text-justify">
                            Kualitas air tanah di Desa Plumbon menjadi perhatian penting untuk memenuhi kebutuhan air bersih bagi masyarakat, pertanian, dan lainnya. Berdasarkan hasil pengujian kualitas air tanah, ditemukan beberapa parameter yang perlu diperhatikan untuk menjaga kualitasnya, seperti kekeruhan, suhu, warna, bau, serta total zat terlarut (TDS).
                            <br><br>
                            Survei dan pengujian dilakukan oleh tim KKNT-29 IDBU di beberapa titik di Desa Plumbon, dengan parameter-parameter yang diukur mencakup pH, EC, TDS, suhu, warna, dan bau. Data tersebut digunakan untuk menghasilkan peta persebaran kualitas air tanah yang menggambarkan tingkat kelayakan air di berbagai wilayah RW.
                        </p>
                    </div>
                </div>
            </section>        

            <section class="py-16 bg-gray-50">
                <!-- Peta Persebaran EC, TDS, dan pH untuk Sumur Gali -->
                <div class="text-center mb-12">
                    <h2 class="text-3xl font-bold text-gray-800 mb-4 fade-in-up">Peta Persebaran Kualitas Air Tanah pada Sumur Gali</h2>
                </div>
                
                <!-- Grid Layout: 2 kolom untuk baris pertama dan 1 kolom untuk baris kedua -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-7xl mx-auto">
                    <!-- EC Sumur Gali -->
                    <div class="bg-white rounded-lg shadow-md p-6 fade-in-up stagger-animation" style="--delay: 0.1s;">
                        <h3 class="font-semibold text-xl mb-4">Peta Persebaran EC di Sumur Gali</h3>
                        <p class="text-gray-600 mb-4 text-justify">
                            Berdasarkan peta persebaran EC pada sumur gali, sebagian besar titik sumur di Desa Plumbon menunjukkan nilai EC yang layak untuk digunakan. Wilayah dengan warna hijau menunjukkan nilai EC yang rendah dan aman digunakan untuk kebutuhan rumah tangga serta pertanian.
                        </p>
                        <img src="/images/peta_persebaran_ec_sumur_gali.png" alt="Peta Persebaran EC di Sumur Gali" class="w-full rounded-md">
                    </div>
                    
                    <!-- pH Sumur Gali -->
                    <div class="bg-white rounded-lg shadow-md p-6 fade-in-up stagger-animation" style="--delay: 0.3s;">
                        <h3 class="font-semibold text-xl mb-4">Peta Persebaran pH di Sumur Gali</h3>
                        <p class="text-gray-600 mb-4 text-justify">
                            Peta persebaran pH pada sumur gali menunjukkan variasi nilai pH di tiap RW. Beberapa titik memiliki pH yang tergolong asam (di bawah 6,5) sementara sebagian besar wilayah berada pada kategori pH netral, yang aman untuk dikonsumsi dan digunakan dalam pertanian.
                        </p>
                        <img src="/images/peta_persebaran_ph_sumur_gali.png" alt="Peta Persebaran pH di Sumur Gali" class="w-full rounded-md">
                    </div>
                </div>

                <!-- Baris kedua: TDS Sumur Gali -->
                <div class="flex justify-center mt-8">
                    <div class="bg-white rounded-lg shadow-md p-6 max-w-3xl fade-in-up stagger-animation">
                        <h3 class="font-semibold text-xl mb-4">Peta Persebaran TDS di Sumur Gali</h3>
                        <p class="text-gray-600 mb-4 text-justify">
                            Peta persebaran TDS pada sumur gali menunjukkan kualitas air tanah yang cukup baik, dengan sebagian besar wilayah memiliki nilai TDS di bawah 500 mg/L. Ini menandakan bahwa air dari sumur gali di Desa Plumbon aman digunakan untuk kebutuhan sehari-hari.
                        </p>
                        <img src="/images/peta_persebaran_tds_sumur_gali.png" alt="Peta Persebaran TDS di Sumur Gali" class="w-full rounded-md">
                    </div>
                </div>
            </section>
                
            <section class="py-16 bg-gray-50">
                <!-- Peta Persebaran EC, TDS, dan pH untuk Sumur Bor -->
                <div class="text-center mb-12">
                    <h2 class="text-3xl font-bold text-gray-800 mb-4 fade-in-up">Peta Persebaran Kualitas Air Tanah pada Sumur Bor</h2>
                </div>
                
                <!-- Grid Layout: 2 kolom untuk baris pertama dan 1 kolom untuk baris kedua -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-7xl mx-auto">
                    <!-- EC Sumur Bor -->
                    <div class="bg-white rounded-lg shadow-md p-6 fade-in-up stagger-animation" style="--delay: 0.1s;">
                        <h3 class="font-semibold text-xl mb-4">Peta Persebaran EC di Sumur Bor</h3>
                        <p class="text-gray-600 mb-4 text-justify">
                            Peta persebaran EC di sumur bor menunjukkan kualitas air yang baik di sebagian besar titik. Warna hijau menunjukkan kualitas air yang layak, sementara warna merah di beberapa titik menunjukkan air yang perlu pengolahan lebih lanjut sebelum digunakan.
                        </p>
                        <img src="/images/peta_persebaran_ec_sumur_bor.png" alt="Peta Persebaran EC di Sumur Bor" class="w-full rounded-md">
                    </div>
                    
                    <!-- pH Sumur Bor -->
                    <div class="bg-white rounded-lg shadow-md p-6 fade-in-up stagger-animation" style="--delay: 0.3s;">
                        <h3 class="font-semibold text-xl mb-4">Peta Persebaran pH di Sumur Bor</h3>
                        <p class="text-gray-600 mb-4 text-justify">
                            Peta persebaran pH pada sumur bor menunjukkan bahwa sebagian besar wilayah memiliki pH yang netral, namun beberapa titik di wilayah RW 6 memiliki pH di bawah 6,5, yang menunjukkan bahwa air tersebut perlu pengolahan lebih lanjut untuk mencapai kualitas yang aman untuk dikonsumsi.
                        </p>
                        <img src="/images/peta_persebaran_ph_sumur_bor.png" alt="Peta Persebaran pH di Sumur Bor" class="w-full rounded-md">
                    </div>
                </div>

                <!-- Baris kedua: TDS Sumur Bor -->
                <div class="flex justify-center mt-8">
                    <div class="bg-white rounded-lg shadow-md p-6 max-w-3xl fade-in-up stagger-animation" style="--delay: 0.1s;">
                        <h3 class="font-semibold text-xl mb-4">Peta Persebaran TDS di Sumur Bor</h3>
                        <p class="text-gray-600 mb-4 text-justify">
                            Peta persebaran TDS pada sumur bor di Desa Plumbon menunjukkan sebagian besar sumur memiliki kadar TDS yang rendah dan layak untuk digunakan. Namun, beberapa titik dengan kadar TDS lebih tinggi menunjukkan perlunya pengolahan lebih lanjut.
                        </p>
                        <img src="/images/peta_persebaran_tds_sumur_bor.png" alt="Peta Persebaran TDS di Sumur Bor" class="w-full rounded-md">
                    </div>
                </div>
            </section>
        </main>
        
        <x-footer />
        
        <script>
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

            const text = "DATA KUALITAS AIR TANAH";
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