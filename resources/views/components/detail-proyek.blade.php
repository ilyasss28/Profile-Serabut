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
                Detail Program
            </span>

            <!-- Judul Program -->
            <h6 class="text-2xl sm:text-3xl md:text-4xl font-bold capitalize leading-tight max-w-4xl mb-3">
                {{ $program->judul }}
            </h6>

            <!-- Tanggal Publikasi -->
            <div class="flex items-center gap-2 text-gray-200 text-sm sm:text-base">
                <i class="fas fa-calendar-alt text-[#ca7305]"></i>
                <time datetime="{{ $program->tanggal_kegiatan }}">
                    {{ \Carbon\Carbon::parse($program->tanggal_kegiatan)->translatedFormat('d F Y') }}
                </time>
            </div>
        </div>
    </section>
    {{-- Hero Section --}}

    {{-- Detail Proyek --}}
    <section class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-6 grid lg:grid-cols-3 gap-10">
            {{-- Konten Utama --}}
            <div class="lg:col-span-2 space-y-10">
                @foreach ($program->programsection as $section)
                    <article
                        class="bg-white rounded-xl shadow hover:shadow-lg transition p-8 border-l-4 border-[#ca7305]">
                        <h2 class="flex items-center text-lg font-bold text-gray-900 mb-4">
                            <i class="fas fa-seedling text-[#ca7305] mr-3"></i>
                            {{ $section->judul_section }}
                        </h2>
                        <div class="content text-gray-700 leading-relaxed prose max-w-none">
                            {!! $section->deskripsi !!}
                        </div>
                    </article>
                @endforeach
            </div>

            {{-- Sidebar --}}
            <aside class="lg:col-span-1">
                <div class="sticky top-24 space-y-6">
                    <!-- Informasi Program -->
                    <div class="bg-white rounded-2xl shadow-lg p-6 border border-gray-100">
                        <h3 class="text-lg font-bold text-gray-900 mb-4 flex items-center gap-2">
                            Informasi Program
                        </h3>
                        <ul class="text-sm text-gray-700 space-y-4">

                            <li class="flex items-start gap-2">
                                <i class="fa-solid fa-book text-[#ca7305] mt-1"></i>
                                <div class="flex-1">
                                    <span class="font-semibold">Judul:</span>
                                    <p class="text-gray-600 mt-1">{{ $program->judul }}</p>
                                </div>
                            </li>

                            <li class="flex items-start gap-2">
                                <i class="fa-solid fa-calendar-days text-[#ca7305] mt-1"></i>
                                <div class="flex-1">
                                    <span class="font-semibold">Tanggal Kegiatan:</span>
                                    <p class="text-gray-600 mt-1">
                                        {{ \Carbon\Carbon::parse($program->tanggal_kegiatan)->translatedFormat('d F Y') }}
                                    </p>
                                </div>
                            </li>

                            <li class="flex items-start gap-2">
                                <i class="fa-solid fa-location-dot text-[#ca7305] mt-1"></i>
                                <div class="flex-1">
                                    <span class="font-semibold">Lokasi:</span>
                                    <p class="text-gray-600 mt-1">{{ $program->lokasi }}</p>
                                </div>
                            </li>

                            <li class="flex items-start gap-2">
                                <i class="fa-solid fa-circle-check text-[#ca7305] mt-1"></i>
                                <div class="flex-1 space-y-4">
                                    <span class="font-semibold">Status:</span>
                                    <br>
                                    <span class="px-2 mt-1 py-1 text-xs rounded-full
                                        {{ $program->status === 'Sedang Berjalan' ? 'bg-green-100 text-green-700' : 'bg-gray-200 text-gray-700' }} font-medium mt-2 inline-block">
                                        {{ $program->status }}
                                    </span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </aside>

        </div>
    </section>
</x-main>
