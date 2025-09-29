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
                Jenis Komoditas
            </h1>
            <p class="text-base sm:text-md md:text-lg max-w-3xl mx-auto">
                Jelajahi berbagai jenis komoditas yang dihasilkan oleh Sekolah Rakyat Butuni untuk membangun masyarakat
                dan lingkungan yang
                lebih baik.
            </p>
        </div>
    </section>
    {{-- Hero Section --}}

    {{-- Content Section --}}
    <section class="py-10 bg-white">
        <div class="max-w-full mx-auto px-6">
            <!-- Header -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 items-start mb-10">
                <div class="flex flex-row gap-3">
                    <span class="w-1 bg-[#ca7305] rounded"></span>
                    <div class="flex flex-col">
                        <h2 class="text-xl md:text-2xl font-bold text-[#252422] uppercase">
                            Jenis Komoditas
                        </h2>
                        <p class="text-gray-600 max-w-2xl italic">
                            Jelajahi berbagai jenis komoditas yang dihasilkan oleh Sekolah Rakyat Butuni untuk membangun
                            masyarakat dan lingkungan yang
                            lebih baik.
                        </p>
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8 mt-10">
                @foreach ($komoditas as $item)
                    <a href="{{ route('detail-komoditas', $item->slug) }}"
                        class="group relative bg-white rounded-2xl shadow-sm hover:shadow-lg overflow-hidden transition-all duration-500 transform hover:-translate-y-2 border border-gray-100 hover:border-[#ca7305]/40">

                        <!-- Gambar -->
                        <div class="relative h-56 w-full">
                            <img src="{{ asset('storage/' . $item->gambar) }}" alt="{{ $item->nama }}"
                                class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700 ease-out">
                        </div>

                        <!-- Konten -->
                        <div class="p-5 flex flex-col justify-between h-40">
                            <h3 class="text-lg font-extrabold text-[#ca7305] tracking-wide">
                                {{ $item->nama }}
                            </h3>
                            <p class="text-sm text-gray-600 leading-relaxed mb-4">
                                {{ Str::words(strip_tags($item->deskripsi ?? ''), 10, '...') }}
                            </p>

                            <span
                                class="inline-flex items-center gap-2 text-[#ca7305] font-semibold text-sm group-hover:gap-3 transition-all duration-300">
                                Lihat Detail <i class="fa-solid fa-arrow-right text-xs"></i>
                            </span>
                        </div>
                    </a>
                @endforeach
            </div>
            {{-- Komoditas end --}}

            {{-- Pagination start --}}
            <div class="mt-10 flex justify-center">
                {{ $komoditas->links('components.pagination') }}
            </div>
            {{-- Pagination end --}}
        </div>
    </section>
    {{-- Komoditas --}}
</x-main>
