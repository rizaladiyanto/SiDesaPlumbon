<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite('resources/css/app.css')

        <title>MAT - SiDesaPlumbon</title>

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
                <!-- Dark overlay layers - FIXED -->
                <div class="absolute inset-0 top-0 left-0 bg-gradient-to-b from-black via-black/50 to-transparent h-56 opacity-40 z-10"></div>
                <div class="absolute bottom-0 left-0 w-full h-48 bg-gradient-to-t from-black via-black/50 to-transparent z-20"></div>
                
                <div id="typingEffect" class="relative z-30 text-center text-4xl text-white px-6 md:px-12 max-w-4xl md:text-6xl font-bold tracking-wide typing-cursor">
                </div>
            </section>

            <section class="py-16 bg-white">
                <div class="max-w-7xl mx-auto px-6">
                    <div class="text-center mb-12 fade-in-up">
                        <h2 class="text-3xl font-bold text-gray-800 mb-4">Apa itu Muka Air Tanah?</h2>
                        <p class="text-lg text-gray-600 max-w-5xl mx-auto text-justify">
                            Muka air tanah adalah batas alami antara lapisan tanah yang penuh terisi air (zona jenuh) dan lapisan di atasnya yang hanya mengandung sedikit air (zona tak jenuh). Sederhananya, ini adalah titik di bawah permukaan tanah di mana air mulai terkumpul. Kedalaman muka air tanah di Desa Plumbon dapat berubah-ubah, tergantung curah hujan, evapotranspirasi, penggunaan air tanah, serta kondisi tanah dan batuan di wilayah sekitar Desa Plumbon. Dengan memahami posisi muka air tanah ini, maka ketersediaan air bersih bagi warga dapat tetap terjaga, penggunaan air tanah menjadi tidak berlebihan (over-eksploitasi), dan dapat menjaga kesimbangan ekosistem serta kesehatan lingkungan.
                        </p>
                    </div>
                </div>
            </section>

            <section class="py-16 bg-gray-50">
                <div class="max-w-4xl mx-auto bg-white p-8 mx-auto rounded-md fade-in-up">
                    <div class="text-center">
                        <h2 class="text-3xl font-bold text-gray-800 mb-4">Peta MAT Sumber Air Desa Plumbon</h2>
                        <img src="{{ asset('images/peta_mat_sumber_air.jpg') }}" alt="Peta MAT Sumber Air Desa Plumbon">
                    </div>
                </div>
            </section>

            <section class="bg-gray-50">
                <div class="max-w-7xl mx-auto px-6 pb-16">
                    <h2 class="text-3xl font-bold text-gray-800 mb-8 text-center fade-in-up">Peta Persebaran dan Kedalaman MAT</h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        <!-- Baris pertama: Sumur Gali dan Sumur Bor -->
                        <div class="bg-white rounded-lg shadow-md p-6 fade-in-up stagger-animation" style="--delay: 0.1s;">
                            <h3 class="font-semibold text-xl mb-4">Sumur Gali</h3>
                            <p class="text-gray-600 mb-4 text-justify">
                                Peta persebaran dan kedalaman muka air tanah (MAT) sumur gali di Desa Plumbon, Kecamatan Mojolaban, Kabupaten Sukoharjo, Jawa Tengah tahun 2025 menunjukkan warna-warna yang menggambarkan interpolasi kedalaman MAT, mulai dari 4,02 meter hingga hampir 30 meter. Tanda titik biru menunjukkan lokasi sumur gali, sedangkan garis kontur melambangkan kontur kedalaman muka air tanah. Panah hitam pada peta menunjukkan arah aliran air tanah di wilayah tersebut. Batas RW ditandai dengan garis tebal hitam sehingga memudahkan identifikasi penyebaran sumur pada tiap wilayah RW.
                            </p>
                            <img src="{{ asset('images/mat_sumur_gali.png') }}" alt="Peta MAT Sumur Gali" class="w-full rounded-lg">
                        </div>

                        <div class="bg-white rounded-lg shadow-md p-6 fade-in-up stagger-animation" style="--delay: 0.3s;">
                            <h3 class="font-semibold text-xl mb-4">Sumur Bor</h3>
                            <p class="text-gray-600 mb-4 text-justify">
                                Peta persebaran dan kedalaman muka air tanah (MAT) sumur bor di Desa Plumbon, Kecamatan Mojolaban, Kabupaten Sukoharjo, Jawa Tengah tahun 2025 menampilkan warna yang menunjukkan interpolasi kedalaman MAT yang terbagi dalam beberapa rentang, mulai dari 3,1 meter hingga 34,8 meter. Titik-titik biru menandakan lokasi sumur bor, sedangkan garis lengkung menggambarkan kontur muka air tanah. Panah hitam menunjukkan arah aliran air tanah di wilayah tersebut yang membantu memahami dinamika pergerakan air bawah tanah. Batas RW ditandai dengan garis tebal hitam untuk memudahkan identifikasi pengelompokan sumur bor berdasarkan wilayah RW.
                            </p>
                            <img src="{{ asset('images/mat_sumur_bor.png') }}" alt="Peta MAT Sumur Bor" class="w-full rounded-lg">
                        </div>
                    </div>

                    <!-- Baris kedua: Sumur Bor Dalam (Sawah) -->
                    <div class="flex justify-center mt-8">
                        <div class="bg-white rounded-lg shadow-md p-6 max-w-3xl fade-in-up">
                            <h3 class="font-semibold text-xl mb-4">Sumur Bor Dalam (Sawah)</h3>
                            <p class="text-gray-600 mb-4 text-justify">
                                Peta persebaran sumur dalam (sumur bor sawah) di Desa Plumbon, Kecamatan Mojolaban, Kabupaten Sukoharjo, Jawa Tengah tahun 2025 menampilkan warna hijau yang merepresentasikan interpolasi kedalaman muka air tanah (MAT) hingga kedalaman 100 meter. Titik-titik berwarna coklat menandakan lokasi sumur bor dalam di area sawah. Garis tebal hitam menunjukkan batas wilayah Rukun Warga (RW), sedangkan garis biru melambangkan aliran sungai di wilayah tersebut. Dengan peta ini, dapat dianalisis penyebaran sumur dan kondisi kedalaman muka air tanah di Desa Plumbon secara spasial.
                            </p>
                            <img src="{{ asset('images/mat_sumur_bor_sawah.png') }}" alt="Peta MAT Sumur Bor Dalam (Sawah)" class="w-full rounded-lg">
                        </div>
                    </div>
                </div>
            </section>

            <section class="py-16 bg-white">
                <div class="max-w-7xl mx-auto px-6">
                    <div class="text-center mb-12">
                        <h2 class="text-3xl font-bold text-gray-800 mb-4 fade-in-up">Peta Kekeringan Desa Plumbon</h2>
                        <p class="text-lg text-gray-600 max-w-5xl mx-auto text-justify fade-in-up">
                            Berdasarkan hasil kuesioner yang dilakukan pada sampel warga di 10 RW, teridentifikasi bahwa beberapa responden dari wilayah RW 2 dan RW 6 mengalami kekeringan saat musim kemarau. Kondisi ini berdampak pada terganggunya jadwal, biaya, serta aktivitas harian warga. 
                            <br>
                            <br>
                            Sebagian warga mengaku harus menghemat penggunaan air untuk kebutuhan rumah tangga. Tidak sedikit pula yang terpaksa mengambil air dari sungai terdekat, bahkan ada yang harus menunggu lama hingga air keluar dari sumbernya. Langkah-langkah ini menjadi strategi warga untuk bertahan di tengah keterbatasan pasokan air bersih selama musim kemarau.
                        </p>

                        <img src="{{ asset('images/peta_kekeringan.jpg') }}" alt="Peta Kekeringan Desa Plumbon" class="max-w-4xl mx-auto mt-8 rounded-lg shadow-lg fade-in-up stagger-animation" style="--delay: 0.1+s;">
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

            const text = "DATA MUKA AIR TANAH";
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