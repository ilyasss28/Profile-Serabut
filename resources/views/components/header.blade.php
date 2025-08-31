<div x-data="{
    images: [
        '{{ asset('assets/img/slide1.jpg') }}',
        '{{ asset('assets/img/slide2.jpg') }}',
        '{{ asset('assets/img/slide3.jpg') }}'
    ],
    currentIndex: 0
}" x-init="setInterval(() => { currentIndex = (currentIndex + 1) % images.length }, 5000)" class="relative h-screen w-full overflow-hidden">

    <!-- Background Images -->
    <template x-for="(image, index) in images" :key="index">
        <div class="absolute inset-0 bg-cover bg-center transition-opacity duration-1000"
            :style="`background-image: url(${image})`" :class="currentIndex === index ? 'opacity-100' : 'opacity-0'">
        </div>
    </template>

    {{-- Overlay Gelap biar teks lebih terbaca --}}
    <div class="absolute inset-0 bg-black/60"></div>

    {{-- Navbar Transparan --}}
    <header x-data="{
        scrolled: false,
        isOpen: false,
        dropdownOpen: false
    }" @scroll.window="scrolled = (window.pageYOffset > 10)"
        :class="scrolled ? 'bg-white/90 shadow-md text-gray-800 backdrop-blur' : 'bg-transparent text-white'"
        class="fixed w-full z-50 transition-all duration-300">

        <div class="container mx-auto flex items-center justify-between py-4 px-6">
            {{-- Logo --}}
            <div class="flex items-center gap-3">
                <img src="{{ asset('assets/img/icon.png') }}" alt="logo" class="w-12 h-12">
                <span
                    class="font-bold tracking-wide font-sans text-[#ca7305] text-[clamp(14px,4vw,26px)] md:text-[clamp(12px,3vw,20px)]">
                    Sekolah Rakyat Butuni
                </span>
            </div>

            {{-- Desktop Navigation --}}
            <nav class="hidden lg:flex items-center gap-8">
                <!-- About Dropdown -->
                <div class="relative" x-data="{ open: false }" @click.away="open = false">
                    <button @click="open = !open"
                        class="flex items-center gap-1 nav-link">
                        <span>Profile</span>
                        <svg :class="{ 'rotate-180': open }" class="w-4 h-4 transition-transform duration-200"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>

                    <div x-show="open" x-transition:enter="transition ease-out duration-200"
                        x-transition:enter-start="opacity-0 transform scale-95"
                        x-transition:enter-end="opacity-100 transform scale-100"
                        x-transition:leave="transition ease-in duration-150"
                        x-transition:leave-start="opacity-100 transform scale-100"
                        x-transition:leave-end="opacity-0 transform scale-95"
                        class="absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg py-1 z-50">
                        <a href="#sejarah"
                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-[#ca7305]">Profile
                            Serabut</a>
                        <a href="#sejarah"
                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-[#ca7305]">Tim
                            Serabut</a>
                        <a href="#struktur"
                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-[#ca7305]">Wilayah
                            Kerja Serabut</a>
                    </div>
                </div>

                <a href="#visi" class="nav-link">Visi & Misi</a>
                <a href="#proyek" class="nav-link">Proyek</a>
                <a href="#cerita" class="nav-link">Cerita</a>
                <a href="#publikasi" class="nav-link">Publikasi</a>
            </nav>

            {{-- Mobile Menu Button --}}
            <button @click="isOpen = !isOpen" class="lg:hidden focus:outline-none"
                :class="scrolled ? 'text-gray-800' : 'text-[#ca7305]'">
                <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path :class="{ 'hidden': isOpen, 'inline-flex': !isOpen }" stroke-linecap="round"
                        stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    <path :class="{ 'inline-flex': isOpen, 'hidden': !isOpen }" stroke-linecap="round"
                        stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>

            {{-- Mobile Menu --}}
            <div x-show="isOpen" x-transition:enter="transition ease-out duration-200"
                x-transition:enter-start="opacity-0 transform scale-95"
                x-transition:enter-end="opacity-100 transform scale-100"
                x-transition:leave="transition ease-in duration-150"
                x-transition:leave-start="opacity-100 transform scale-100"
                x-transition:leave-end="opacity-0 transform scale-95"
                class="absolute top-full left-0 right-0 bg-white shadow-md lg:hidden">

                <div class="p-4 space-y-3">
                    <div x-data="{ dropdownOpen: false }" class="relative">
                        <button @click="dropdownOpen = !dropdownOpen"
                            class="w-full text-left px-4 py-2 text-gray-700 hover:text-[#ca7305] flex justify-between items-center">
                            <span>Tentang</span>
                            <svg :class="{ 'rotate-180': dropdownOpen }"
                                class="w-4 h-4 transition-transform duration-200" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <div x-show="dropdownOpen" class="pl-8 space-y-2">
                            <a href="#visi" class="block py-2 text-gray-700 hover:text-[#ca7305]">Visi & Misi</a>
                            <a href="#sejarah" class="block py-2 text-gray-700 hover:text-[#ca7305]">Sejarah</a>
                            <a href="#struktur" class="block py-2 text-gray-700 hover:text-[#ca7305]">Struktur</a>
                        </div>
                    </div>
                    <a href="#anggota" class="block px-4 py-2 text-gray-700 hover:text-[#ca7305]">Anggota</a>
                    <a href="#proyek" class="block px-4 py-2 text-gray-700 hover:text-[#ca7305]">Proyek</a>
                    <a href="#cerita" class="block px-4 py-2 text-gray-700 hover:text-[#ca7305]">Cerita</a>
                    <a href="#publikasi" class="block px-4 py-2 text-gray-700 hover:text-[#ca7305]">Publikasi</a>
                </div>
            </div>
        </div>
    </header>

    {{-- Hero Content --}}
    <div class="relative z-10 flex flex-col items-center justify-center h-full text-center text-white px-6">
        <h1 class="text-2xl sm:text-3xl md:text-5xl lg:text-6xl font-bold mb-4 leading-tight">
            Sekolah Rakyat Butuni
        </h1>
        <p class="text-sm sm:text-base md:text-lg lg:text-xl max-w-2xl leading-relaxed">
            Bersama menjaga lingkungan, membangun komunitas, dan menciptakan masa
            depan yang berkelanjutan.
        </p>
    </div>
</div>
