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
            <p class="text-base sm:text-lg md:text-xl max-w-3xl mx-auto">
                Mengenal lebih dekat sejarah, visi, misi, dan struktur organisasi kami.
            </p>
        </div>
    </section>
    {{-- Hero Section --}}

    {{-- Halaman Proyek --}}
    <section class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-6 lg:px-12">
            <!-- Header Section -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 items-center mb-12">
                <div class="flex flex-row gap-3">
                    <span class="w-1 bg-[#ca7305] rounded"></span>
                    <div class="flex flex-col">
                        <h2 class="text-2xl md:text-3xl font-extrabold text-[#252422] uppercase">
                            Semua Proyek
                        </h2>
                        <p class="text-gray-600 max-w-2xl">
                            Jelajahi inisiatif dan program unggulan <span class="font-semibold">Sekolah Rakyat
                                Butuni</span>
                            dalam pemberdayaan masyarakat, pendidikan berkelanjutan, dan pembangunan komunitas.
                        </p>
                    </div>
                </div>
                <div class="flex justify-start md:justify-end">
                    <a href="#"
                        class="inline-flex items-center gap-2 bg-[#ca7305] text-white px-6 py-3 rounded-full shadow hover:bg-[#a35604] transition">
                        Tambah Proyek
                        <i class="fa-solid fa-plus"></i>
                    </a>
                </div>
            </div>

            <!-- Grid Proyek -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Card Proyek -->
                <div class="relative group rounded-xl shadow-md overflow-hidden bg-white">
                    <img src="/assets/img/slide1.jpg" alt="Proyek 1"
                        class="w-full h-64 object-cover transition-transform duration-500 group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent"></div>
                    <div class="absolute bottom-0 p-6 text-white flex justify-between items-end w-full">
                        <div>
                            <h3 class="text-xl font-bold mb-1">Proyek 1</h3>
                            <p class="text-sm md:text-base">
                                {{ Str::words('Restorasi hutan berbasis masyarakat untuk meningkatkan keberlanjutan lingkungan di wilayah Buton.', 12, '...') }}
                            </p>
                        </div>
                        <a href="/proyek/detail" class="ml-3">
                            <i class="fa-solid fa-chevron-right text-lg"></i>
                        </a>
                    </div>
                </div>

                <!-- Card Proyek -->
                <div class="relative group rounded-xl shadow-md overflow-hidden bg-white">
                    <img src="/assets/img/slide2.jpg" alt="Proyek 2"
                        class="w-full h-64 object-cover transition-transform duration-500 group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent"></div>
                    <div class="absolute bottom-0 p-6 text-white flex justify-between items-end w-full">
                        <div>
                            <h3 class="text-xl font-bold mb-1">Proyek 2</h3>
                            <p class="text-sm md:text-base">
                                {{ Str::words('Program pendidikan lingkungan untuk generasi muda di desa-desa binaan.', 12, '...') }}
                            </p>
                        </div>
                        <a href="/proyek/detail" class="ml-3">
                            <i class="fa-solid fa-chevron-right text-lg"></i>
                        </a>
                    </div>
                </div>

                <!-- Card Proyek -->
                <div class="relative group rounded-xl shadow-md overflow-hidden bg-white">
                    <img src="/assets/img/slide3.jpg" alt="Proyek 3"
                        class="w-full h-64 object-cover transition-transform duration-500 group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent"></div>
                    <div class="absolute bottom-0 p-6 text-white flex justify-between items-end w-full">
                        <div>
                            <h3 class="text-xl font-bold mb-1">Proyek 3</h3>
                            <p class="text-sm md:text-base">
                                {{ Str::words('Inovasi pertanian berkelanjutan untuk meningkatkan kesejahteraan petani lokal.', 12, '...') }}
                            </p>
                        </div>
                        <a href="/proyek/detail" class="ml-3">
                            <i class="fa-solid fa-chevron-right text-lg"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Pagination -->
            <div class="mt-12 flex justify-center">
                <nav class="flex space-x-2">
                    <a href="#" class="px-4 py-2 rounded-full bg-[#ca7305] text-white">1</a>
                    <a href="#"
                        class="px-4 py-2 rounded-full bg-gray-200 text-gray-700 hover:bg-[#ca7305] hover:text-white transition">2</a>
                    <a href="#"
                        class="px-4 py-2 rounded-full bg-gray-200 text-gray-700 hover:bg-[#ca7305] hover:text-white transition">3</a>
                </nav>
            </div>
        </div>
    </section>
</x-main>
