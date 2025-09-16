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
            <h1 class="text-5xl md:text-7xl font-bold leading-tight relative">
                SERABUT
            </h1>
            <span class="block w-full max-w-[20ch] border-t-2 border-[#ca7305] mt-2"></span>
            <span class="text-md font-semibold uppercase text-[#ca7305] tracking-widest mt-3 inline-block">
                SEKOLAH RAKYAT BUTUNI
            </span>
        </div>
    </div>
    {{-- Hero --}}

    {{-- Kami dalam Angka --}}
    <section class="grid grid-cols-1 md:grid-cols-3 gap-8 text-center py-12 bg-gray-50 px-6">
        {{-- Card Lokasi --}}
        <a href="{{ route('wilayahkerja') }}"
            class="block bg-white/60 rounded-2xl shadow p-6 hover:shadow-md hover:scale-[1.02] transition transform duration-300">
            <div class="w-full flex items-center justify-center space-x-2">
                <h6 class="text-2xl font-extrabold text-[#ca7305] tracking-tight"
                    data-target="{{ $statistik->jumlah_desa ?? 0 }}">0</h6>
                <span class="text-lg md:text-xl font-medium text-gray-700">Lokasi</span>
            </div>
            <p class="mt-3 text-gray-700 font-medium">Desa Yang Terlibat</p>
        </a>

        {{-- Card Masyarakat Terlibat --}}
        <a href="{{ route('wilayahkerja') }}"
            class="block backdrop-blur-sm bg-white/30 rounded-2xl shadow p-6 hover:shadow-md hover:scale-[1.02] transition transform duration-300">
            <div class="w-full flex items-center justify-center space-x-2">
                <h6 class="text-2xl font-extrabold text-[#ca7305] tracking-tight"
                    data-target="{{ $statistik->jumlah_masyarakat ?? 0 }}">0</h6>
                <span class="text-lg md:text-xl font-medium text-gray-700">Orang</span>
            </div>
            <p class="mt-3 text-gray-700 font-medium">Masyarakat Terlibat</p>
        </a>

        <a href="{{ route('komoditas') }}"
            class="block backdrop-blur-sm bg-white/30 rounded-2xl shadow p-6 hover:shadow-md hover:scale-[1.02] transition transform duration-300">
            <div class="w-full flex items-center justify-center space-x-2">
                <h6 class="text-2xl font-extrabold text-[#ca7305] tracking-tight"
                    data-target="{{ $statistik->jumlah_komoditas ?? 0 }}">0</h6>
                <span class="text-lg md:text-xl font-medium text-gray-700">Jenis</span>
            </div>
            <p class="mt-3 text-gray-700 font-medium">Bahan Komoditas</p>
        </a>
    </section>
    {{-- Kami dalam Angka --}}

    {{-- Tentang Kami --}}
    <section class="max-w-full px-6 py-12">
        <div class="flex flex-col md:flex-row gap-4">
            <!-- Video Carousel -->
            <div x-data="{ currentSlide: 0, slides: {{ $totalSlides }} }" x-init="setInterval(() => { currentSlide = (currentSlide + 1) % slides }, 5000)"
                class="relative rounded-lg aspect-video overflow-hidden flex-1">

                <!-- Slides wrapper -->
                <div class="relative w-full h-full overflow-hidden">
                    <div class="flex transition-transform duration-1000 ease-in-out h-full"
                        :style="`transform: translateX(-${currentSlide * 100}%);`">

                        <!-- Slides -->
                        @foreach ($profiles as $gambar)
                            @foreach ($gambar->gambar as $img)
                                <div class="min-w-full h-full">
                                    <img src="{{ asset('storage/' . $img) }}" alt="Gambar Serabut"
                                        class="w-full h-full object-cover rounded-lg">
                                </div>
                            @endforeach
                        @endforeach
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
                <h4 class="text-sm font-semibold text-gray-600 uppercase">
                    {{ $profiles->first()->sub_judul ?? 'Tentang Kami' }}</h4>
                <h2 class="text-2xl md:text-3xl font-bold text-[#ca7305]">
                    {{ $profiles->first()->judul ?? 'Pemberdayaan Masyarakat & Pelestarian Lingkungan' }}
                </h2>
                <p class="text-gray-600 leading-relaxed">
                    {{ Str::words(strip_tags($profiles->first()?->deskripsi ?? ''), 60, '...') }}
                </p>
                <!-- CTA Button -->
                <a href="{{ route('profile') }}"
                    class="btn-primary text-md gap-2 self-start hover:bg-[#b36504] transition-colors">
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
                            Program Unggulan
                        </h2>
                        <p class="text-gray-600 max-w-2xl italic">
                            Menampilkan program unggulan Sekolah Rakyat Butuni untuk pemberdayaan masyarakat dan
                            pengembangan komunitas.
                        </p>
                    </div>
                </div>

                <div class="flex justify-start md:justify-end">
                    <a href="{{ route('proyek') }}" class="btn-primary text-md">
                        Jelajahi Program
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
            </div>

            <!-- Grid Proyek -->
            <div class="grid md:grid-cols-3 gap-6">
                <!-- Program Utama -->
                <a href="{{ route('detail-proyek', $mainProgram->id) }}"
                    class="block relative md:col-span-2 group overflow-hidden rounded-lg shadow-md">
                    <img src="{{ asset('storage/' . $mainProgram->gambar) }}" alt="{{ $mainProgram->judul }}"
                        class="w-full h-[600px] object-cover transition-transform duration-300 group-hover:scale-110">

                    <!-- Tanggal & Kategori -->
                    <div class="absolute top-3 left-3 flex items-center gap-2">
                        <!-- Tanggal -->
                        <span
                            class="flex items-center gap-2 bg-gradient-to-r from-black/60 to-black/40 text-white text-xs font-medium px-3 py-1.5 rounded-full shadow-lg backdrop-blur-sm">
                            <i class="fas fa-calendar-alt text-white/80"></i>
                            <time datetime="{{ $mainProgram->tanggal_kegiatan }}">
                                {{ \Carbon\Carbon::parse($mainProgram->tanggal_kegiatan)->translatedFormat('d F Y') }}
                            </time>
                        </span>
                        <!-- Status -->
                        <span
                            class="flex items-center gap-2 bg-gradient-to-r from-[#ca7305]/80 to-[#ca7305]/60 text-white text-xs font-medium px-3 py-1.5 rounded-full shadow-lg backdrop-blur-sm">
                            <i class="fas fa-tag text-white/80"></i>
                            {{ $mainProgram->status }}
                        </span>
                    </div>

                    <!-- Overlay -->
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent flex items-end">
                        <div class="w-full p-6 text-white flex items-center justify-between">
                            <div>
                                <h3 class="text-xl sm:text-3xl font-bold mb-2">{{ $mainProgram->judul }}</h3>
                                <p class="text-md sm:text-xl md:text-base">
                                    {!! Str::words(optional($mainProgram->latarBelakang)->deskripsi ?? 'Deskripsi belum tersedia', 25, '...') !!}
                                </p>
                            </div>
                            <i class="fa-solid fa-chevron-right text-lg ml-4"></i>
                        </div>
                    </div>
                </a>

                <!-- Program Samping -->
                <div class="flex flex-col gap-4">
                    @foreach ($sidePrograms as $program)
                        <a href="{{ route('detail-proyek', $program->id) }}"
                            class="block relative group overflow-hidden rounded-md shadow">
                            <img src="{{ asset('storage/' . $program->gambar) }}" alt="{{ $program->judul }}"
                                class="w-full h-73 object-cover transition-transform duration-300 group-hover:scale-110">

                            <div class="absolute top-3 left-3 flex items-center gap-2">
                                <span
                                    class="flex items-center gap-2 bg-gradient-to-r from-black/60 to-black/40 text-white text-xs font-medium px-3 py-1.5 rounded-full shadow-lg backdrop-blur-sm">
                                    <i class="fas fa-calendar-alt text-white/80"></i>
                                    <time datetime="{{ $program->tanggal_kegiatan }}">
                                        {{ \Carbon\Carbon::parse($program->tanggal_kegiatan)->translatedFormat('d F Y') }}
                                    </time>
                                </span>
                                <span
                                    class="flex items-center gap-2 bg-gradient-to-r from-[#ca7305]/80 to-[#ca7305]/60 text-white text-xs font-medium px-3 py-1.5 rounded-full shadow-lg backdrop-blur-sm">
                                    <i class="fas fa-tag text-white/80"></i>
                                    {{ $program->status }}
                                </span>
                            </div>

                            <div
                                class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent flex items-end">
                                <div class="p-4 text-white w-full flex items-center justify-between">
                                    <div class="flex-1">
                                        <h3 class="text-xl font-bold mb-1">{{ $program->judul }}</h3>
                                        <p class="text-md">
                                            {!! Str::words(optional($program->latarBelakang)->deskripsi ?? 'Deskripsi belum tersedia', 10, '...') !!}
                                        </p>
                                    </div>
                                    <i class="fa-solid fa-chevron-right mt-1 ml-3"></i>
                                </div>
                            </div>
                        </a>
                    @endforeach
                </div>

            </div>
        </div>
    </section>
    {{-- Proyek --}}

    {{-- Komoditas --}}
    <section class="py-10 bg-white">
        <div class="max-w-full mx-auto px-6">
            <!-- Header -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 items-start mb-10">
                <div class="flex flex-row gap-3">
                    <span class="w-1 bg-[#ca7305] rounded"></span>
                    <div class="flex flex-col">
                        <h2 class="text-xl md:text-2xl font-bold text-[#252422] uppercase">
                            Jenis Komoditas
                        </h2>
                        <p class="text-gray-600 max-w-2xl italic">
                            Jelajahi berbagai jenis komoditas yang dihasilkan oleh Sekolah Rakyat Butuni untuk membangun
                            masyarakat dan lingkungan yang
                            lebih baik.
                        </p>
                    </div>
                </div>

                <div class="flex justify-start md:justify-end">
                    <a href="{{ route('komoditas') }}" class="btn-primary text-md">
                        Jelajahi Komoditas
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8 mt-10">
                @foreach ($komoditas as $item)
                    <a href="{{ route('detail-komoditas', $item->id) }}"
                        class="group relative bg-white border border-gray-100 rounded-2xl shadow-sm hover:shadow-lg hover:border-[#ca7305]/40
                  overflow-hidden transition-all duration-500 transform hover:-translate-y-2">

                        <!-- Gambar -->
                        <div class="relative w-full h-56 overflow-hidden">
                            <img src="{{ asset('storage/' . $item->gambar) }}" alt="{{ $item->nama }}"
                                class="w-full h-full object-cover transition-transform duration-700 ease-out group-hover:scale-110">
                        </div>

                        <!-- Konten -->
                        <div class="flex flex-col justify-between h-40 p-5">
                            <!-- Judul -->
                            <h3 class="text-lg font-extrabold tracking-wide text-[#ca7305]">
                                {{ $item->nama }}
                            </h3>

                            <!-- Deskripsi -->
                            <p class="mb-4 text-sm leading-relaxed text-gray-600">
                                {{ Str::words(strip_tags($item->deskripsi ?? ''), 10, '...') }}
                            </p>

                            <!-- Link Detail -->
                            <span
                                class="inline-flex items-center gap-2 text-sm font-semibold text-[#ca7305]
                             transition-all duration-300 group-hover:gap-3 group-hover:underline">
                                Lihat Detail
                                <i class="fa-solid fa-arrow-right text-xs"></i>
                            </span>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </section>
    {{-- Komoditas --}}

    {{-- Publikasi --}}
    <section class="py-10 bg-gray-50">
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
                    <a href="{{ route('publikasi') }}" class="btn-primary text-md">
                        Jelajahi Publikasi
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
            </div>

            <!-- Publikasi Cards -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach ($publikasis as $publis)
                    <a href="{{ route('detail-publikasi', $publis->id) }}"
                        class="group relative overflow-hidden rounded-lg shadow-lg hover:shadow-xl transition-all duration-300 block">
                        <div class="relative h-90">
                            <img src="{{ asset('storage/' . $publis->gambar) }}" alt="{{ $publis->judul }}"
                                class="w-full h-full object-cover transform group-hover:scale-110 transition duration-500">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/80 to-transparent"></div>

                            <!-- Tanggal & Kategori -->
                            <div class="absolute top-3 left-3 flex items-center gap-2 text-xs text-white">
                                <!-- Tanggal -->
                                <time datetime="{{ $publis->tanggal_terbit }}"
                                    class="flex items-center gap-1 bg-gradient-to-r from-black/60 to-black/40 px-3 py-1 rounded-full shadow backdrop-blur-sm">
                                    <i class="fas fa-calendar-alt text-white/80"></i>
                                    {{ $publis->formatted_date }}
                                </time>

                                <!-- Kategori -->
                                <span
                                    class="flex items-center gap-1 bg-gradient-to-r from-[#ca7305]/80 to-[#ca7305]/60 px-3 py-1 rounded-full shadow backdrop-blur-sm">
                                    <i class="fas fa-tag text-white/80"></i>
                                    {{ $publis->kategoriPublikasi->nama }}
                                </span>
                            </div>
                        </div>

                        <div class="absolute bottom-0 left-0 right-0 p-6 text-white flex justify-between items-center">
                            <div>
                                <h3 class="text-xl font-bold mb-2">{{ $publis->judul }}</h3>
                                <p class="text-sm md:text-base">
                                    {!! Str::words($publis->deskripsi, 12, '...') !!}
                                </p>
                            </div>
                            <i class="fa-solid fa-chevron-right text-lg"></i>
                        </div>
                    </a>
                @endforeach
            </div>
            {{-- Card Publikasi --}}
        </div>
    </section>
    {{-- Publikasi --}}

    {{-- FAQ --}}
    <section id="faq" class="py-10 bg-white">
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
                    <a href="{{ route('faq') }}" class="btn-primary text-md">
                        Jelajahi FAQ
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
            </div>

            <!-- Accordion -->
            <div x-data="{ selected: null }" class="space-y-4">
                @foreach ($categories as $catIndex => $category)
                    @if ($category->faqs->isNotEmpty())
                        @php $faq = $category->faqs->first(); @endphp
                        <div class="bg-white shadow rounded-2xl p-5 cursor-pointer transition-all duration-500 hover:shadow-lg hover:scale-[1.01]"
                            @click="selected !== {{ $catIndex }} ? selected = {{ $catIndex }} : selected = null">

                            <!-- Header -->
                            <div class="flex justify-between items-center">
                                <h3 class="font-semibold text-gray-800">
                                    {{ $faq->question }}
                                </h3>
                                <span class="transform transition-transform duration-500"
                                    :class="selected === {{ $catIndex }} ? 'rotate-180 text-[#ca7305]' :
                                        'rotate-0 text-gray-500'">
                                    <i class="fa-solid fa-chevron-down"></i>
                                </span>
                            </div>

                            <!-- Isi -->
                            <div x-show="selected === {{ $catIndex }}" x-collapse
                                x-transition:enter="transition ease-out duration-500"
                                x-transition:enter-start="opacity-0 -translate-y-2"
                                x-transition:enter-end="opacity-100 translate-y-0"
                                x-transition:leave="transition ease-in duration-400"
                                x-transition:leave-start="opacity-100 translate-y-0"
                                x-transition:leave-end="opacity-0 -translate-y-2"
                                class="mt-3 text-gray-600 leading-relaxed">
                                <p>{{ $faq->answer }}</p>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </section>
    {{-- FAQ --}}
</x-main>
