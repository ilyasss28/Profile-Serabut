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
                Artikel Publikasi
            </h1>
            <p class="text-base sm:text-md md:text-lg max-w-3xl mx-auto">
                Jelajahi berbagai kumpulan artikel, laporan, dan publikasi terkini dari Sekolah Rakyat Butuni sebagai wujud transparansi, edukasi, dan inspirasi bagi masyarakat.
            </p>
        </div>
    </section>
    {{-- Hero Section --}}

    {{-- publiss Section --}}
    <section class="py-12 px-6 bg-white">
        <div class="container mx-auto">
            <div class="flex flex-row gap-3 mb-10">
                <span class="w-1 bg-[#ca7305] rounded"></span>
                <div class="flex flex-col">
                    <h2 class="text-xl md:text-2xl font-bold text-[#252422] uppercase">
                        Artikel & Publikasi
                    </h2>
                    <p class="text-gray-600 max-w-2xl italic">
                        Menampilkan artikel, laporan, dan publikasi terkini dari Sekolah Rakyat Butuni untuk pemberdayaan masyarakat dan pengembangan komunitas.
                    </p>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach ($publikasis as $publis)
                    <a href="{{ route('detail-publikasi', $publis->slug) }}"
                        class="group relative overflow-hidden rounded-lg shadow-lg hover:shadow-xl transition-all duration-300 block">
                        <div class="relative h-90">
                            <img src="{{ asset('storage/' . $publis->gambar) }}" alt="{{ $publis->judul }}"
                                class="w-full h-full object-cover transform group-hover:scale-110 transition duration-500">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/80 to-transparent"></div>

                            <!-- Tanggal & Kategori -->
                            <div class="absolute top-3 left-3 flex items-center gap-2 text-xs text-white">
                                <!-- Tanggal -->
                                <time datetime="{{ $publis->tanggal_terbit }}"
                                    class="flex items-center gap-1 bg-gradient-to-r from-black/60 to-black/40 px-3 py-1 rounded-full shadow backdrop-blur-sm">
                                    <i class="fas fa-calendar-alt text-white/80"></i>
                                    {{ $publis->formatted_date }}
                                </time>

                                <!-- Kategori -->
                                <span
                                    class="flex items-center gap-1 bg-gradient-to-r from-[#ca7305]/80 to-[#ca7305]/60 px-3 py-1 rounded-full shadow backdrop-blur-sm">
                                    <i class="fas fa-tag text-white/80"></i>
                                    {{ $publis->kategoriPublikasi->nama }}
                                </span>
                            </div>
                        </div>

                        <div class="absolute bottom-0 left-0 right-0 p-6 text-white flex justify-between items-center">
                            <div>
                                <h3 class="text-xl font-bold mb-2">{{ Str::limit($publis->judul, 30, '...') }}</h3>
                                <p class="text-sm md:text-base">
                                    {!! Str::words($publis->deskripsi, 12, '...') !!}
                                </p>
                            </div>
                            <i class="fa-solid fa-chevron-right text-lg"></i>
                        </div>
                    </a>
                @endforeach
            </div>

            {{-- Pagination start --}}
            <div class="mt-10 flex justify-center">
                {{ $publikasis->links('components.pagination') }}
            </div>
            {{-- Pagination end --}}
        </div>
    </section>
    {{-- publiss Section --}}
</x-main>
