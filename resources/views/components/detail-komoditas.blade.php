<x-main>
    {{-- Hero Section --}}
    <section class="relative h-[75vh] w-full overflow-hidden">
        <!-- Background -->
        <div class="absolute inset-0">
            <img src="{{ asset('assets/img/bg-profile.jpg') }}" alt="Profile Organisasi"
                class="w-full h-full object-cover">
            <div class="absolute inset-0 backdrop-blur-sm bg-black/70"></div>
        </div>

        <!-- Content -->
        <div class="relative z-10 flex flex-col items-center justify-center h-full text-center text-white px-6">
            <!-- Label -->
            <span class="text-sm sm:text-base font-semibold uppercase text-[#ca7305] tracking-widest mb-4 inline-block">
                Detail Komoditas
            </span>

            <!-- Nama Komoditas -->
            <h1 class="text-3xl sm:text-4xl md:text-5xl font-extrabold leading-tight max-w-4xl mb-4">
                Komoditas Padi
            </h1>

            <!-- Metadata -->
            <div class="flex flex-wrap justify-center items-center gap-6 text-gray-200 text-sm sm:text-base">
                <!-- Jenis -->
                <div class="flex items-center gap-2">
                    <i class="fas fa-seedling text-[#ca7305]"></i>
                    <span>Perkebunan</span>
                </div>
                <!-- Produksi -->
                <div class="flex items-center gap-2">
                    <i class="fas fa-boxes-stacked text-[#ca7305]"></i>
                    <span>12 Ton / Tahun</span>
                </div>
                <!-- Luas Lahan -->
                <div class="flex items-center gap-2">
                    <i class="fas fa-map text-[#ca7305]"></i>
                    <span>85 Hektar</span>
                </div>
            </div>
        </div>
    </section>
    {{-- Hero Section --}}


    {{-- Detail Komoditas Content Section --}}
    <section class="py-20 px-6 bg-gray-50">
        <div class="max-w-7xl mx-auto space-y-16">
            {{-- Deskripsi Utama --}}
            <div class="bg-white rounded-3xl shadow-lg overflow-hidden lg:flex lg:items-center">
                <!-- Gambar -->
                <div class="lg:w-1/2">
                    <img src="{{ asset('assets/img/komoditas/padi.jpg') }}" alt="Padi"
                        class="w-full h-80 lg:h-full object-cover">
                </div>
                <!-- Konten -->
                <div class="lg:w-1/2 p-8 lg:p-12">
                    <h2 class="text-3xl font-extrabold text-gray-900 mb-4">Tentang Padi</h2>
                    <p class="text-gray-700 leading-relaxed text-lg mb-6">
                        Padi merupakan salah satu komoditas utama yang dikelola oleh Serabut.
                        Melalui sistem pertanian ramah lingkungan, padi tidak hanya menjadi sumber pangan pokok,
                        tetapi juga mendukung kemandirian pangan masyarakat lokal.
                    </p>
                </div>
            </div>

            {{-- Highlight Section --}}
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div
                    class="bg-gradient-to-br from-[#ca7305]/10 to-[#ca7305]/5 border border-[#ca7305]/20 rounded-2xl p-8 hover:shadow-lg transition transform hover:-translate-y-1">
                    <h4 class="text-lg font-bold text-[#ca7305] mb-3">Potensi Produksi</h4>
                    <p class="text-gray-700 leading-relaxed">
                        Rata-rata panen <span class="font-semibold">6 ton/ha</span> dengan potensi ekspansi ke pasar
                        nasional dan internasional.
                    </p>
                </div>
                <div
                    class="bg-gradient-to-br from-[#ca7305]/10 to-[#ca7305]/5 border border-[#ca7305]/20 rounded-2xl p-8 hover:shadow-lg transition transform hover:-translate-y-1">
                    <h4 class="text-lg font-bold text-[#ca7305] mb-3">Masyarakat Terlibat</h4>
                    <p class="text-gray-700 leading-relaxed">
                        Lebih dari <span class="font-semibold">200 keluarga petani</span> menjadi bagian dari program
                        padi Serabut.
                    </p>
                </div>
                <div
                    class="bg-gradient-to-br from-[#ca7305]/10 to-[#ca7305]/5 border border-[#ca7305]/20 rounded-2xl p-8 hover:shadow-lg transition transform hover:-translate-y-1">
                    <h4 class="text-lg font-bold text-[#ca7305] mb-3">Manfaat Ekonomi</h4>
                    <p class="text-gray-700 leading-relaxed">
                        Padi berkontribusi sebagai sumber pendapatan utama sekaligus menopang ekonomi desa.
                    </p>
                </div>
            </div>
        </div>
    </section>
</x-main>
