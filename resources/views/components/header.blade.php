<header class="relative z-50">
    <nav class="fixed top-0 w-full p-4 bg-opacity-20 transition-all duration-300">
        <div class="max-w-7xl mx-auto flex justify-between items-center">
            <!-- Logo -->
            <div class="flex items-center space-x-3">
                <img src="{{ asset('images/logo-undip.png') }}" alt="logo" class="w-full h-12 object-cover">
                <img src="{{ asset('images/logo-kkn.png') }}" alt="logo" class="w-full h-12 object-cover">
                <img src="{{ asset('images/logo-plumbon.png') }}" alt="logo" class="w-full h-12 object-cover">
            </div>

            <!-- Desktop Navigation Menu -->
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
                            <a href="/sumberair/MAT" class="block px-4 py-3 hover:bg-gray-100 transition duration-200 border-b border-gray-100">Muka Air Tanah</a>
                            <a href="/sumberair/KAT" class="block px-4 py-3 hover:bg-gray-100 transition duration-200 border-b border-gray-100">Kualitas Air Tanah</a>
                            <!-- <a href="/sumberair/petakekeringan" class="block px-4 py-3 hover:bg-gray-100 transition duration-200">Peta Kekeringan</a> -->
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
            <button id="mobile-menu-button" class="md:hidden text-white focus:outline-none">
                <svg id="hamburger-icon" class="w-6 h-6 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
                <svg id="close-icon" class="w-6 h-6 hidden transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
        </div>

        <!-- Mobile Menu -->
        <div id="mobile-menu" class="md:hidden absolute top-full left-0 right-0 bg-gray-800 bg-opacity-95 backdrop-blur-sm transform translate-y-[-100%] opacity-0 invisible transition-all duration-300 ease-in-out">
            <div class="px-4 py-6 space-y-1">
                <!-- Beranda -->
                <a href="/" class="block px-4 py-3 text-white hover:text-yellow-400 hover:bg-white hover:bg-opacity-10 rounded-md transition-all duration-300 {{ Request::is('/') ? 'bg-white bg-opacity-20 text-yellow-400' : '' }}">
                    Beranda
                </a>

                <!-- Profil -->
                <a href="/profil" class="block px-4 py-3 text-white hover:text-yellow-400 hover:bg-white hover:bg-opacity-10 rounded-md transition-all duration-300 {{ Request::is('profil') ? 'bg-white bg-opacity-20 text-yellow-400' : '' }}">
                    Profil
                </a>

                <!-- Data Surveilance Dropdown -->
                <div class="mobile-dropdown">
                    <button class="w-full flex justify-between items-center px-4 py-3 text-white hover:text-yellow-400 hover:bg-white hover:bg-opacity-10 rounded-md transition-all duration-300 focus:outline-none mobile-dropdown-trigger">
                        <span>Data Surveilance</span>
                        <svg class="w-4 h-4 transition-transform duration-300 mobile-dropdown-arrow" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div class="mobile-dropdown-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                        <div class="pl-8 py-2 space-y-1">
                            <a href="/surveilance/sdgs3" class="block px-4 py-2 text-gray-300 hover:text-yellow-400 hover:bg-white hover:bg-opacity-10 rounded-md transition-all duration-300">
                                SDG 3
                            </a>
                            <a href="/surveilance/sdgs6" class="block px-4 py-2 text-gray-300 hover:text-yellow-400 hover:bg-white hover:bg-opacity-10 rounded-md transition-all duration-300">
                                SDG 6
                            </a>
                            <a href="/surveilance/sdgs11" class="block px-4 py-2 text-gray-300 hover:text-yellow-400 hover:bg-white hover:bg-opacity-10 rounded-md transition-all duration-300">
                                SDG 11
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Data Sumber Air Dropdown -->
                <div class="mobile-dropdown">
                    <button class="w-full flex justify-between items-center px-4 py-3 text-white hover:text-yellow-400 hover:bg-white hover:bg-opacity-10 rounded-md transition-all duration-300 focus:outline-none mobile-dropdown-trigger">
                        <span>Data Sumber Air</span>
                        <svg class="w-4 h-4 transition-transform duration-300 mobile-dropdown-arrow" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div class="mobile-dropdown-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                        <div class="pl-8 py-2 space-y-1">
                            <a href="/sumberair/MAT" class="block px-4 py-2 text-gray-300 hover:text-yellow-400 hover:bg-white hover:bg-opacity-10 rounded-md transition-all duration-300">
                                Muka Air Tanah
                            </a>
                            <a href="/sumberair/KAT" class="block px-4 py-2 text-gray-300 hover:text-yellow-400 hover:bg-white hover:bg-opacity-10 rounded-md transition-all duration-300">
                                Kualitas Air Tanah
                            </a>
                            <a href="/sumberair/petakekeringan" class="block px-4 py-2 text-gray-300 hover:text-yellow-400 hover:bg-white hover:bg-opacity-10 rounded-md transition-all duration-300">
                                Peta Kekeringan
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Layanan Dropdown -->
                <div class="mobile-dropdown">
                    <button class="w-full flex justify-between items-center px-4 py-3 text-white hover:text-yellow-400 hover:bg-white hover:bg-opacity-10 rounded-md transition-all duration-300 focus:outline-none mobile-dropdown-trigger">
                        <span>Layanan</span>
                        <svg class="w-4 h-4 transition-transform duration-300 mobile-dropdown-arrow" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div class="mobile-dropdown-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                        <div class="pl-8 py-2 space-y-1">
                            <a href="/layanan/berita" class="block px-4 py-2 text-gray-300 hover:text-yellow-400 hover:bg-white hover:bg-opacity-10 rounded-md transition-all duration-300">
                                Berita
                            </a>
                            <a href="/layanan" class="block px-4 py-2 text-gray-300 hover:text-yellow-400 hover:bg-white hover:bg-opacity-10 rounded-md transition-all duration-300">
                                Layanan
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Produk KKN -->
                <a href="/produk-kkn" class="block px-4 py-3 text-white hover:text-yellow-400 hover:bg-white hover:bg-opacity-10 rounded-md transition-all duration-300 {{ Request::is('produk-kkn') ? 'bg-white bg-opacity-20 text-yellow-400' : '' }}">
                    Produk KKN
                </a>
            </div>
        </div>
    </nav>
</header>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Mobile menu toggle
    const mobileMenuButton = document.getElementById('mobile-menu-button');
    const mobileMenu = document.getElementById('mobile-menu');
    const hamburgerIcon = document.getElementById('hamburger-icon');
    const closeIcon = document.getElementById('close-icon');
    let isMobileMenuOpen = false;

    mobileMenuButton.addEventListener('click', function() {
        isMobileMenuOpen = !isMobileMenuOpen;
        
        if (isMobileMenuOpen) {
            // Show mobile menu
            mobileMenu.classList.remove('translate-y-[-100%]', 'opacity-0', 'invisible');
            mobileMenu.classList.add('translate-y-0', 'opacity-100', 'visible');
            
            // Switch icons
            hamburgerIcon.classList.add('hidden');
            closeIcon.classList.remove('hidden');
            
            // Prevent body scroll
            document.body.style.overflow = 'hidden';
        } else {
            // Hide mobile menu
            mobileMenu.classList.add('translate-y-[-100%]', 'opacity-0', 'invisible');
            mobileMenu.classList.remove('translate-y-0', 'opacity-100', 'visible');
            
            // Switch icons
            hamburgerIcon.classList.remove('hidden');
            closeIcon.classList.add('hidden');
            
            // Allow body scroll
            document.body.style.overflow = '';
        }
    });

    // Mobile dropdown functionality
    const mobileDropdownTriggers = document.querySelectorAll('.mobile-dropdown-trigger');
    
    mobileDropdownTriggers.forEach(trigger => {
        trigger.addEventListener('click', function(e) {
            e.preventDefault();
            
            const dropdown = this.parentElement;
            const content = dropdown.querySelector('.mobile-dropdown-content');
            const arrow = dropdown.querySelector('.mobile-dropdown-arrow');
            const isOpen = content.style.maxHeight && content.style.maxHeight !== '0px';
            
            // Close other dropdowns
            mobileDropdownTriggers.forEach(otherTrigger => {
                if (otherTrigger !== this) {
                    const otherDropdown = otherTrigger.parentElement;
                    const otherContent = otherDropdown.querySelector('.mobile-dropdown-content');
                    const otherArrow = otherDropdown.querySelector('.mobile-dropdown-arrow');
                    
                    otherContent.style.maxHeight = '0px';
                    otherArrow.style.transform = 'rotate(0deg)';
                }
            });
            
            // Toggle current dropdown
            if (isOpen) {
                content.style.maxHeight = '0px';
                arrow.style.transform = 'rotate(0deg)';
            } else {
                content.style.maxHeight = content.scrollHeight + 'px';
                arrow.style.transform = 'rotate(180deg)';
            }
        });
    });

    // Desktop dropdown functionality (existing code)
    const dropdownParents = document.querySelectorAll('.dropdown-parent');
    
    dropdownParents.forEach(parent => {
        const menu = parent.querySelector('.dropdown-menu');
        const arrow = parent.querySelector('.dropdown-arrow');
        
        parent.addEventListener('mouseenter', function() {
            menu.classList.remove('opacity-0', 'invisible', 'translate-y-2');
            menu.classList.add('opacity-100', 'visible', 'translate-y-0');
            arrow.style.transform = 'rotate(180deg)';
        });
        
        parent.addEventListener('mouseleave', function() {
            menu.classList.add('opacity-0', 'invisible', 'translate-y-2');
            menu.classList.remove('opacity-100', 'visible', 'translate-y-0');
            arrow.style.transform = 'rotate(0deg)';
        });
    });

    // Close mobile menu when clicking on links
    const mobileMenuLinks = document.querySelectorAll('#mobile-menu a');
    mobileMenuLinks.forEach(link => {
        link.addEventListener('click', function() {
            // Close mobile menu
            isMobileMenuOpen = false;
            mobileMenu.classList.add('translate-y-[-100%]', 'opacity-0', 'invisible');
            mobileMenu.classList.remove('translate-y-0', 'opacity-100', 'visible');
            
            // Switch icons
            hamburgerIcon.classList.remove('hidden');
            closeIcon.classList.add('hidden');
            
            // Allow body scroll
            document.body.style.overflow = '';
        });
    });

    // Close mobile menu on window resize
    window.addEventListener('resize', function() {
        if (window.innerWidth >= 768 && isMobileMenuOpen) {
            isMobileMenuOpen = false;
            mobileMenu.classList.add('translate-y-[-100%]', 'opacity-0', 'invisible');
            mobileMenu.classList.remove('translate-y-0', 'opacity-100', 'visible');
            
            hamburgerIcon.classList.remove('hidden');
            closeIcon.classList.add('hidden');
            
            document.body.style.overflow = '';
        }
    });
});
</script>