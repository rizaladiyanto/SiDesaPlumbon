<header class="relative z-50">
    <nav class="fixed top-0 w-full p-4 bg-opacity-20 transition-all duration-300">
        <div class="max-w-7xl mx-auto flex justify-between items-center">
            <!-- Logo -->
            <div class="flex items-center space-x-3">
                <img src="{{ asset('images/logo-undip.png') }}" alt="logo" class="w-full h-12 object-cover">
                <img src="{{ asset('images/logo-kkn.png') }}" alt="logo" class="w-full h-12 object-cover">
                <img src="{{ asset('images/logo-plumbon.png') }}" alt="logo" class="w-full h-12 object-cover">
            </div>

            <!-- Navigation Menu -->
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
                            <a href="/sumberair/airbersih" class="block px-4 py-3 hover:bg-gray-100 transition duration-200 border-b border-gray-100">Titik Air Bersih</a>
                            <a href="/sumberair/petakekeringan" class="block px-4 py-3 hover:bg-gray-100 transition duration-200 border-b border-gray-100">Peta Kekeringan</a>
                            <a href="/sumberair/petacurahhujan" class="block px-4 py-3 hover:bg-gray-100 transition duration-200">Peta Curah Hujan</a>
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
            <button class="md:hidden text-white">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>
        </div>
    </nav>
</header>
