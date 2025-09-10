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
                Profile Organisasi
            </h1>
            <p class="text-base sm:text-lg md:text-xl max-w-3xl mx-auto">
                Mengenal lebih dekat sejarah, visi, misi, dan struktur organisasi kami.
            </p>
        </div>
    </section>

    {{-- Tentang Organisasi --}}
    <section class="max-w-full px-6 py-12">
        <div class="flex flex-col lg:flex-row gap-4">
            <!-- Image -->
            <div class="relative rounded-lg overflow-hidden lg:w-1/2 h-[200px] sm:h-[240px] md:h-[280px]">
                <img src="{{ asset('storage/' . $profile_image->gambar) }}" alt="Slide 1" class="w-full h-full object-cover">
            </div>

            {{-- Konten --}}
            <div class="flex flex-col justify-start flex-1 gap-3">
                <div class="flex items-center gap-4">
                    <h2 class="text-3xl md:text-4xl font-extrabold text-gray-800 tracking-tight whitespace-nowrap">
                        Tentang <span class="text-[#ca7305]">Serabut</span>
                    </h2>
                    <div class="flex-grow h-[4px] rounded-full bg-gray-700"></div>
                </div>

                <p class="text-gray-600 leading-relaxed">
                    {!! $profiles->first()->deskripsi !!}
                </p>
            </div>
        </div>

    </section>

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
                    {{-- <h4 class="text-sm sm:text-base font-semibold uppercase tracking-wider mb-2">Visi</h4> --}}
                    <h2 class="text-xl md:text-2xl font-bold uppercase leading-snug">
                        Visi
                    </h2>
                    <div class="w-20 h-1 bg-[#ca7305] rounded-full mt-3 mb-6"></div>
                    <p class="text-base sm:text-md md:text-lg leading-relaxed text-gray-100">
                        Menciptakan keadilan bersama, menegakkan kedaulatan rakyat untuk pengelolaan, penguasaan dan
                        penataan sumber daya alam yang berbasis kearfian lokal.
                    </p>
                </div>

                <!-- Bagian Misi -->
                <div class="backdrop-blur-sm bg-black/40 p-6 sm:p-10 rounded-2xl shadow-lg">
                    {{-- <h4 class="text-sm sm:text-base font-semibold uppercase tracking-wider mb-2">Misi</h4> --}}
                    <h2 class="text-xl md:text-2xl font-bold uppercase leading-snug">
                        Misi
                    </h2>
                    <div class="w-20 h-1 bg-[#ca7305] rounded-full mt-3 mb-6"></div>

                    <ul class="space-y-4 text-base text-gray-100">
                        <li class="flex items-start gap-3">
                            <span
                                class="flex-shrink-0 w-8 h-8 flex items-center justify-center rounded-full bg-[#ca7305] text-black font-bold">1</span>
                            Menegakkan keadilan sosial dan gender demi Hak Asasi Manusia.
                        </li>
                        <li class="flex items-start gap-3">
                            <span
                                class="flex-shrink-0 w-8 h-8 flex items-center justify-center rounded-full bg-[#ca7305] text-black font-bold">2</span>
                            Menegakkan penguasaan, pengelolaan, dan penataan SDA untuk keserasian lingkungan.
                        </li>
                        <li class="flex items-start gap-3">
                            <span
                                class="flex-shrink-0 w-8 h-8 flex items-center justify-center rounded-full bg-[#ca7305] text-black font-bold">3</span>
                            Menguatkan organisasi rakyat agar lebih mandiri dan berdaya guna.
                        </li>
                        <li class="flex items-start gap-3">
                            <span
                                class="flex-shrink-0 w-8 h-8 flex items-center justify-center rounded-full bg-[#ca7305] text-black font-bold">4</span>
                            Menguatkan sumber-sumber ekonomi masyarakat desa dan pedalaman sebagai sumber kesejahteraan
                            dalam bentuk koperasi.
                        </li>
                        <li class="flex items-start gap-3">
                            <span
                                class="flex-shrink-0 w-8 h-8 flex items-center justify-center rounded-full bg-[#ca7305] text-black font-bold">5</span>
                            Mengkonsolidasikan basis kepulauan sebagai ruang belajar rakyat.
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    {{-- Visi & Misi --}}

    {{-- Struktur Organisasi --}}
    <section id="struktur" class="py-20 bg-gradient-to-br from-gray-50 via-white to-gray-100 relative">
        <div class="w-full px-6 text-center relative z-10">

            <!-- Title -->
            <div class="flex items-center justify-center gap-4 mb-4">
                <div class="flex-grow h-[4px] rounded-full bg-gray-700"></div>
                <h2 class="text-3xl md:text-4xl font-extrabold text-gray-800 tracking-tight whitespace-nowrap">
                    Tim <span class="text-[#ca7305]">Serabut</span>
                </h2>
                <div class="flex-grow h-[4px] rounded-full bg-gray-700"></div>
            </div>
            <p class="text-gray-600 max-w-2xl mx-auto mb-12 text-lg">
                Berkenalan dengan orang-orang hebat di balik Sekolah Rakyat Butuni
            </p>

            <!-- Grid -->
            <div class="flex flex-wrap justify-center gap-10">
                {{-- Card --}}
                @foreach ($tim as $team)
                    <div class="relative group w-64">
                        <div
                            class="relative w-64 h-64 rounded-full overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-500">
                            <img src="{{ asset('storage/' . $team->foto) }}" alt="{{ $team->jabatan }}"
                                class="w-full h-full object-cover transform group-hover:scale-110 transition duration-500">
                            <div
                                class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/40 to-transparent opacity-70 group-hover:opacity-90 transition">
                            </div>
                        </div>
                        <!-- Info -->
                        <div class="mt-4 text-center">
                            <h4 class="text-lg font-bold text-gray-800 group-hover:text-[#ca7305] transition">
                                {{ $team->nama_tim }}
                            </h4>
                            <p class="text-sm text-gray-600">{{ $team->jabatan }}</p>
                        </div>
                    </div>
                @endforeach
                {{-- Card --}}
            </div>
        </div>
    </section>

</x-main>
