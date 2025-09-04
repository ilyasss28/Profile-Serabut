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
            <h1 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-bold mb-4 leading-tight">
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
                    Pemberdayaan Masyarakat & Pelestarian Lingkungan
                </h2>
                <p class="text-gray-600 leading-relaxed">
                    Sekolah Rakyat Butuni, atau disingkat SERABUT adalah organisasi yang dibentuk berdasarkan kesamaan visi dan misi serta rasa kepedulian bersama di antara pemberdayaan masyarakat dan pelestarian lingkungan hidup. SERABUT didirikan untuk memastikan agar hak atas tanah dan perlindungan lingkungan yang diatur dalam undang-undang dan merupakan hak konstitusi setiap warga negara dapat terpenuhi, khususnya di wilayah Sulawesi Tenggara.
                </p>
                <!-- CTA Button -->
                <a href="/tentang" class="btn-primary text-md gap-2 self-start hover:bg-[#b36504] transition-colors">
                    Lihat Selengkapnya
                    <i class="fa-solid fa-arrow-up-right-from-square"></i>
                </a>
            </div>
        </div>
    </section>
    {{-- Tentang Kami --}}

    {{-- Proyek --}}
    <section class="py-10 bg-gray-50">
        <div class="max-w-full mx-auto px-6">
            <!-- Header -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 items-start mb-10">
                <div class="flex flex-row gap-3">
                    <span class="w-1 bg-[#ca7305] rounded"></span>
                    <div class="flex flex-col">
                        <h2 class="text-xl md:text-2xl font-bold text-[#252422] uppercase">
                            Proyek Unggulan
                        </h2>
                        <p class="text-gray-600 max-w-2xl italic">
                            Menampilkan berbagai inisiatif dan program unggulan Sekolah Rakyat Butuni yang berfokus pada
                            pemberdayaan masyarakat, pendidikan berkelanjutan, dan pembangunan komunitas.
                        </p>
                    </div>
                </div>

                <div class="flex justify-start md:justify-end">
                    <a href="#" class="btn-primary text-md">
                        Jelajahi Proyek
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
            </div>

            <!-- Grid Proyek -->
            <div class="grid md:grid-cols-3 gap-6">
                <!-- Artikel Utama -->
                <a href="/proyek/detail"
                    class="block relative md:col-span-2 group overflow-hidden rounded-lg shadow-md">
                    <img src="/assets/img/slide1.jpg" alt="Main Article"
                        class="w-full h-[600px] object-cover transition-transform duration-300 group-hover:scale-110">

                    <!-- Tanggal -->
                    <div
                        class="absolute top-3 left-3 flex items-center gap-2 bg-gradient-to-r from-black/60 to-black/40 text-white text-xs font-medium px-3 py-1.5 rounded-full shadow-lg backdrop-blur-sm">
                        <i class="fas fa-calendar-alt text-white/80"></i>
                        <time datetime="2025-06-28" class="tracking-wide">28 Januari 2025</time>
                    </div>

                    <!-- Overlay -->
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent flex items-end">
                        <div class="w-full p-6 text-white flex items-center justify-between">
                            <div>
                                <h3 class="text-3xl font-bold mb-2">Judul Utama</h3>
                                <p class="text-xl md:text-base">
                                    {{ Str::words('Lorem ipsum, dolor sit amet consectetur adipisicing elit. Itaque cum natus ad labore omnis, reiciendis tempora fugiat similique, aliquam ex voluptatibus voluptatem commodi necessitatibus, maiores architecto quia vitae repellendus. Placeat, aut labore aliquid molestiae laboriosam eos beatae praesentium voluptate? Quidem est similique autem iusto eligendi facilis error explicabo sequi tempore.', 30, '...') }}
                                </p>
                            </div>
                            <i class="fa-solid fa-chevron-right text-lg ml-4"></i>
                        </div>
                    </div>
                </a>

                <!-- Artikel Samping -->
                <div class="flex flex-col gap-4">
                    <!-- Artikel 1 -->
                    <a href="/proyek/detail" class="block relative group overflow-hidden rounded-md shadow">
                        <img src="/assets/img/slide2.jpg" alt="Article 1"
                            class="w-full h-73 object-cover transition-transform duration-300 group-hover:scale-110">

                        <!-- Tanggal -->
                        <div
                            class="absolute top-3 left-3 flex items-center gap-2 bg-gradient-to-r from-black/60 to-black/40 text-white text-xs font-medium px-3 py-1.5 rounded-full shadow-lg backdrop-blur-sm">
                            <i class="fas fa-calendar-alt text-white/80"></i>
                            <time datetime="2025-05-15" class="tracking-wide">15 Mei 2025</time>
                        </div>

                        <!-- Overlay -->
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent flex items-end">
                            <div class="p-4 text-white w-full flex items-center justify-between">
                                <div class="flex-1">
                                    <h3 class="text-xl font-bold mb-1">Judul 1</h3>
                                    <p class="text-md">
                                        {{ Str::words('Lorem ipsum dolor sit amet consectetur adipisicing elit. Non eum reiciendis blanditiis deleniti.', 10, '...') }}
                                    </p>
                                </div>
                                <i class="fa-solid fa-chevron-right mt-1 ml-3"></i>
                            </div>
                        </div>
                    </a>

                    <!-- Artikel 2 -->
                    <a href="/proyek/detail" class="block relative group overflow-hidden rounded-md shadow">
                        <img src="/assets/img/slide3.jpg" alt="Article 2"
                            class="w-full h-73 object-cover transition-transform duration-300 group-hover:scale-110">

                        <!-- Tanggal -->
                        <div
                            class="absolute top-3 left-3 flex items-center gap-2 bg-gradient-to-r from-black/60 to-black/40 text-white text-xs font-medium px-3 py-1.5 rounded-full shadow-lg backdrop-blur-sm">
                            <i class="fas fa-calendar-alt text-white/80"></i>
                            <time datetime="2025-05-11" class="tracking-wide">11 Mei 2025</time>
                        </div>

                        <!-- Overlay -->
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent flex items-end">
                            <div class="p-4 text-white w-full flex items-center justify-between">
                                <div class="flex-1">
                                    <h3 class="text-xl font-bold mb-1">Judul 2</h3>
                                    <p class="text-md">
                                        {{ Str::words('Lorem ipsum dolor sit amet consectetur adipisicing elit. Non eum reiciendis blanditiis deleniti.', 10, '...') }}
                                    </p>
                                </div>
                                <i class="fa-solid fa-chevron-right mt-1 ml-3"></i>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    {{-- Proyek --}}

    {{-- Publikasi --}}
    <section class="py-10 bg-white">
        <div class="container max-w-full mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 items-start mb-10">
                <!-- Header -->
                <div class="flex flex-row gap-3">
                    <!-- Garis samping -->
                    <span class="w-1 bg-[#ca7305] rounded"></span>
                    <!-- Konten publikasi -->
                    <div class="flex flex-col">
                        <h2 class="text-xl md:text-2xl font-bold text-[#252422] uppercase">
                            Artikel & Publikasi
                        </h2>
                        <p class="text-gray-600 max-w-2xl italic">
                            Kumpulan berita, artikel, laporan, dan dokumentasi kegiatan yang dipublikasikan oleh Sekolah
                            Rakyat Butuni.
                        </p>
                    </div>
                </div>

                <!-- Tombol Aksi -->
                <div class="flex justify-start md:justify-end">
                    <a href="#" class="btn-primary text-md">
                        Jelajahi Publikasi
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
            </div>

            <!-- Publikasi Cards -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Publikasi Card 1 -->
                <a href="/publikasi/detail/1"
                    class="group relative overflow-hidden rounded-lg shadow-lg hover:shadow-xl transition-all duration-300 block">
                    <div class="relative h-90">
                        <img src="{{ asset('assets/img/proyek1.jpg') }}" alt="Publikasi 1"
                            class="w-full h-full object-cover transform group-hover:scale-110 transition duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/80 to-transparent"></div>

                        <!-- Tanggal & Kategori -->
                        <div class="absolute top-3 left-3 flex items-center gap-2 text-xs text-white">
                            <!-- Tanggal -->
                            <time datetime="2025-01-28"
                                class="flex items-center gap-1 bg-gradient-to-r from-black/60 to-black/40 px-3 py-1 rounded-full shadow backdrop-blur-sm">
                                <i class="fas fa-calendar-alt text-white/80"></i>
                                28 Jan 2025
                            </time>

                            <!-- Kategori -->
                            <span
                                class="flex items-center gap-1 bg-gradient-to-r from-[#ca7305]/80 to-[#ca7305]/60 px-3 py-1 rounded-full shadow backdrop-blur-sm">
                                <i class="fas fa-tag text-white/80"></i>
                                Pendidikan
                            </span>
                        </div>
                    </div>

                    <div class="absolute bottom-0 left-0 right-0 p-6 text-white flex justify-between items-center">
                        <div>
                            <h3 class="text-xl font-bold mb-2">Judul Utama</h3>
                            <p class="text-sm md:text-base">
                                {{ Str::words('Lorem ipsum, dolor sit amet consectetur adipisicing elit. Itaque cum natus ad labore omnis, reiciendis tempora fugiat similique, aliquam ex voluptatibus voluptatem commodi necessitatibus.', 10, '...') }}
                            </p>
                        </div>
                        <i class="fa-solid fa-chevron-right text-lg"></i>
                    </div>
                </a>

                <!-- Publikasi Card 2 -->
                <a href="/publikasi/detail/1"
                    class="group relative overflow-hidden rounded-lg shadow-lg hover:shadow-xl transition-all duration-300 block">
                    <div class="relative h-90">
                        <img src="{{ asset('assets/img/proyek2.jpg') }}" alt="Publikasi 1"
                            class="w-full h-full object-cover transform group-hover:scale-110 transition duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/80 to-transparent"></div>

                        <!-- Tanggal & Kategori -->
                        <div class="absolute top-3 left-3 flex items-center gap-2 text-xs text-white">
                            <!-- Tanggal -->
                            <time datetime="2025-01-28"
                                class="flex items-center gap-1 bg-gradient-to-r from-black/60 to-black/40 px-3 py-1 rounded-full shadow backdrop-blur-sm">
                                <i class="fas fa-calendar-alt text-white/80"></i>
                                28 Jan 2025
                            </time>

                            <!-- Kategori -->
                            <span
                                class="flex items-center gap-1 bg-gradient-to-r from-[#ca7305]/80 to-[#ca7305]/60 px-3 py-1 rounded-full shadow backdrop-blur-sm">
                                <i class="fas fa-tag text-white/80"></i>
                                Pendidikan
                            </span>
                        </div>
                    </div>

                    <div class="absolute bottom-0 left-0 right-0 p-6 text-white flex justify-between items-center">
                        <div>
                            <h3 class="text-xl font-bold mb-2">Judul 2</h3>
                            <p class="text-sm md:text-base">
                                {{ Str::words('Lorem ipsum, dolor sit amet consectetur adipisicing elit. Itaque cum natus ad labore omnis, reiciendis tempora fugiat similique, aliquam ex voluptatibus voluptatem commodi necessitatibus.', 10, '...') }}
                            </p>
                        </div>
                        <i class="fa-solid fa-chevron-right text-lg"></i>
                    </div>
                </a>

                <!-- Publikasi Card 3 -->
                <a href="/publikasi/detail/3"
                    class="group relative overflow-hidden rounded-lg shadow-lg hover:shadow-xl transition-all duration-300 block">
                    <div class="relative h-90">
                        <img src="{{ asset('assets/img/proyek3.jpg') }}" alt="Publikasi 3"
                            class="w-full h-full object-cover transform group-hover:scale-110 transition duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/80 to-transparent"></div>

                        <!-- Tanggal & Kategori -->
                        <div class="absolute top-3 left-3 flex items-center gap-2 text-xs text-white">
                            <!-- Tanggal -->
                            <time datetime="2025-01-28"
                                class="flex items-center gap-1 bg-gradient-to-r from-black/60 to-black/40 px-3 py-1 rounded-full shadow backdrop-blur-sm">
                                <i class="fas fa-calendar-alt text-white/80"></i>
                                28 Jan 2025
                            </time>

                            <!-- Kategori -->
                            <span
                                class="flex items-center gap-1 bg-gradient-to-r from-[#ca7305]/80 to-[#ca7305]/60 px-3 py-1 rounded-full shadow backdrop-blur-sm">
                                <i class="fas fa-tag text-white/80"></i>
                                Pendidikan
                            </span>
                        </div>
                    </div>

                    <div class="absolute bottom-0 left-0 right-0 p-6 text-white flex justify-between items-center">
                        <div>
                            <h3 class="text-xl font-bold mb-2">Judul Utama</h3>
                            <p class="text-sm md:text-base">
                                {{ Str::words('Lorem ipsum, dolor sit amet consectetur adipisicing elit. Itaque cum natus ad labore omnis, reiciendis tempora fugiat similique, aliquam ex voluptatibus voluptatem commodi necessitatibus.', 10, '...') }}
                            </p>
                        </div>
                        <i class="fa-solid fa-chevron-right text-lg"></i>
                    </div>
                </a>
            </div>
            {{-- Card Publikasi --}}
        </div>
    </section>
    {{-- Publikasi --}}

    {{-- FAQ --}}
    <section id="faq" class="py-10 bg-gray-50">
        <div class="max-w-full mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 items-start mb-10">
                <!-- Judul -->
                <div class="flex flex-row gap-3">
                    <!-- Garis samping -->
                    <span class="w-1 bg-[#ca7305] rounded"></span>
                    <!-- Konten publikasi -->
                    <div class="flex flex-col">
                        <h2 class="text-xl md:text-2xl font-bold text-[#252422] uppercase">
                            Pertanyaan yang Sering Diajukan
                        </h2>
                        <p class="text-gray-600 max-w-2xl italic">
                            Semua hal yang perlu Anda ketahui tentang Sekolah Rakyat Butuni
                        </p>
                    </div>
                </div>


                <!-- Tombol Aksi -->
                <div class="flex justify-start md:justify-end">
                    <a href="#" class="btn-primary text-md">
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
