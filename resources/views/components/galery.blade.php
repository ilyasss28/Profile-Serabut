<x-main>
    {{-- Hero Section --}}
    <section class="relative h-[75vh] w-full overflow-hidden">
        <div class="absolute inset-0">
            <img src="{{ asset('assets/img/bg-profile.jpg') }}" alt="Gallery" class="w-full h-full object-cover">
            <div class="absolute inset-0 backdrop-blur-sm bg-black/70"></div>
        </div>

        <div class="relative z-10 flex flex-col items-center justify-center h-full text-center text-white px-6">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">Galeri Dokumentasi</h1>
            <p class="text-lg max-w-2xl mx-auto">
                Dokumentasi berbagai kegiatan, seminar, dan kunjungan yang telah dilaksanakan.
            </p>
        </div>
    </section>

    {{-- Gallery Section --}}
    <section class="py-12 bg-gray-50" x-data="{ activeCategory: 'all' }">
        <!-- Header -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 items-start mb-10 px-6">
            <div class="flex flex-row gap-3">
                <span class="w-1 bg-[#ca7305] rounded"></span>
                <div class="flex flex-col">
                    <h2 class="text-xl md:text-2xl font-bold text-[#252422] uppercase">
                        Dokumentasi Kegiatan
                    </h2>
                    <p class="text-gray-600 max-w-2xl italic">
                        Kumpulan dokumentasi dari berbagai kegiatan, pelatihan, riset, dan inisiatif yang dilakukan
                        bersama masyarakat
                    </p>
                </div>
            </div>
        </div>
        <!-- Header -->

        <div class="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-4 gap-10 px-6">
            {{-- Sidebar Kategori --}}
            <aside class="bg-white rounded-xl shadow-md p-6 lg:sticky top-24 h-max">
                <h2 class="text-lg font-bold text-gray-800 mb-4">Kategori Dokumentasi</h2>
                <ul class="space-y-3">
                    <li>
                        <button @click="activeCategory = 'all'"
                            :class="activeCategory === 'all' ? 'bg-[#ca7305] text-white' :
                                'bg-gray-100 text-gray-800 hover:bg-[#ca7305] hover:text-white'"
                            class="w-full text-left px-4 py-2 rounded-lg transition">
                            Semua
                        </button>
                    </li>
                    @foreach ($categories as $cat)
                        <li>
                            <button @click="activeCategory = '{{ $cat->id }}'"
                                :class="activeCategory === '{{ $cat->id }}' ? 'bg-[#ca7305] text-white' :
                                    'bg-gray-100 text-gray-800 hover:bg-[#ca7305] hover:text-white'"
                                class="w-full text-left px-4 py-2 rounded-lg transition">
                                {{ $cat->nama }}
                            </button>
                        </li>
                    @endforeach
                </ul>
            </aside>

            {{-- Gallery --}}
            <div class="lg:col-span-3">
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">

                    @foreach ($galeries as $galery)
                        <div class="gallery-item rounded-xl overflow-hidden shadow-md group"
                            x-show="activeCategory === 'all' || activeCategory === '{{ $galery->kategori_galery_id }}'"
                            x-transition>
                            <img src="{{ asset('storage/' . $galery->gambar) }}"
                                alt="{{ $galery->kategori->nama ?? 'Galeri' }}"
                                class="w-full h-56 object-cover group-hover:scale-110 transition duration-500">
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </section>

</x-main>
