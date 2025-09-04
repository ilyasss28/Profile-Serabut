<x-main>
    {{-- Hero Section --}}
    <section class="relative h-[75vh] w-full overflow-hidden">
        <div class="absolute inset-0">
            <img src="{{ asset('assets/img/bg-profile.jpg') }}" alt="Profile Organisasi"
                class="w-full h-full object-cover">
            <div class="absolute inset-0 backdrop-blur-sm bg-black/70"></div>
        </div>

        <div class="relative z-10 flex flex-col items-center justify-center h-full text-center text-white px-6">
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

    {{-- Detail Publikasi --}}
    <section class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-6 lg:px-8 grid lg:grid-cols-3 gap-12">

            {{-- Tentang Publikasi --}}
            <div class="lg:col-span-2 bg-white rounded-xl shadow-md p-8">
                <h2 class="text-2xl font-bold text-gray-800 mb-4">Tentang Publikasi</h2>
                <p class="text-gray-700 leading-relaxed mb-4">
                    Publikasi ini mengkaji bagaimana petani skala kecil di Indonesia merespons
                    serta beradaptasi terhadap tantangan perubahan iklim yang semakin nyata.
                    Studi ini berangkat dari kebutuhan untuk memahami dinamika lokal yang
                    memengaruhi ketahanan pangan, keberlanjutan produksi pertanian, dan
                    kesejahteraan masyarakat pedesaan.
                </p>

                <p class="text-gray-700 leading-relaxed mb-4">
                    Penelitian dilakukan dengan pendekatan <span class="font-semibold">survei
                        lapangan, wawancara mendalam, serta observasi partisipatif</span> di
                    beberapa wilayah intervensi. Data dikumpulkan dari ratusan petani dan
                    komunitas lokal untuk mendapatkan gambaran yang komprehensif mengenai
                    strategi adaptasi yang mereka terapkan, termasuk diversifikasi tanaman,
                    pemanfaatan teknologi sederhana, hingga penguatan kelembagaan berbasis
                    masyarakat.
                </p>

                <p class="text-gray-700 leading-relaxed mb-4">
                    Hasil penelitian menunjukkan bahwa <span class="italic">resiliensi
                        masyarakat tidak hanya ditentukan oleh faktor ekonomi</span>, tetapi juga
                    oleh tingkat solidaritas sosial, akses terhadap pengetahuan, serta dukungan
                    dari pihak eksternal seperti LSM dan pemerintah daerah. Tantangan terbesar
                    yang teridentifikasi mencakup keterbatasan sumber daya, kurangnya akses
                    terhadap informasi iklim yang akurat, serta minimnya program pendampingan
                    yang berkelanjutan.
                </p>

                <p class="text-gray-700 leading-relaxed">
                    Publikasi ini memberikan kontribusi penting dalam pengembangan kebijakan
                    berbasis bukti yang mendukung <span class="font-semibold">ketahanan iklim
                        (climate resilience)</span> di sektor pertanian. Rekomendasi utama meliputi
                    penguatan kapasitas lokal, penyediaan infrastruktur pendukung, serta
                    integrasi praktik pertanian berkelanjutan dalam program pembangunan desa.
                    Dengan demikian, hasil kajian ini diharapkan dapat menjadi referensi bagi
                    akademisi, pembuat kebijakan, maupun praktisi dalam merancang strategi
                    adaptasi yang inklusif dan efektif.
                </p>
            </div>

            {{-- Kolom Kanan (Info Publikasi) --}}
            <div class="bg-white rounded-xl shadow-md p-8">
                <h2 class="text-xl font-bold text-gray-800 mb-6">Informasi Publikasi</h2>

                {{-- Gambar + Unduh --}}
                <div class="flex flex-col items-center mb-6">
                    <img src="{{ asset('assets/img/poster.jpg') }}" alt="Cover Publikasi"
                        class="w-40 h-auto mb-3 rounded shadow">
                    <a href="#"
                        class="px-4 py-2 bg-[#ca7305] text-white text-sm font-semibold rounded shadow hover:bg-[#a95b03] transition">
                        <i class="fas fa-download mr-2"></i>Unduh Publikasi
                    </a>
                </div>

                {{-- Detail Info --}}
                <div class="space-y-4 text-sm text-gray-700">
                    <div>
                        <p class="font-semibold text-gray-800">Judul</p>
                        <p>Respons terhadap Perubahan Iklim: Persepsi dan Adaptasi di Kalangan Petani Skala Kecil di
                            Indonesia</p>
                    </div>
                    <div>
                        <p class="font-semibold text-gray-800">Penerbit</p>
                        <p>Journal of Environmental Management</p>
                    </div>
                    <div>
                        <p class="font-semibold text-gray-800">Tahun Publikasi</p>
                        <p>2025</p>
                    </div>
                    <div>
                        <p class="font-semibold text-gray-800">Penulis</p>
                        <p>
                            <a href="#" class="text-[#ca7305] hover:underline">Safira Andrista</a>,
                            <a href="#" class="text-[#ca7305] hover:underline">Venticia Hukom</a>
                        </p>
                    </div>
                    <div>
                        <p class="font-semibold text-gray-800">DOI</p>
                        <a href="https://doi.org/10.1016/j.jenvman.2025.124593" target="_blank"
                            class="text-[#ca7305] hover:underline">
                            https://doi.org/10.1016/j.jenvman.2025.124593
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Detail Publikasi --}}
</x-main>
