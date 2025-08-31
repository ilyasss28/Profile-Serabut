<x-main>
    {{-- Kami dalam Angka --}}
    <section class="grid grid-cols-1 md:grid-cols-3 gap-8 text-center py-12 bg-gray-50 px-6">
        <div class="bg-white/60 rounded-2xl shadow p-6 hover:shadow-md transition">
            <div class="w-full flex items-center justify-center space-x-2">
                <h6 class="text-2xl md:text-4xl font-extrabold text-[#ca7305] tracking-tight" data-target="9">0</h6>
                <span class="text-lg md:text-xl font-medium text-gray-700">Lokasi</span>
            </div>
            <p class="mt-3 text-gray-700 font-medium">Desa Yang Terlibat</p>
        </div>

        <div class="backdrop-blur-sm bg-white/30 rounded-2xl shadow p-6 hover:shadow-md transition">
            <div class="w-full flex items-center justify-center space-x-2">
                <h6 class="text-2xl md:text-4xl font-extrabold text-[#ca7305] tracking-tight" data-target="344">0</h6>
                <span class="text-lg md:text-xl font-medium text-gray-700">Orang</span>
            </div>
            <p class="mt-3 text-gray-700 font-medium">Masyarakat Terlibat</p>
        </div>

        <div class="backdrop-blur-sm bg-white/30 rounded-2xl shadow p-6 hover:shadow-md transition">
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
                <a href="/tentang" class="btn-primary gap-2 mt-4 self-start">
                    Pelajari Selengkapnya
                    <i class="fa-solid fa-arrow-up-right-from-square"></i>
                </a>
            </div>
        </div>
    </section>
    {{-- Tentang Kami --}}

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
                    <h2 class="text-2xl sm:text-3xl md:text-4xl font-extrabold leading-snug">
                        Menjadi <span class="text-[#ca7305]">Lembaga Pendidikan</span> yang Unggul
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
                    <h2 class="text-2xl sm:text-3xl md:text-4xl font-extrabold leading-snug">
                        Mewujudkan Pendidikan <span class="text-[#ca7305]">Berkualitas</span> untuk Semua
                    </h2>
                    <div class="w-20 h-1 bg-[#ca7305] rounded-full mt-3 mb-6"></div>

                    <ul class="space-y-4 text-base sm:text-md md:text-lg text-gray-100">
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
                    <a href="#" class="btn-primary">
                        Jelajahi FAQ
                        <i class="fa-solid fa-arrow-right"></i>
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
                            <i x-show="selected !== 1" class="fa-solid fa-plus text-gray-500 h-5 w-5"></i>
                            <i x-show="selected === 1" class="fa-solid fa-minus text-gray-500 h-5 w-5"></i>
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
                            <i x-show="selected !== 2" class="fa-solid fa-plus text-gray-500 h-5 w-5"></i>
                            <i x-show="selected === 2" class="fa-solid fa-minus text-gray-500 h-5 w-5"></i>
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
                            <i x-show="selected !== 3" class="fa-solid fa-plus text-gray-500 h-5 w-5"></i>
                            <i x-show="selected === 3" class="fa-solid fa-minus text-gray-500 h-5 w-5"></i>
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
</x-main>
