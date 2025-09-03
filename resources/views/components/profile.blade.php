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
                Profile Organisasi
            </h1>
            <p class="text-base sm:text-lg md:text-xl max-w-3xl mx-auto">
                Mengenal lebih dekat sejarah, visi, misi, dan struktur organisasi kami.
            </p>
        </div>
    </section>

    {{-- Tentang Organisasi --}}
    <section class="max-w-full px-6 py-12">
        <div class="flex flex-col lg:flex-row gap-4">
            <!-- Image -->
            <div class="relative rounded-lg overflow-hidden lg:w-1/2 h-[200px] sm:h-[240px] md:h-[280px]">
                <img src="{{ asset('assets/img/slide1.jpg') }}" alt="Slide 1" class="w-full h-full object-cover">
            </div>

            {{-- Konten --}}
            <div class="flex flex-col justify-start flex-1 gap-3">
                <div class="flex items-center gap-4">
                    <h2 class="text-3xl md:text-4xl font-extrabold text-gray-800 tracking-tight whitespace-nowrap">
                        Tentang <span class="text-[#ca7305]">Serabut</span>
                    </h2>
                    <div class="flex-grow h-[4px] rounded-full bg-gray-700"></div>
                </div>

                <p class="text-gray-600 leading-relaxed">
                    Sekolah Rakyat Butuni berada di Pulau Buton, Provinsi Sulawesi Tenggara. Pulau
                    Buton memiliki luas 4.408 km2. Wilayah kerja dampingan kami adalah desa-desa pertanian, masyarakat
                    adat/lokal sekitar hutan serta masyarakat nelayan/pesisir di Kabupaten Buton, Kabupaten Buton
                    Selatan, dan Kota Baubau.
                </p>

                <p class="text-gray-600 leading-relaxed">
                    Sejak didirikan pada tahun 2006, Sekolah Rakyat Butuni (SERABUT) berjuang untuk memastikan hak
                    konstitusi atas tanah dan perlindungan lingkungan bagi masyarakat Sulawesi Tenggara, khususnya yang
                    terdampak negatif oleh pengambilalihan lahan dan kerusakan lingkungan. Organisasi ini berfokus pada
                    adaptasi perubahan iklim, ekspansi pertambangan, restorasi hutan berbasis
                    masyarakat, pertanian regeneratif, pemberdayaan masyarakat tani dan nelayan, pelestarian ekosistem
                    hutan, pesisir dan laut untuk mengedukasi masyarakat lokal agar mampu bersatu dan memperjuangkan
                    hak-hak mereka secara mandiri.
                </p>
            </div>
        </div>

    </section>

    {{-- Visi & Misi --}}
    <section class="relative overflow-hidden py-16">
        <!-- Background Gambar Full Width -->
        <div class="absolute inset-0">
            <img src="{{ asset('assets/img/visi&misi.jpg') }}" alt="Visi & Misi"
                class="w-full h-full object-cover transform group-hover:scale-105 transition duration-700">
            <div class="absolute inset-0 bg-black/60 to-transparent"></div>
        </div>

        <!-- Konten Visi & Misi -->
        <div class="relative z-10 max-w-full px-6">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-10 text-white">

                <!-- Bagian Visi -->
                <div class="backdrop-blur-sm bg-black/40 p-6 sm:p-10 rounded-2xl shadow-lg">
                    <h4 class="text-sm sm:text-base font-semibold uppercase tracking-wider mb-2">Visi</h4>
                    <h2 class="text-xl md:text-2xl font-bold leading-snug">
                        Menjadi Lembaga Pendidikan yang Unggul
                    </h2>
                    <div class="w-20 h-1 bg-[#ca7305] rounded-full mt-3 mb-6"></div>
                    <p class="text-base sm:text-md md:text-lg leading-relaxed text-gray-100">
                        Membentuk generasi yang cerdas, berkarakter, dan berdaya saing global
                        melalui pendidikan yang berkualitas, inovatif, dan berkelanjutan.
                    </p>
                </div>

                <!-- Bagian Misi -->
                <div class="backdrop-blur-sm bg-black/40 p-6 sm:p-10 rounded-2xl shadow-lg">
                    <h4 class="text-sm sm:text-base font-semibold uppercase tracking-wider mb-2">Misi</h4>
                    <h2 class="text-xl md:text-2xl font-bold leading-snug">
                        Mewujudkan Pendidikan Berkualitas untuk Semua
                    </h2>
                    <div class="w-20 h-1 bg-[#ca7305] rounded-full mt-3 mb-6"></div>

                    <ul class="space-y-4 text-base text-gray-100">
                        <li class="flex items-start gap-3">
                            <span
                                class="flex-shrink-0 w-8 h-8 flex items-center justify-center rounded-full bg-[#ca7305] text-black font-bold">1</span>
                            Memberikan akses pendidikan yang merata bagi seluruh lapisan masyarakat.
                        </li>
                        <li class="flex items-start gap-3">
                            <span
                                class="flex-shrink-0 w-8 h-8 flex items-center justify-center rounded-full bg-[#ca7305] text-black font-bold">2</span>
                            Mendorong inovasi dalam metode pembelajaran dan teknologi pendidikan.
                        </li>
                        <li class="flex items-start gap-3">
                            <span
                                class="flex-shrink-0 w-8 h-8 flex items-center justify-center rounded-full bg-[#ca7305] text-black font-bold">3</span>
                            Mengembangkan potensi siswa agar menjadi individu yang mandiri dan berintegritas.
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    {{-- Visi & Misi --}}

    {{-- Struktur Organisasi --}}
    <section id="struktur" class="py-20 bg-gradient-to-br from-gray-50 via-white to-gray-100 relative">
        <div class="w-full px-6 text-center relative z-10">

            <!-- Title -->
            <div class="flex items-center justify-center gap-4 mb-4">
                <div class="flex-grow h-[4px] rounded-full bg-gray-700"></div>
                <h2 class="text-3xl md:text-4xl font-extrabold text-gray-800 tracking-tight whitespace-nowrap">
                    Tim <span class="text-[#ca7305]">Serabut</span>
                </h2>
                <div class="flex-grow h-[4px] rounded-full bg-gray-700"></div>
            </div>
            <p class="text-gray-600 max-w-2xl mx-auto mb-12 text-lg">
                Berkenalan dengan orang-orang hebat di balik Sekolah Rakyat Butuni
            </p>

            <!-- Grid -->
            <div class="flex flex-wrap justify-center gap-10">
                <!-- Card -->
                <div class="relative group w-64">
                    <!-- Photo -->
                    <div
                        class="relative w-64 h-64 rounded-full overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-500">
                        <img src="{{ asset('assets/img/Profile.jpg') }}" alt="Finance"
                            class="w-full h-full object-cover transform group-hover:scale-110 transition duration-500">
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/40 to-transparent opacity-70 group-hover:opacity-90 transition">
                        </div>
                    </div>
                    <!-- Info -->
                    <div class="mt-4 text-center">
                        <h4 class="text-lg font-bold text-gray-800 group-hover:text-[#ca7305] transition">
                            LA ODE FITRIYADI NUR SYAWAL
                        </h4>
                        <p class="text-sm text-gray-600">Director</p>
                    </div>
                </div>

                <!-- Card -->
                <div class="relative group w-64">
                    <div
                        class="relative w-64 h-64 rounded-full overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-500">
                        <img src="{{ asset('assets/img/Profile3.jpg') }}" alt="Finance"
                            class="w-full h-full object-cover transform group-hover:scale-110 transition duration-500">
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/40 to-transparent opacity-70 group-hover:opacity-90 transition">
                        </div>
                    </div>
                    <div class="mt-4 text-center">
                        <h4 class="text-lg font-bold text-gray-800 group-hover:text-[#ca7305] transition">
                            Heriyani
                        </h4>
                        <p class="text-sm text-gray-600">Finance</p>
                    </div>
                </div>

                <!-- Card -->
                <div class="relative group w-64">
                    <div
                        class="relative w-64 h-64 rounded-full overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-500">
                        <img src="{{ asset('assets/img/Profile2.jpg') }}" alt="Program Manager"
                            class="w-full h-full object-cover transform group-hover:scale-110 transition duration-500">
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/40 to-transparent opacity-70 group-hover:opacity-90 transition">
                        </div>
                    </div>
                    <div class="mt-4 text-center">
                        <h4 class="text-lg font-bold text-gray-800 group-hover:text-[#ca7305] transition">
                            Irsan Nassa
                        </h4>
                        <p class="text-sm text-gray-600">Program Manager</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

</x-main>
