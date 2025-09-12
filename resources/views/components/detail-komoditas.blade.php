<x-main>
    {{-- Hero Section --}}
    <section class="relative h-[75vh] w-full overflow-hidden">
        <!-- Background -->
        <div class="absolute inset-0">
            <img src="{{ asset('assets/img/bg-profile.jpg') }}" alt="Profile Organisasi"
                class="w-full h-full object-cover">
            <div class="absolute inset-0 backdrop-blur-sm bg-black/70"></div>
        </div>

        <!-- Content -->
        <div class="relative z-10 flex flex-col items-center justify-center h-full text-center text-white px-6">
            <!-- Label -->
            <span class="text-sm sm:text-base font-semibold uppercase text-[#ca7305] tracking-widest mb-4 inline-block">
                Detail Komoditas
            </span>

            <!-- Nama Komoditas -->
            <h1 class="text-3xl sm:text-4xl md:text-5xl font-extrabold leading-tight max-w-4xl mb-4">
                Komoditas {{ $komoditas->nama }}
            </h1>
        </div>
    </section>
    {{-- Hero Section --}}

    {{-- Detail Komoditas Content Section --}}
    <section class="py-10 px-6 bg-gray-50">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 items-start mb-10">
            <div class="flex flex-row gap-3">
                <span class="w-1 bg-[#ca7305] rounded"></span>
                <div class="flex flex-col">
                    <h2 class="text-xl md:text-2xl font-bold text-[#252422] uppercase">
                        Detail Komoditas {{ $komoditas->nama }}
                    </h2>
                    <p class="text-gray-600 max-w-2xl italic">
                        Kenali berbagai komoditas hasil olah masyarakat bersama Sekolah Rakyat Butuni yang hadir untuk
                        memperkuat ekonomi desa sekaligus menjaga harmoni dengan alam.
                    </p>
                </div>
            </div>
        </div>

        <div class="max-w-7xl mx-auto space-y-16">
            {{-- Deskripsi Utama --}}
            <div class="bg-white rounded-3xl shadow-lg overflow-hidden flex flex-col">
                <!-- Gambar di atas -->
                <div>
                    <img src="{{ asset('storage/' . $komoditas->gambar) }}" alt="{{ $komoditas->nama }}"
                        class="w-full h-80 object-cover">
                </div>
                <!-- Konten di bawah gambar -->
                <div class="content p-8 lg:p-12">
                    <h2 class="text-3xl font-extrabold text-gray-900 mb-4">Tentang {{ $komoditas->nama }}</h2>
                    <p class="text-gray-700 leading-relaxed text-lg mb-6">
                        {!! $komoditas->deskripsi !!}
                    </p>
                </div>
            </div>
        </div>
    </section>
</x-main>
