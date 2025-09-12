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
                Detail Publikasi
            </span>

            <!-- Judul -->
            <h6 class="text-xl sm:text-2xl md:text-3xl font-bold leading-tight max-w-4xl mb-3">
                {{ $publikasi->judul }}
            </h6>

            <!-- Tanggal Publikasi -->
            <div class="flex items-center gap-4 text-gray-200 text-sm sm:text-base">
                <div class="flex items-center gap-2">
                    <i class="fas fa-calendar-alt text-[#ca7305]"></i>
                    <time datetime="{{ $publikasi->tanggal_terbit }}">{{ $publikasi->formatted_date }}</time>
                </div>
                <div class="flex items-center gap-2">
                    <i class="fas fa-tag text-[#ca7305]"></i>
                    <span>{{ $publikasi->kategoriPublikasi->nama }}</span>
                </div>
            </div>
        </div>
    </section>
    {{-- Hero Section --}}

    {{-- Detail Publikasi --}}
    <section class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-6 lg:px-8 grid lg:grid-cols-3 gap-12">
            {{-- Tentang Publikasi --}}
            <div class="lg:col-span-2 bg-white rounded-xl shadow-md p-8">
                <h2 class="text-2xl font-bold text-gray-800 mb-4">Informasi Publikasi</h2>
                <div class="space-y-3 text-justify text-gray-900 leading-relaxed">
                    {!! $publikasi->deskripsi !!}
                </div>
            </div>

            {{-- Kolom Kanan (Info Publikasi) --}}
            <div class="relative">
                <div class="sticky top-24 bg-white rounded-xl shadow-md p-8">
                    <h2 class="text-xl text-center font-bold text-gray-800 mb-6">Tentang Publikasi</h2>

                    {{-- Gambar + Unduh --}}
                    <div class="flex flex-col items-center mb-6">
                        <img src="{{ asset('storage/' . $publikasi->gambar) }}" alt="{{ $publikasi->judul }}"
                            class="w-40 h-auto mb-3 rounded shadow">
                        <a href="{{ asset('storage/' . $publikasi->file_url) }}" download
                            class="px-4 py-2 bg-[#ca7305] text-white text-sm font-semibold rounded shadow hover:bg-[#a95b03] transition">
                            <i class="fas fa-download mr-2"></i>Unduh Publikasi
                        </a>
                    </div>

                    {{-- Detail Info --}}
                    <div class="space-y-4 text-sm text-gray-700">
                        <div>
                            <p class="font-semibold text-gray-800">Judul</p>
                            <p>{{ $publikasi->judul }}</p>
                        </div>
                        <div>
                            <p class="font-semibold text-gray-800">Penerbit</p>
                            <p>{{ $publikasi->penerbit }}</p>
                        </div>
                        <div>
                            <p class="font-semibold text-gray-800">Tahun Publikasi</p>
                            <p>{{ \Carbon\Carbon::parse($publikasi->tanggal_terbit)->year }}</p>
                        </div>
                        <div>
                            <p class="font-semibold text-gray-800">Penulis</p>
                            <p class="text-[#ca7305] hover:underline">
                                {{ $publikasi->penulis }}
                            </p>
                        </div>
                        <div>
                            <p class="font-semibold text-gray-800">DOI</p>
                            <a href="{{ $publikasi->DOI }}" target="_blank" class="text-[#ca7305] hover:underline">
                                {{ $publikasi->DOI }}
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Detail Publikasi --}}
</x-main>
