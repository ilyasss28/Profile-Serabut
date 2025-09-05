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
                Wilayah Kerja Serabut
            </h1>
            <p class="text-base sm:text-md md:text-lg max-w-3xl mx-auto">
                Mengenal lebih dekat wilayah intervensi kerja, desa dampingan, serta partisipasi masyarakat dalam
                program Serabut.
            </p>
        </div>
    </section>
    {{-- Hero Section --}}

    {{-- Wilayah Kerja Section --}}
    <section class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-12 items-start">
                {{-- Peta --}}
                <div class="relative">
                    <img src="{{ asset('assets/img/Peta-Wilayah-Kerja.png') }}" alt="Peta Wilayah Kerja"
                        class="rounded-xl shadow-lg border border-gray-200">
                    <p class="text-xs text-gray-500 mt-2 text-center italic">
                        Peta wilayah intervensi kerja Sekolah Rakyat Butuni (Serabut)
                    </p>
                </div>

                {{-- Deskripsi --}}
                <div>
                    <h2 class="text-2xl md:text-3xl font-bold text-gray-800 mb-4">Desa Dampingan</h2>
                    <p class="text-gray-600 mb-6">
                        Program ini melibatkan berbagai desa di Kabupaten Buton dan sekitarnya, dengan fokus pada
                        pemberdayaan petani, konservasi lingkungan, dan pembangunan berkelanjutan.
                    </p>

                    {{-- List Desa --}}
                    <ul class="space-y-4">
                        <li
                            class="flex items-center justify-between p-4 bg-white rounded-lg shadow hover:shadow-md transition">
                            <span class="font-medium text-gray-800">Sumber Sari</span>
                            <span class="text-sm text-gray-600">159 Petani • 2023</span>
                        </li>
                        <li
                            class="flex items-center justify-between p-4 bg-white rounded-lg shadow hover:shadow-md transition">
                            <span class="font-medium text-gray-800">Labuandiri</span>
                            <span class="text-sm text-gray-600">28 Petani • 2022</span>
                        </li>
                        <li
                            class="flex items-center justify-between p-4 bg-white rounded-lg shadow hover:shadow-md transition">
                            <span class="font-medium text-gray-800">Wajah Jaya</span>
                            <span class="text-sm text-gray-600">28 Petani • 2022</span>
                        </li>
                        <li
                            class="flex items-center justify-between p-4 bg-white rounded-lg shadow hover:shadow-md transition">
                            <span class="font-medium text-gray-800">Sumber Agung</span>
                            <span class="text-sm text-gray-600">10 Petani • 2021</span>
                        </li>
                        <li
                            class="flex items-center justify-between p-4 bg-white rounded-lg shadow hover:shadow-md transition">
                            <span class="font-medium text-gray-800">Siotapina</span>
                            <span class="text-sm text-gray-600">19 Petani • 2021</span>
                        </li>
                        <li
                            class="flex items-center justify-between p-4 bg-white rounded-lg shadow hover:shadow-md transition">
                            <span class="font-medium text-gray-800">Siomanuru</span>
                            <span class="text-sm text-gray-600">9 Petani • 2020</span>
                        </li>
                        <li
                            class="flex items-center justify-between p-4 bg-white rounded-lg shadow hover:shadow-md transition">
                            <span class="font-medium text-gray-800">Rejo Sari</span>
                            <span class="text-sm text-gray-600">4 Petani • 2020</span>
                        </li>
                        <li
                            class="flex items-center justify-between p-4 bg-white rounded-lg shadow hover:shadow-md transition">
                            <span class="font-medium text-gray-800">Barangka</span>
                            <span class="text-sm text-gray-600">4 Petani • 2020</span>
                        </li>
                        <li
                            class="flex items-center justify-between p-4 bg-white rounded-lg shadow hover:shadow-md transition">
                            <span class="font-medium text-gray-800">Karya Jaya</span>
                            <span class="text-sm text-gray-600">4 Petani • 2020</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    {{-- Wilayah Kerja Section --}}
</x-main>
