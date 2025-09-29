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
                Program Serabut
            </h1>
            <p class="text-base sm:text-md md:text-lg max-w-3xl mx-auto">
                Jelajahi berbagai program tim serabut yang mengedepankan kolaborasi, inovasi, serta
                keberlanjutan untuk membangun masyarakat dan lingkungan yang lebih baik.
            </p>
        </div>
    </section>
    {{-- Hero Section --}}

    {{-- Halaman Proyek --}}
    <section class="py-12 px-6 bg-gray-50">
        <div class="container mx-auto space-y-10">
            {{-- Header --}}
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 items-start mb-10">
                <div class="flex flex-row gap-3">
                    <span class="w-1 bg-[#ca7305] rounded"></span>
                    <div class="flex flex-col">
                        <h2 class="text-xl md:text-2xl font-bold text-[#252422] uppercase">
                            Program Unggulan
                        </h2>
                        <p class="text-gray-600 max-w-2xl italic">
                            Menampilkan program unggulan Sekolah Rakyat Butuni untuk pemberdayaan masyarakat dan
                            pengembangan komunitas.
                        </p>
                    </div>
                </div>
            </div>

            @foreach ($program as $project)
                <div
                    class="flex flex-col md:flex-row bg-white rounded-2xl shadow hover:shadow-lg transition duration-300 overflow-hidden">
                    <!-- Gambar -->
                    <div class="md:w-1/2 aspect-video overflow-hidden">
                        <img src="{{ asset('storage/' . $project->gambar) }}" alt="{{ $project->title }}"
                            class="w-full h-full object-cover transform hover:scale-105 transition duration-500">
                    </div>

                    <!-- Konten -->
                    <div class="p-6 flex flex-col justify-evenly md:w-1/2">
                        <!-- Judul -->
                        <h2 class="text-2xl font-bold text-gray-900 mb-3 hover:text-[#ca7305] transition">
                            {{ Str::limit($project->judul, 50) }}
                        </h2>

                        <!-- Meta -->
                        <div class="flex items-center gap-4 text-sm text-gray-500 mb-4">
                            <span class="flex items-center gap-1">
                                <i class="fas fa-calendar-alt text-[#ca7305]"></i>
                                {{ \Carbon\Carbon::parse($project->tanggal_kegiatan)->translatedFormat('d F Y') }}
                            </span>
                            <span
                                class="flex items-center gap-2 px-3 py-1 rounded-full text-xs font-medium
                                {{ $project->status == 'Sedang Berjalan' ? 'bg-green-100 text-green-700' : 'bg-blue-100 text-blue-700' }}">
                                <i class="fas fa-flag"></i>
                                {{ $project->status }}
                            </span>
                        </div>

                        <!-- Deskripsi -->
                        @if ($project->latarBelakang)
                            <p class="text-gray-600 leading-relaxed my-3">
                                {{ Str::words(strip_tags($project->latarBelakang->deskripsi), 50, '...') }}
                            </p>
                        @endif

                        <!-- Tombol -->
                        <a href="{{ route('detail-proyek', $project->slug) }}"
                            class="inline-flex items-center text-[#ca7305] font-semibold hover:underline">
                            Lihat Project <i class="fa-solid fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>

        {{-- Pagination start --}}
        <div class="mt-10 flex justify-center">
            {{ $program->links('components.pagination') }}
        </div>
        {{-- Pagination end --}}
    </section>
</x-main>
