<header x-data="{
    scrolled: false,
    isOpen: false,
    dropdownOpen: false
}" @scroll.window="scrolled = (window.pageYOffset > 10)"
    :class="scrolled ? 'bg-white/90 shadow-md text-gray-800 backdrop-blur' : 'bg-transparent text-white'"
    class="fixed w-full z-50 transition-all duration-300">

    <div class="w-full flex items-center justify-between py-4 px-6">
        {{-- Logo --}}
        <div class="flex items-center gap-1">
            <img :src="scrolled ? '{{ asset('assets/img/icon.png') }}' : '{{ asset('assets/img/icon2.png') }}'"
                alt="logo" class="w-12 h-12">
            <h1 :class="scrolled ? 'text-[#ca7305]' : 'text-white'"
                class="font-bold tracking-wide font-sans text-[clamp(14px,4vw,26px)] md:text-[clamp(12px,3vw,20px)]">
                SERABUT
            </h1>
        </div>

        {{-- Desktop Navigation --}}
        <nav class="hidden lg:flex items-center gap-8">
            <a href="/" class="nav-link">Beranda</a>
            <!-- About Dropdown -->
            <div class="relative" x-data="{ open: false }" @click.away="open = false">
                <button @click="open = !open" class="flex items-center gap-1 nav-link">
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
                    <a href="{{ route('profile') }}"
                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-[#ca7305]">Profile</a>
                    <a href="{{ route('wilayahkerja') }}"
                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-[#ca7305]">Wilayah
                        Kerja</a>
                    <a href="{{ route('komoditas') }}"
                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-[#ca7305]">Jenis
                        Komoditas</a>
                </div>
            </div>

            <a href="{{ route('proyek') }}" class="nav-link">Program</a>
            <a href="{{ route('publikasi') }}" class="nav-link">Publikasi</a>
            <a href="{{ route('galery') }}" class="nav-link">Galeri</a>
        </nav>

        {{-- Mobile Menu Button --}}
        <button @click="isOpen = !isOpen" class="lg:hidden focus:outline-none"
            :class="scrolled ? 'text-[#ca7305]' : 'text-white'">
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
                <a href="/" class="block px-4 py-2 text-gray-700 hover:text-[#ca7305]">Beranda</a>
                <div x-data="{ dropdownOpen: false }" class="relative">
                    <button @click="dropdownOpen = !dropdownOpen"
                        class="w-full text-left px-4 py-2 text-gray-700 hover:text-[#ca7305] flex justify-between items-center">
                        <span>Profile</span>
                        <svg :class="{ 'rotate-180': dropdownOpen }" class="w-4 h-4 transition-transform duration-200"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div x-show="dropdownOpen" class="pl-8 space-y-2">
                        <a href="{{ route('profile') }}"
                            class="block py-2 text-gray-700 hover:text-[#ca7305]">Profile</a>
                        <a href="{{ route('wilayahkerja') }}"
                            class="block py-2 text-gray-700 hover:text-[#ca7305]">Wilayah Kerja</a>
                        <a href="{{ route('komoditas') }}"
                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-[#ca7305]">
                            Jenis Komoditas
                        </a>
                    </div>
                </div>
                <a href="{{ route('proyek') }}" class="block px-4 py-2 text-gray-700 hover:text-[#ca7305]">Program</a>
                <a href="{{ route('publikasi') }}"
                    class="block px-4 py-2 text-gray-700 hover:text-[#ca7305]">Publikasi</a>
                <a href="{{ route('galery') }}" class="block px-4 py-2 text-gray-700 hover:text-[#ca7305]">Galeri</a>
            </div>
        </div>
    </div>
</header>
