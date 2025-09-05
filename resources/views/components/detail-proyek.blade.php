<x-main>
    {{-- Hero Section --}}
    <section class="relative h-[75vh] w-full overflow-hidden">
        <div class="absolute inset-0">
            <img src="{{ asset('assets/img/bg-profile.jpg') }}" alt="Profile Organisasi"
                class="w-full h-full object-cover">
            <div class="absolute inset-0 backdrop-blur-sm bg-black/70"></div>
        </div>

        <div class="relative z-10 flex flex-col items-center justify-center h-full text-center text-white px-6">
            <span class="text-sm font-semibold uppercase text-[#ca7305] tracking-widest mb-4 inline-block">
                Detail Proyek
            </span>

            <!-- Judul -->
            <h6 class="text-xl sm:text-2xl md:text-3xl font-bold leading-tight max-w-4xl mb-3">
                Respons terhadap Perubahan Iklim: Persepsi dan Adaptasi di Kalangan Petani Skala Kecil di Indonesia
            </h6>

            <!-- Tanggal Publikasi -->
            <div class="flex items-center gap-2 text-gray-200 text-sm sm:text-base">
                <i class="fas fa-calendar-alt text-[#ca7305]"></i>
                <time datetime="2025-01-28">28 Januari 2025</time>
            </div>
        </div>
    </section>
    {{-- Hero Section --}}

    {{-- Detail Proyek --}}
    <section class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-6 grid lg:grid-cols-3 gap-10">
            {{-- Konten Utama --}}
            <div class="lg:col-span-2 space-y-10">

                {{-- Latar Belakang --}}
                <article class="bg-white rounded-xl shadow hover:shadow-lg transition p-8 border-l-4 border-[#ca7305]">
                    <h2 class="flex items-center text-lg font-bold text-gray-900 mb-4">
                        <i class="fas fa-seedling text-[#ca7305] mr-3"></i> Latar Belakang
                    </h2>
                    <p class="text-gray-700 leading-relaxed">
                        Perubahan iklim telah memengaruhi mata pencaharian masyarakat secara signifikan, terutama sektor
                        pertanian.
                        Cuaca ekstrem, musim tak menentu, hingga peningkatan hama telah merusak hasil panen petani
                        kelapa di Buton
                        dan pisang di Mentawai. Produksi menurun drastis dalam 10 tahun terakhir.
                    </p>
                    <p class="mt-3 text-gray-700 leading-relaxed">
                        Aliansi Kolibri hadir dengan tujuan membangun ketahanan melalui sistem pertanian tahan iklim,
                        dengan agroforestri sebagai strategi utama yang tidak hanya adaptif, tetapi juga memberi nilai
                        tambah ekonomi bagi petani.
                    </p>
                </article>

                {{-- Metode & Perkembangan --}}
                <article class="bg-white rounded-xl shadow hover:shadow-lg transition p-8 border-l-4 border-[#ca7305]">
                    <h2 class="flex items-center text-lg font-bold text-gray-900 mb-4">
                        <i class="fas fa-flask text-[#ca7305] mr-3"></i> Metode & Perkembangan
                    </h2>
                    <p class="text-gray-700 leading-relaxed">
                        Kapasitas penelitian anggota aliansi ditingkatkan melalui pelatihan, Sekolah Lapang Iklim
                        bersama BMKG,
                        serta penelitian independen terkait adaptasi iklim. Tiga baseline penelitian dilakukan:
                    </p>
                </article>

                {{-- Dampak --}}
                <section>
                    <h2 class="flex items-center text-lg font-bold text-gray-900 mb-6">
                        <i class="fas fa-chart-line text-[#ca7305] mr-3"></i> Dampak
                    </h2>
                    <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6">
                        <div class="bg-white p-6 rounded-xl shadow text-center hover:scale-105 transition">
                            <h3 class="text-xl font-extrabold text-[#ca7305]">129</h3>
                            <p class="text-sm text-gray-600">Petani terlibat</p>
                        </div>
                        <div class="bg-white p-6 rounded-xl shadow text-center hover:scale-105 transition">
                            <h3 class="text-xl font-extrabold text-[#ca7305]">125</h3>
                            <p class="text-sm text-gray-600">Pengumpul data iklim</p>
                        </div>
                        <div class="bg-white p-6 rounded-xl shadow text-center hover:scale-105 transition">
                            <h3 class="text-xl font-extrabold text-[#ca7305]">4</h3>
                            <p class="text-sm text-gray-600">Organisasi daerah</p>
                        </div>
                        <div class="bg-white p-6 rounded-xl shadow text-center hover:scale-105 transition">
                            <h3 class="text-xl font-extrabold text-[#ca7305]">8.000</h3>
                            <p class="text-sm text-gray-600">Petani terdampak</p>
                        </div>
                    </div>
                </section>

                {{-- Pelajaran --}}
                <article class="bg-white rounded-xl shadow hover:shadow-lg transition p-8 border-l-4 border-[#ca7305]">
                    <h2 class="flex items-center text-lg font-bold text-gray-900 mb-4">
                        <i class="fas fa-lightbulb text-[#ca7305] mr-3"></i> Pelajaran yang Dipetik
                    </h2>
                    <p class="text-gray-700 leading-relaxed">
                        Strategi adaptasi petani di Indonesia beragam: diversifikasi tanaman, pemeliharaan lahan,
                        hingga diversifikasi mata pencaharian. Faktor yang memengaruhi pilihan strategi meliputi
                        pengetahuan lokal, akses sumber daya, kebijakan, kondisi sosial budaya, dan pertimbangan
                        ekonomi.
                    </p>
                </article>

                {{-- Penyandang Dana --}}
                <article class="bg-white rounded-xl shadow hover:shadow-lg transition p-8 border-l-4 border-[#ca7305]">
                    <h2 class="flex items-center text-lg font-bold text-gray-900 mb-4">
                        <i class="fas fa-hand-holding-dollar text-[#ca7305] mr-3"></i> Penyandang Dana
                    </h2>
                    <p class="text-gray-700 leading-relaxed">
                        Proyek ini didukung oleh <strong>International Development Research Centre (IDRC)</strong>
                        periode 1 April 2021 – 31 Oktober 2023. Dukungan ini memperkuat riset akar rumput dan
                        peningkatan kapasitas penelitian organisasi lokal.
                    </p>
                </article>
            </div>

            {{-- Sidebar --}}
            <aside class="lg:col-span-1">
                <div class="sticky top-25 space-y-6">
                    <div class="bg-white rounded-xl shadow p-6">
                        <h3 class="text-lg font-bold text-gray-900 mb-4">Informasi Proyek</h3>
                        <ul class="text-sm text-gray-700 space-y-2">
                            <li><strong>Lokasi:</strong> Kabupaten Buton, Sulawesi Tenggara</li>
                            <li><strong>Fokus:</strong> Adaptasi Iklim, Agroforestri</li>
                            <li><strong>Donor:</strong> IDRC</li>
                            <li><strong>Periode:</strong> 2021 – 2023</li>
                        </ul>
                    </div>

                    <div class="bg-white rounded-xl shadow p-6 space-y-2">
                        <h3 class="text-lg font-bold text-gray-900 mb-4">Kontak</h3>
                        <p class="text-sm text-gray-700">Sekolah Rakyat Butuni (SERABUT)</p>
                        <p class="text-sm text-gray-700">Email: <a href="mailto:program@serabut.org"
                                class="text-[#ca7305] hover:underline">program@serabut.org</a>
                        </p>
                        <p class="text-sm text-gray-700">Irsan Nassa – Program Manager</p>
                    </div>
                </div>
            </aside>
        </div>
    </section>
</x-main>
