<x-main>
    {{-- Hero Section --}}
    <section class="relative h-[75vh] w-full overflow-hidden">
        <div class="absolute inset-0">
            <img src="{{ asset('assets/img/bg-profile.jpg') }}" alt="Profile Organisasi"
                class="w-full h-full object-cover">
            <div class="absolute inset-0 backdrop-blur-sm bg-black/70"></div>
        </div>

        <div class="relative z-10 flex flex-col items-center justify-center h-full text-center text-white px-6">
            <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-bold mb-4 leading-tight">
                Wilayah Kerja Serabut
            </h1>
            <p class="text-base sm:text-lg md:text-xl max-w-3xl mx-auto">
                Mengenal lebih dekat sejarah, visi, misi, dan struktur organisasi kami.
            </p>
        </div>
    </section>
    {{-- Hero Section --}}

    {{-- Wilayah Kerja Section --}}
    <section class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-2xl md:text-3xl font-bold text-gray-800">Daftar Desa Dampingan</h2>
                <p class="mt-2 text-gray-600">Informasi jumlah petani terlibat dan tahun pelaksanaan</p>
            </div>

            {{-- Grid Card --}}
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">

                {{-- Card 1 --}}
                <div class="bg-white rounded-2xl shadow-md hover:shadow-xl transition transform hover:-translate-y-1">
                    <div class="p-6">
                        <h3 class="text-lg font-bold text-[#ca7305] mb-2">Desa Bahari</h3>
                        <p class="text-sm text-gray-600 mb-4">Kabupaten Buton - Sulawesi Tenggara</p>
                        <div class="flex items-center justify-between border-t pt-4">
                            <div class="text-center">
                                <p class="text-2xl font-extrabold text-gray-800">120</p>
                                <p class="text-sm text-gray-600">Petani</p>
                            </div>
                            <div class="text-center">
                                <p class="text-2xl font-extrabold text-gray-800">2022</p>
                                <p class="text-sm text-gray-600">Tahun</p>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Card 2 --}}
                <div class="bg-white rounded-2xl shadow-md hover:shadow-xl transition transform hover:-translate-y-1">
                    <div class="p-6">
                        <h3 class="text-lg font-bold text-[#ca7305] mb-2">Desa Lowu-Lowu</h3>
                        <p class="text-sm text-gray-600 mb-4">Kota Baubau - Sulawesi Tenggara</p>
                        <div class="flex items-center justify-between border-t pt-4">
                            <div class="text-center">
                                <p class="text-2xl font-extrabold text-gray-800">85</p>
                                <p class="text-sm text-gray-600">Petani</p>
                            </div>
                            <div class="text-center">
                                <p class="text-2xl font-extrabold text-gray-800">2023</p>
                                <p class="text-sm text-gray-600">Tahun</p>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Card 3 --}}
                <div class="bg-white rounded-2xl shadow-md hover:shadow-xl transition transform hover:-translate-y-1">
                    <div class="p-6">
                        <h3 class="text-lg font-bold text-[#ca7305] mb-2">Desa Lapandewa</h3>
                        <p class="text-sm text-gray-600 mb-4">Kabupaten Buton Selatan - Sulawesi Tenggara</p>
                        <div class="flex items-center justify-between border-t pt-4">
                            <div class="text-center">
                                <p class="text-2xl font-extrabold text-gray-800">64</p>
                                <p class="text-sm text-gray-600">Petani</p>
                            </div>
                            <div class="text-center">
                                <p class="text-2xl font-extrabold text-gray-800">2021</p>
                                <p class="text-sm text-gray-600">Tahun</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    {{-- Wilayah Kerja Section --}}
</x-main>
