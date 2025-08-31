<x-main>
    {{-- Kami dalam Angka --}}
    <section class="grid grid-cols-1 md:grid-cols-3 gap-8 text-center py-12 bg-gray-50 px-6">
        <div class="backdrop-blur-sm bg-white/30 rounded-2xl shadow-md p-6 hover:shadow-xl transition">
            <div class="w-full flex items-center justify-center space-x-2">
                <h6 class="text-2xl md:text-4xl font-extrabold text-[#ca7305] tracking-tight" data-target="9">0</h6>
                <span class="text-lg md:text-xl font-medium text-gray-700">Lokasi</span>
            </div>
            <p class="mt-3 text-gray-700 font-medium">Desa Yang Terlibat</p>
        </div>

        <div class="backdrop-blur-sm bg-white/30 rounded-2xl shadow-md p-6 hover:shadow-xl transition">
            <div class="w-full flex items-center justify-center space-x-2">
                <h6 class="text-2xl md:text-4xl font-extrabold text-[#ca7305] tracking-tight" data-target="344">0</h6>
                <span class="text-lg md:text-xl font-medium text-gray-700">Orang</span>
            </div>
            <p class="mt-3 text-gray-700 font-medium">Masyarakat Terlibat</p>
        </div>

        <div class="backdrop-blur-sm bg-white/30 rounded-2xl shadow-md p-6 hover:shadow-xl transition">
            <div class="w-full flex items-center justify-center space-x-2">
                <h6 class="text-2xl md:text-4xl font-extrabold text-[#ca7305] tracking-tight" data-target="3">0</h6>
                <span class="text-lg md:text-xl font-medium text-gray-700">Kab/Kota</span>
            </div>
            <p class="mt-3 text-gray-700 font-medium">Wilayah Kerja</p>
        </div>
    </section>
    {{-- Kami dalam Angka --}}

    {{-- Tentang Kami --}}
    <section class="container max-w-full mx-auto px-6 py-12">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-stretch">
            <!-- Video -->
            <div class="flex">
                <iframe class="w-full h-full aspect-video md:aspect-auto rounded-xl shadow-lg"
                    src="https://www.youtube.com/embed/K-e6CERE8O4?si=3it-agFfEx0cl-_y" title="YouTube video player"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen>
                </iframe>
            </div>

            <!-- Konten -->
            <div class="flex flex-col justify-center">
                <h4 class="text-sm font-semibold text-gray-600 uppercase">Tentang Kami</h4>
                <h2 class="text-2xl md:text-3xl font-bold text-[#ca7305] mt-2">
                    Memelihara Alam,<br>Memberdayakan Komunitas
                </h2>
                <p class="text-gray-600 mt-4 leading-relaxed">
                    Penelitian dan inovasi dalam pengelolaan sumber daya alam yang berkelanjutan oleh
                    organisasi-organisasi akar rumput.
                    Organisasi masyarakat sipil Indonesia, termasuk organisasi non-profit lokal dan jaringan tematik,
                    berada di garis depan
                    dalam mendorong perubahan untuk kepentingan masyarakat dan alam.
                </p>

                <!-- Tombol CTA -->
                <a href="/tentang"
                    class="inline-flex col items-center gap-2 mt-6 px-5 py-3 bg-[#ca7305] text-white font-medium rounded-full shadow hover:bg-[#a35604] transition self-start">
                    Pelajari Selengkapnya
                    <i class="fa-solid fa-arrow-up-right-from-square"></i>
                </a>
            </div>
        </div>
    </section>
    {{-- Tentang Kami --}}

    {{-- Visi & Misi --}}
    {{-- <section class="container max-w-full mx-auto px-6 py-12">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
            <!-- Konten -->
            <div class="flex flex-col justify-center">
                <h4 class="text-sm font-semibold text-gray-600 uppercase">Visi & Misi</h4>
                <h2 class="text-2xl md:text-3xl font-bold text-[#ca7305] mt-2">
                    Menjadi Lembaga Pendidikan yang Unggul
                </h2>
                <p class="text-gray-600 mt-4 leading-relaxed">
                    Kami berkomitmen untuk memberikan pendidikan yang berkualitas, mendorong keterampilan, dan
                    menginspirasi generasi muda untuk menjadi pemimpin yang unggul.
                </p>
                <!-- Tombol CTA -->
                <a href="/anggota"
                    class="inline-flex col items-center gap-2 mt-6 px-5 py-3 bg-[#ca7305] text-white font-medium rounded-full shadow hover:bg-[#a35604] transition self-start">
                    Pelajari Selengkapnya
                    <i class="fa-solid fa-arrow-up-right-from-square"></i>
                </a>
            </div>
            <!-- Gambar -->
            <div class="flex justify-center">
                <img src="{{ asset('assets/img/visi-misi.png') }}" alt="Visi & Misi"
                    class="w-full h-full object-cover rounded-xl shadow-lg">
            </div>
        </div>
    </section> --}}
    {{-- Visi & Misi --}}

    {{-- FAQ --}}
    <section id="faq" class="py-16 bg-gray-50">
        <div class="max-w-full mx-auto px-6">
            <!-- Judul -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center mb-10">
                <div>
                    <h2 class="text-3xl md:text-4xl font-bold text-[#ca7305] mb-4">
                        Pertanyaan yang Sering Diajukan
                    </h2>
                    <p class="text-gray-600 max-w-2xl">
                        Semua hal yang perlu Anda ketahui tentang Sekolah Rakyat Butuni
                    </p>
                </div>

                <!-- Tombol Aksi -->
                <div class="flex justify-center md:justify-end">
                    <a href="#"
                        class="flex items-center gap-2 bg-[#ca7305] text-white px-5 py-2 rounded-full shadow hover:bg-[#a35604] transition">
                        Jelajahi FAQ
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M14 5l7 7m0 0l-7 7m7-7H3" />
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Accordion -->
            <div x-data="{ selected: null }" class="space-y-4">
                <!-- Item 1 -->
                <div class="bg-white shadow rounded-2xl p-5 cursor-pointer"
                    @click="selected !== 1 ? selected = 1 : selected = null">
                    <div class="flex justify-between items-center">
                        <h3 class="font-semibold text-gray-800">Apa itu Sekolah Rakyat Butuni?</h3>
                        <span>
                            <svg x-show="selected !== 1" xmlns="http://www.w3.org/2000/svg"
                                class="h-5 w-5 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 4v16m8-8H4" />
                            </svg>
                            <svg x-show="selected === 1" xmlns="http://www.w3.org/2000/svg"
                                class="h-5 w-5 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H4" />
                            </svg>
                        </span>
                    </div>
                    <div x-show="selected === 1" x-collapse class="mt-3 text-gray-600">
                        Sekolah Rakyat Butuni adalah ruang belajar bersama berbasis komunitas yang berfokus pada
                        pendidikan alternatif untuk masyarakat.
                    </div>
                </div>

                <!-- Item 2 -->
                <div class="bg-white shadow rounded-2xl p-5 cursor-pointer"
                    @click="selected !== 2 ? selected = 2 : selected = null">
                    <div class="flex justify-between items-center">
                        <h3 class="font-semibold text-gray-800">Siapa yang mendirikan Sekolah Rakyat Butuni?</h3>
                        <span>
                            <svg x-show="selected !== 2" xmlns="http://www.w3.org/2000/svg"
                                class="h-5 w-5 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 4v16m8-8H4" />
                            </svg>
                            <svg x-show="selected === 2" xmlns="http://www.w3.org/2000/svg"
                                class="h-5 w-5 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H4" />
                            </svg>
                        </span>
                    </div>
                    <div x-show="selected === 2" x-collapse class="mt-3 text-gray-600">
                        Sekolah Rakyat Butuni didirikan oleh sekelompok relawan pendidikan dan aktivis sosial yang
                        peduli terhadap akses pendidikan di daerah.
                    </div>
                </div>

                <!-- Item 3 -->
                <div class="bg-white shadow rounded-2xl p-5 cursor-pointer"
                    @click="selected !== 3 ? selected = 3 : selected = null">
                    <div class="flex justify-between items-center">
                        <h3 class="font-semibold text-gray-800">Apa saja kegiatan utama yang dilakukan?</h3>
                        <span>
                            <svg x-show="selected !== 3" xmlns="http://www.w3.org/2000/svg"
                                class="h-5 w-5 text-gray-500" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 4v16m8-8H4" />
                            </svg>
                            <svg x-show="selected === 3" xmlns="http://www.w3.org/2000/svg"
                                class="h-5 w-5 text-gray-500" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H4" />
                            </svg>
                        </span>
                    </div>
                    <div x-show="selected === 3" x-collapse class="mt-3 text-gray-600">
                        Beberapa kegiatan utama meliputi kelas literasi, diskusi komunitas, pelatihan keterampilan,
                        hingga kegiatan seni dan budaya.
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- FAQ --}}

    <script src="{{ asset('assets/js/main.js') }}"></script>
</x-main>
