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
                Proyek Serabut
            </h1>
            <p class="text-base sm:text-md md:text-lg max-w-3xl mx-auto">
                Jelajahi berbagai proyek Sekolah Rakyat Butuni yang mengedepankan kolaborasi, inovasi, serta
                keberlanjutan untuk membangun masyarakat dan lingkungan yang lebih baik.
            </p>
        </div>
    </section>
    {{-- Hero Section --}}

    {{-- Halaman Proyek --}}
    <section class="py-12 px-6 bg-gray-50">
        <div class="max-w-7xl mx-auto space-y-10">
            <div class="flex flex-row gap-3 mb-10"> <!-- Garis samping --> <span
                    class="w-1 bg-[#ca7305] rounded"></span> <!-- Konten publikasi -->
                <div class="flex flex-col">
                    <h2 class="text-xl md:text-2xl font-bold text-[#252422] uppercase"> Proyek Serabut </h2>
                    <p class="text-gray-600 max-w-2xl italic"> Kumpulan proyek, program, dan kegiatan yang telah
                        dilaksanakan oleh Tim Serabut untuk mendukung pemberdayaan masyarakat dan pelestarian
                        lingkungan. </p>
                </div>
            </div>
            @php
                $projects = [
                    [
                        'title' => 'Meningkatkan Restorasi Berbasis Masyarakat di Seluruh Kepulauan Indonesia',
                        'image' => '/assets/img/proyek1.jpg',
                        'date' => '2024-06-24',
                        'date_label' => '24 Jun, 2024',
                        'status' => 'Sedang Berjalan',
                        'desc' =>
                            'LATAR BELAKANG Hutan primer di Indonesia telah ditebang untuk berbagai proyek pembangunan guna memenuhi beragam permintaan akibat pertumbuhan penduduk, urbanisasi yang pesat, dan peningkatan konsumsi. Ketika ekosistem hutan terdegradasi, hutan kehilangan kemampuannya untuk memberikan jasa lingkungan...',
                    ],
                    [
                        'title' => 'Konservasi Hutan Mangrove di Pesisir Buton',
                        'image' => '/assets/img/proyek2.jpg',
                        'date' => '2025-02-12',
                        'date_label' => '12 Feb, 2025',
                        'status' => 'Selesai',
                        'desc' =>
                            'Proyek ini bertujuan untuk melestarikan ekosistem mangrove dengan melibatkan masyarakat pesisir. Upaya ini mencakup penanaman bibit, pengelolaan ekosistem, serta edukasi pentingnya mangrove bagi keseimbangan lingkungan dan sumber mata pencaharian masyarakat sekitar...',
                    ],
                ];
            @endphp

            @foreach ($projects as $project)
                <div
                    class="flex flex-col md:flex-row bg-white rounded-2xl shadow hover:shadow-lg transition duration-300 overflow-hidden">
                    <!-- Gambar -->
                    <div class="md:w-1/2 aspect-video overflow-hidden">
                        <img src="{{ $project['image'] }}" alt="{{ $project['title'] }}"
                            class="w-full h-full object-cover transform hover:scale-105 transition duration-500">
                    </div>

                    <!-- Konten -->
                    <div class="p-6 flex flex-col justify-evenly md:w-1/2">
                        <!-- Judul -->
                        <h2 class="text-2xl font-bold text-gray-900 mb-3 hover:text-[#ca7305] transition">
                            {{ Str::limit($project['title'], 80) }}
                        </h2>

                        <!-- Meta -->
                        <div class="flex items-center gap-4 text-sm text-gray-500 mb-4">
                            <span class="flex items-center gap-1">
                                <i class="fas fa-calendar-alt text-[#ca7305]"></i>
                                {{ $project['date_label'] }}
                            </span>
                            <span
                                class="flex items-center gap-2 px-3 py-1 rounded-full text-xs font-medium
                                {{ $project['status'] == 'Sedang Berjalan' ? 'bg-green-100 text-green-700' : 'bg-blue-100 text-blue-700' }}">
                                <i class="fas fa-flag"></i>
                                {{ $project['status'] }}
                            </span>
                        </div>

                        <!-- Deskripsi -->
                        <p class="text-gray-600 leading-relaxed mb-4">
                            {{ Str::words($project['desc'], 30, '...') }}
                        </p>

                        <!-- Tombol -->
                        <a href="{{ route('detail-proyek', $project['title']) }}"
                            class="inline-flex items-center text-[#ca7305] font-semibold hover:underline">
                            Lihat Project <i class="fa-solid fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                </div>
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
        {{-- Halaman Proyek --}}
    </section>
</x-main>
