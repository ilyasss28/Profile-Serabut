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
            <h1 class="text-2xl sm:text-3xl md:text-4xl font-bold capitalize leading-tight max-w-4xl mb-3">
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
            {{-- Card Utama --}}
            <div
                class="bg-white rounded-3xl shadow overflow-hidden border border-gray-100">

                <!-- Gambar -->
                <div class="relative">
                    <img src="{{ asset('storage/' . $komoditas->gambar) }}" alt="{{ $komoditas->nama }}"
                        class="w-full h-96 object-cover transform hover:scale-105 transition duration-700 ease-in-out">

                    <!-- Overlay gradien -->
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/20 to-transparent"></div>

                    <!-- Judul di atas gambar -->
                    <div class="absolute bottom-6 left-6 text-white">
                        <h1 class="text-3xl md:text-4xl font-extrabold drop-shadow-lg">
                            {{ $komoditas->nama }}
                        </h1>
                        <p class="mt-2 text-sm md:text-base text-gray-200">Informasi detail tentang komoditas unggulan
                        </p>
                    </div>
                </div>

                <!-- Konten -->
                <div class="content p-8 lg:p-12">
                    <h2 class="text-2xl font-bold text-gray-800 mb-6 border-b-2 border-[#ca7305] inline-block pb-1">
                        Tentang {{ $komoditas->nama }}
                    </h2>

                    <div class="text-gray-700 leading-relaxed text-justify space-y-4 text-lg prose max-w-none">
                        {!! $komoditas->deskripsi !!}
                    </div>
                </div>
            </div>
        </div>

    </section>
</x-main>
