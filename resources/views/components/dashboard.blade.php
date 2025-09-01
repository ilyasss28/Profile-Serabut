<x-main>
    {{-- Hero --}}
    <div x-data="{
        images: [
            '{{ asset('assets/img/slide1.jpg') }}',
            '{{ asset('assets/img/slide2.jpg') }}',
            '{{ asset('assets/img/slide3.jpg') }}'
        ],
        currentIndex: 0
    }" x-init="setInterval(() => { currentIndex = (currentIndex + 1) % images.length }, 5000)" class="relative h-screen w-full overflow-hidden">

        <!-- Background Slides -->
        <template x-for="(image, index) in images" :key="index">
            <div class="absolute inset-0 bg-cover bg-center transition-opacity duration-1000"
                :style="`background-image: url(${image})`"
                :class="currentIndex === index ? 'opacity-100' : 'opacity-0'">
            </div>
        </template>

        <!-- Overlay -->
        <div class="absolute inset-0 bg-black/60"></div>

        <!-- Hero Content -->
        <div class="relative z-10 flex flex-col items-center justify-center h-full text-center text-white px-6">
            <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-bold mb-4 leading-tight">
                Sekolah Rakyat Butuni
            </h1>
            <p class="text-sm sm:text-base md:text-lg lg:text-xl max-w-2xl leading-relaxed">
                Bersama menjaga lingkungan, membangun komunitas, dan menciptakan masa depan yang berkelanjutan.
            </p>
        </div>
    </div>
    {{-- Hero --}}

    {{-- Kami dalam Angka --}}
    <section class="grid grid-cols-1 md:grid-cols-3 gap-8 text-center py-12 bg-gray-50 px-6">
        <div class="bg-white/60 rounded-2xl shadow p-6 hover:shadow-md transition">
            <div class="w-full flex items-center justify-center space-x-2">
                <h6 class="text-2xl font-extrabold text-[#ca7305] tracking-tight" data-target="9">0</h6>
                <span class="text-lg md:text-xl font-medium text-gray-700">Lokasi</span>
            </div>
            <p class="mt-3 text-gray-700 font-medium">Desa Yang Terlibat</p>
        </div>

        <div class="backdrop-blur-sm bg-white/30 rounded-2xl shadow p-6 hover:shadow-md transition">
            <div class="w-full flex items-center justify-center space-x-2">
                <h6 class="text-2xl font-extrabold text-[#ca7305] tracking-tight" data-target="344">0</h6>
                <span class="text-lg md:text-xl font-medium text-gray-700">Orang</span>
            </div>
            <p class="mt-3 text-gray-700 font-medium">Masyarakat Terlibat</p>
        </div>

        <div class="backdrop-blur-sm bg-white/30 rounded-2xl shadow p-6 hover:shadow-md transition">
            <div class="w-full flex items-center justify-center space-x-2">
                <h6 class="text-2xl font-extrabold text-[#ca7305] tracking-tight" data-target="3">0</h6>
                <span class="text-lg md:text-xl font-medium text-gray-700">Kab/Kota</span>
            </div>
            <p class="mt-3 text-gray-700 font-medium">Wilayah Kerja</p>
        </div>
    </section>
    {{-- Kami dalam Angka --}}

    {{-- Tentang Kami --}}
    <section class="max-w-full px-6 py-12">
        <div class="flex flex-col md:flex-row gap-4">
            <!-- Video Carousel -->
            <div x-data="{ currentSlide: 0, slides: 3 }" x-init="setInterval(() => { currentSlide = (currentSlide + 1) % slides }, 5000)"
                class="relative rounded-lg h-[280px] overflow-hidden flex-1">

                <!-- Slides wrapper -->
                <div class="relative w-full h-full overflow-hidden">
                    <div class="flex transition-transform duration-1000 ease-in-out h-full"
                        :style="`transform: translateX(-${currentSlide * 100}%);`">

                        <!-- Slide 1 -->
                        <div class="min-w-full h-full">
                            <img src="{{ asset('assets/img/slide1.jpg') }}" alt="Slide 1"
                                class="w-full h-full object-cover rounded-lg">
                        </div>

                        <!-- Slide 2 -->
                        <div class="min-w-full h-full">
                            <img src="{{ asset('assets/img/slide3.jpg') }}" alt="Slide 2"
                                class="w-full h-full object-cover rounded-lg">
                        </div>

                        <!-- Slide 3 -->
                        <div class="min-w-full h-full">
                            <img src="{{ asset('assets/img/slide2.jpg') }}" alt="Slide 3"
                                class="w-full h-full object-cover rounded-lg">
                        </div>
                    </div>

                    <!-- Navigation Buttons -->
                    <button @click="currentSlide = (currentSlide - 1 + slides) % slides"
                        class="absolute left-3 top-1/2 -translate-y-1/2 bg-black/50 hover:bg-black/75 text-white p-3 rounded-full transition">
                        <i class="fas fa-chevron-left"></i>
                    </button>
                    <button @click="currentSlide = (currentSlide + 1) % slides"
                        class="absolute right-3 top-1/2 -translate-y-1/2 bg-black/50 hover:bg-black/75 text-white p-3 rounded-full transition">
                        <i class="fas fa-chevron-right"></i>
                    </button>

                    <!-- Indicators -->
                    <div class="absolute bottom-4 left-1/2 -translate-x-1/2 flex space-x-2">
                        <template x-for="(slide, index) in slides" :key="index">
                            <button @click="currentSlide = index"
                                :class="currentSlide === index ? 'bg-white' : 'bg-white/50'"
                                class="w-3 h-3 rounded-full transition">
                            </button>
                        </template>
                    </div>
                </div>
            </div>

            <!-- Content -->
            <div class="flex flex-col justify-start flex-1 gap-4">
                <h4 class="text-sm font-semibold text-gray-600 uppercase">Tentang Kami</h4>
                <h2 class="text-2xl md:text-3xl font-bold text-[#ca7305]">
                    Memelihara Alam,<br>Memberdayakan Komunitas
                </h2>
                <p class="text-gray-600 leading-relaxed">
                    Penelitian dan inovasi dalam pengelolaan sumber daya alam yang berkelanjutan oleh
                    organisasi-organisasi akar rumput.
                    Organisasi masyarakat sipil Indonesia, termasuk organisasi non-profit lokal dan jaringan tematik,
                    berada di garis depan
                    dalam mendorong perubahan untuk kepentingan masyarakat dan alam.
                </p>

                <!-- CTA Button -->
                <a href="/tentang" class="btn-primary text-sm gap-2 self-start hover:bg-[#b36504] transition-colors">
                    Pelajari Selengkapnya
                    <i class="fa-solid fa-arrow-up-right-from-square"></i>
                </a>
            </div>
        </div>
    </section>
    {{-- Tentang Kami --}}

    {{-- Proyek --}}
    <section class="py-16 bg-gray-50">
        <div class="max-w-full mx-auto px-6">
            <!-- Header -->
            <div class="flex flex-col items-center justify-center mb-16 relative">
                <!-- Decorative background elements -->
                <div class="absolute -top-10 -left-10 w-20 h-20 bg-[#ca7305]/5 rounded-full"></div>
                <div class="absolute top-20 right-0 w-32 h-32 bg-yellow-100/30 rounded-full blur-2xl"></div>

                <!-- Main heading with animated underline -->
                <div class="relative group">
                    <h2 class="text-3xl md:text-4xl font-bold text-[#ca7305] mb-2 relative z-10 tracking-tight">
                        Program Unggulan
                    </h2>
                    <!-- Accent dots -->
                    <div class="absolute -right-4 -top-4 w-2 h-2 bg-[#ca7305] rounded-full"></div>
                    <div class="absolute -left-6 top-1/2 w-3 h-3 bg-yellow-200 rounded-full"></div>
                </div>

                <!-- Description with hover effect -->
                <div class="mt-8 relative max-w-2xl hidden md:block">
                    <p class="text-gray-600 text-center leading-relaxed relative z-10 text-lg">
                        Berbagai inisiatif dan program yang kami kembangkan untuk
                        <span class="font-semibold text-[#ca7305]">memberikan dampak positif</span> bagi masyarakat
                    </p>

                    <!-- Animated decorative elements -->
                    <div
                        class="absolute -left-8 -top-8 w-6 h-6 rounded-full border-2 border-[#ca7305]/30 animate-pulse">
                    </div>
                    <div
                        class="absolute -right-6 -bottom-6 w-10 h-10 rounded-full border-2 border-[#ca7305]/20 animate-bounce">
                    </div>
                    <div class="absolute right-1/4 -top-4 w-4 h-4 bg-yellow-100 rounded-full"></div>
                </div>
            </div>

            <!-- Project Cards -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Project Card 1 -->
                <div
                    class="group relative overflow-hidden rounded-lg shadow-lg hover:shadow-xl transition-all duration-300">
                    <div class="relative h-90">
                        <img src="{{ asset('assets/img/proyek1.jpg') }}" alt="Project 1"
                            class="w-full h-full object-cover transform group-hover:scale-110 transition duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/80 to-transparent"></div>
                    </div>
                    <div class="absolute bottom-0 p-6 text-white">
                        <h3 class="text-lg font-bold mt-3">Pemberdayaan Petani Lokal</h3>
                        <p class="text-sm text-gray-200 mt-2">Program pelatihan dan pendampingan untuk meningkatkan
                            produktivitas petani</p>
                    </div>
                </div>

                <!-- Project Card 2 -->
                <div
                    class="group relative overflow-hidden rounded-lg shadow-lg hover:shadow-xl transition-all duration-300">
                    <div class="relative h-90">
                        <img src="{{ asset('assets/img/proyek2.jpg') }}" alt="Project 2"
                            class="w-full h-full object-cover transform group-hover:scale-110 transition duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/80 to-transparent"></div>
                    </div>
                    <div class="absolute bottom-0 p-6 text-white">
                        <h3 class="text-lg font-bold mt-3">Konservasi Hutan Mangrove</h3>
                        <p class="text-sm text-gray-200 mt-2">Pelestarian ekosistem mangrove bersama masyarakat pesisir
                        </p>
                    </div>
                </div>

                <!-- Project Card 3 -->
                <div
                    class="group relative overflow-hidden rounded-lg shadow-lg hover:shadow-xl transition-all duration-300">
                    <div class="relative h-90">
                        <img src="{{ asset('assets/img/proyek3.jpg') }}" alt="Project 3"
                            class="w-full h-full object-cover transform group-hover:scale-110 transition duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/80 to-transparent"></div>
                    </div>
                    <div class="absolute bottom-0 p-6 text-white">
                        <h3 class="text-lg font-bold mt-3">Edukasi Lingkungan</h3>
                        <p class="text-sm text-gray-200 mt-2">Program pendidikan lingkungan untuk generasi muda</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Proyek --}}

    {{-- Publikasi --}}
    <section class="py-12">
        <div class="max-w-full mx-auto px-6">
            <!-- Header -->
            <div class="flex flex-col md:flex-row justify-between items-center mb-12">
                <div class="text-center md:text-left mb-6 md:mb-0">
                    <h2 class="text-3xl md:text-4xl font-bold text-[#ca7305] mb-4">Publikasi Terbaru</h2>
                    <p class="text-gray-600 max-w-2xl">Temukan berbagai artikel, penelitian, dan berita terkini tentang
                        aktivitas kami</p>
                </div>
                <a href="/publikasi" class="btn-primary">
                    Lihat Semua Publikasi
                    <i class="fas fa-arrow-right ml-2"></i>
                </a>
            </div>

            <!-- Publication Cards -->
            <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
                <!-- Publication Card 1 -->
                <div class="bg-white rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 overflow-hidden">
                    <img src="{{ asset('assets/img/pub.jpg') }}" alt="Publication 1"
                        class="w-full h-48 object-cover">
                    <div class="p-6">
                        <div class="flex items-center gap-4 mb-3">
                            <span class="text-sm text-gray-500">
                                <i class="far fa-calendar mr-2"></i>
                                22 Mar 2024
                            </span>
                            <span class="text-sm text-gray-500">
                                <i class="far fa-user mr-2"></i>
                                Admin
                            </span>
                        </div>
                        <h3 class="text-lg font-bold text-gray-800 mb-2 line-clamp-2">Strategi Pemberdayaan Masyarakat
                            Pesisir</h3>
                        <p class="text-gray-600 text-sm line-clamp-3">Mengulas berbagai pendekatan efektif dalam
                            memberdayakan masyarakat pesisir untuk pengelolaan sumber daya alam yang berkelanjutan.</p>
                    </div>
                </div>

                <!-- Publication Card 2 -->
                <div class="bg-white rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 overflow-hidden">
                    <img src="{{ asset('assets/img/pub.jpg') }}" alt="Publication 2"
                        class="w-full h-48 object-cover">
                    <div class="p-6">
                        <div class="flex items-center gap-4 mb-3">
                            <span class="text-sm text-gray-500">
                                <i class="far fa-calendar mr-2"></i>
                                20 Mar 2024
                            </span>
                            <span class="text-sm text-gray-500">
                                <i class="far fa-user mr-2"></i>
                                Admin
                            </span>
                        </div>
                        <h3 class="text-lg font-bold text-gray-800 mb-2 line-clamp-2">Inovasi dalam Pertanian
                            Berkelanjutan</h3>
                        <p class="text-gray-600 text-sm line-clamp-3">Menggali berbagai inovasi teknologi dan metode
                            dalam mengembangkan sistem pertanian yang ramah lingkungan.</p>
                    </div>
                </div>

                <!-- Publication Card 3 -->
                <div class="bg-white rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 overflow-hidden">
                    <img src="{{ asset('assets/img/pub.jpg') }}" alt="Publication 3"
                        class="w-full h-48 object-cover">
                    <div class="p-6">
                        <div class="flex items-center gap-4 mb-3">
                            <span class="text-sm text-gray-500">
                                <i class="far fa-calendar mr-2"></i>
                                18 Mar 2024
                            </span>
                            <span class="text-sm text-gray-500">
                                <i class="far fa-user mr-2"></i>
                                Admin
                            </span>
                        </div>
                        <h3 class="text-lg font-bold text-gray-800 mb-2 line-clamp-2">Pelestarian Kearifan Lokal</h3>
                        <p class="text-gray-600 text-sm line-clamp-3">Upaya mempertahankan dan mengembangkan
                            nilai-nilai kearifan lokal dalam pengelolaan sumber daya alam.</p>
                    </div>
                </div>

                <!-- Publication Card 4 -->
                <div class="bg-white rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 overflow-hidden">
                    <img src="{{ asset('assets/img/pub.jpg') }}" alt="Publication 4"
                        class="w-full h-48 object-cover">
                    <div class="p-6">
                        <div class="flex items-center gap-4 mb-3">
                            <span class="text-sm text-gray-500">
                                <i class="far fa-calendar mr-2"></i>
                                15 Mar 2024
                            </span>
                            <span class="text-sm text-gray-500">
                                <i class="far fa-user mr-2"></i>
                                Admin
                            </span>
                        </div>
                        <h3 class="text-lg font-bold text-gray-800 mb-2 line-clamp-2">Dampak Program Pemberdayaan</h3>
                        <p class="text-gray-600 text-sm line-clamp-3">Evaluasi dan analisis dampak program pemberdayaan
                            masyarakat terhadap kesejahteraan dan kelestarian lingkungan.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Publikasi --}}

    {{-- FAQ --}}
    <section id="faq" class="py-16 bg-gray-50">
        <div class="max-w-full mx-auto px-6">
            <!-- Judul -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center mb-10">
                <div>
                    <h2 class="text-2xl md:text-3xl font-bold text-[#ca7305] mb-4">
                        Pertanyaan yang Sering Diajukan
                    </h2>
                    <p class="text-gray-600 max-w-2xl">
                        Semua hal yang perlu Anda ketahui tentang Sekolah Rakyat Butuni
                    </p>
                </div>

                <!-- Tombol Aksi -->
                <div class="flex justify-center md:justify-end">
                    <a href="#" class="btn-primary text-sm">
                        Jelajahi FAQ
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
            </div>

            <!-- Accordion -->
            <div x-data="{ selected: null }" class="space-y-4">
                <!-- Item -->
                <template
                    x-for="(item, index) in [
        { q: 'Apa itu Sekolah Rakyat Butuni?', a: 'Sekolah Rakyat Butuni adalah ruang belajar bersama berbasis komunitas yang berfokus pada pendidikan alternatif untuk masyarakat.' },
        { q: 'Siapa yang mendirikan Sekolah Rakyat Butuni?', a: 'Sekolah Rakyat Butuni didirikan oleh sekelompok relawan pendidikan dan aktivis sosial yang peduli terhadap akses pendidikan di daerah.' },
        { q: 'Apa saja kegiatan utama yang dilakukan?', a: 'Beberapa kegiatan utama meliputi kelas literasi, diskusi komunitas, pelatihan keterampilan, hingga kegiatan seni dan budaya.' }
    ]"
                    :key="index">

                    <div class="bg-white shadow rounded-2xl p-5 cursor-pointer transition-all duration-500 hover:shadow-xl hover:scale-[1.01]"
                        @click="selected !== index ? selected = index : selected = null">

                        <!-- Header -->
                        <div class="flex justify-between items-center">
                            <h3 class="font-semibold text-gray-800" x-text="item.q"></h3>
                            <span class="transform transition-transform duration-500"
                                :class="selected === index ? 'rotate-180 text-[#ca7305]' : 'rotate-0 text-gray-500'">
                                <i class="fa-solid fa-chevron-down"></i>
                            </span>
                        </div>

                        <!-- Isi -->
                        <div x-show="selected === index" x-collapse
                            x-transition:enter="transition ease-out duration-500"
                            x-transition:enter-start="opacity-0 -translate-y-2"
                            x-transition:enter-end="opacity-100 translate-y-0"
                            x-transition:leave="transition ease-in duration-400"
                            x-transition:leave-start="opacity-100 translate-y-0"
                            x-transition:leave-end="opacity-0 -translate-y-2"
                            class="mt-3 text-gray-600 leading-relaxed">
                            <p x-text="item.a"></p>
                        </div>
                    </div>
                </template>
            </div>

        </div>
    </section>
    {{-- FAQ --}}
</x-main>
