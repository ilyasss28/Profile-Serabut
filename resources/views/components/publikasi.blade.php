<x-main>
    {{-- Hero Section --}}
    <section class="relative h-[75vh] w-full overflow-hidden">
        <div class="absolute inset-0">
            <img src="{{ asset('assets/img/bg-profile.jpg') }}" alt="Profile Organisasi"
                class="w-full h-full object-cover">
            <div class="absolute inset-0 backdrop-blur-sm bg-black/70"></div>
        </div>

        <div class="relative z-10 flex flex-col items-center justify-center h-full text-center text-white px-6">
            <h1 class="text-3xl sm:text-4xl md:text-5xl font-bold mb-4 leading-tight">
                Publikasi Serabut
            </h1>
            <p class="text-base sm:text-md md:text-lg max-w-3xl mx-auto">
                Jelajahi berbagai proyek Sekolah Rakyat Butuni yang mengedepankan kolaborasi, inovasi, serta
                keberlanjutan untuk membangun masyarakat dan lingkungan yang lebih baik.
            </p>
        </div>
    </section>
    {{-- Hero Section --}}

    {{-- Projects Section --}}
    <section class="py-12 px-6 bg-white">
        <div class="container mx-auto">
            <div class="flex flex-row gap-3 mb-10">
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

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @php
                    $projects = [
                        [
                            'title' => 'Proyek Literasi Desa',
                            'image' => '/assets/img/proyek1.jpg',
                            'date' => '2025-01-28',
                            'date_label' => '28 Jan 2025',
                            'description' => 'Program literasi untuk meningkatkan minat baca masyarakat desa.',
                        ],
                        [
                            'title' => 'Konservasi Hutan Mangrove',
                            'image' => '/assets/img/proyek2.jpg',
                            'date' => '2025-02-12',
                            'date_label' => '12 Feb 2025',
                            'description' => 'Pelestarian ekosistem mangrove bersama masyarakat pesisir.',
                        ],
                        [
                            'title' => 'Program Pemberdayaan Petani',
                            'image' => '/assets/img/proyek3.jpg',
                            'date' => '2025-03-05',
                            'date_label' => '05 Mar 2025',
                            'description' => 'Meningkatkan kapasitas petani lokal melalui pelatihan modern.',
                        ],
                        [
                            'title' => 'Kebun Edukasi Anak',
                            'image' => '/assets/img/slide1.jpg',
                            'date' => '2025-03-20',
                            'date_label' => '20 Mar 2025',
                            'description' => 'Mengenalkan anak pada lingkungan dan pertanian sejak dini.',
                        ],
                        [
                            'title' => 'Bank Sampah Desa',
                            'image' => '/assets/img/slide2.jpg',
                            'date' => '2025-04-10',
                            'date_label' => '10 Apr 2025',
                            'description' => 'Mengelola sampah rumah tangga menjadi barang bermanfaat.',
                        ],
                        [
                            'title' => 'Sekolah Alam Butuni',
                            'image' => '/assets/img/slide3.jpg',
                            'date' => '2025-05-02',
                            'date_label' => '02 Mei 2025',
                            'description' => 'Pendidikan alternatif berbasis alam untuk anak-anak pedesaan.',
                        ],
                    ];
                @endphp

                @foreach ($projects as $project)
                    <a href="{{ route('detail-publikasi') }}"
                        class="group relative overflow-hidden rounded-lg shadow-lg hover:shadow-xl transition-all duration-300 block">
                        <div class="relative h-90">
                            <img src="{{ $project['image'] }}" alt="{{ $project['title'] }}"
                                class="w-full h-full object-cover transform group-hover:scale-110 transition duration-500">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/80 to-transparent"></div>

                            <!-- Tanggal & Kategori -->
                            <div class="absolute top-3 left-3 flex items-center gap-2 text-xs text-white">
                                <!-- Tanggal -->
                                <time datetime="{{ $project['date'] }}"
                                    class="flex items-center gap-1 bg-gradient-to-r from-black/60 to-black/40 px-3 py-1 rounded-full shadow backdrop-blur-sm">
                                    <i class="fas fa-calendar-alt text-white/80"></i>
                                    {{ $project['date_label'] }}
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
                                <h3 class="text-xl font-bold mb-2">{{ $project['title'] }}</h3>
                                <p class="text-sm md:text-base">
                                    {{ Str::words($project['description'], 12, '...') }}
                                </p>
                            </div>
                            <i class="fa-solid fa-chevron-right text-lg"></i>
                        </div>
                    </a>
                @endforeach
            </div>

            <!-- Modern Pagination -->
            <div class="mt-10 flex justify-center">
                <nav class="inline-flex items-center gap-2">
                    <!-- Previous Button -->
                    <a href="#"
                        class="flex items-center w-10 h-10 justify-center text-sm font-medium text-gray-500 bg-white border border-gray-300 rounded-full hover:bg-[#ca7305] hover:text-white transition-all duration-300 group">
                        <svg class="w-4 h-4 group-hover:text-white" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                        </svg>
                    </a>

                    <!-- Page Numbers -->
                    <div class="flex items-center gap-1">
                        <a href="#"
                            class="w-10 h-10 flex items-center justify-center text-sm font-medium bg-[#ca7305] text-white rounded-full">1</a>
                        <a href="#"
                            class="w-10 h-10 flex items-center justify-center text-sm font-medium text-gray-500 bg-white border border-gray-300 rounded-full hover:bg-[#ca7305] hover:text-white transition-all duration-300">2</a>
                        <a href="#"
                            class="w-10 h-10 flex items-center justify-center text-sm font-medium text-gray-500 bg-white border border-gray-300 rounded-full hover:bg-[#ca7305] hover:text-white transition-all duration-300">3</a>
                        <span
                            class="w-10 h-10 flex items-center justify-center text-sm font-medium text-gray-500">...</span>
                        <a href="#"
                            class="w-10 h-10 flex items-center justify-center text-sm font-medium text-gray-500 bg-white border border-gray-300 rounded-full hover:bg-[#ca7305] hover:text-white transition-all duration-300">10</a>
                    </div>

                    <!-- Next Button -->
                    <a href="#"
                        class="flex items-center w-10 h-10 justify-center text-sm font-medium text-gray-500 bg-white border border-gray-300 rounded-full hover:bg-[#ca7305] hover:text-white transition-all duration-300 group">
                        <svg class="w-4 h-4 group-hover:text-white" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </a>
                </nav>
            </div>
            {{-- Pagination end --}}
        </div>
    </section>
    {{-- Projects Section --}}
</x-main>
