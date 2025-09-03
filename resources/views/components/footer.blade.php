<footer class="relative bg-cover bg-center text-white py-8"
    style="background-image:url('{{ asset('assets/img/background.jpg') }}')">

    <!-- Overlay -->
    <div class="absolute inset-0 bg-black/60"></div>

    <div class="relative max-w-8xl mx-auto px-6 sm:px-12">
        <!-- Bagian Atas -->
        <div
            class="flex flex-col md:flex-row justify-between mb-8 md:mb-0 gap-8 sm:gap-12 md:gap-16 lg:gap-24 xl:gap-48">
            <!-- Logo & Sosial Media -->
            <div class="flex flex-col items-center md:mb-0 w-full md:w-auto">
                <img src="{{ asset('assets/img/icon.png') }}" alt="Logo Organisasi" class="w-40 mb-4 relative z-10">
                <div class="flex justify-evenly">
                    <!-- Youtube -->
                    <a href="#" target="_blank"
                        class="transform transition-transform duration-300 hover:-translate-y-2">
                        <img class="mx-1 w-7" src="{{ asset('assets/img/youtube.png') }}" alt="youtube">
                    </a>

                    <!-- Instagram -->
                    <a href="#" target="_blank"
                        class="transform transition-transform duration-300 hover:-translate-y-2">
                        <img class="mx-1 w-7" src="{{ asset('assets/img/instagram.png') }}" alt="instagram">
                    </a>

                    <!-- LinkedIn -->
                    <a href="#" target="_blank"
                        class="transform transition-transform duration-300 hover:-translate-y-2">
                        <img class="mx-1 w-7" src="{{ asset('assets/img/linkedin.png') }}" alt="linkedin">
                    </a>
                </div>
            </div>

            <div class="w-full">
                <hr class="border-t-8 border-[#ca7305] mb-8 w-full rounded-full">
                <!-- Navigasi -->
                <div class="flex flex-col sm:flex-row justify-between items-start gap-8">
                    <div class="whitespace-nowrap">
                        <h4 class="text-lg font-semibold mb-4">Navigasi</h4>
                        <ul class="space-y-2">
                            <li><a href="/" class="hover:text-[#ca7305] transition">Beranda</a></li>
                            <li><a href="/tentang" class="hover:text-[#ca7305] transition">Profile</a></li>
                            <li><a href="/proyek" class="hover:text-[#ca7305] transition">Proyek</a></li>
                            <li><a href="/cerita" class="hover:text-[#ca7305] transition">Cerita</a></li>
                            <li><a href="/publikasi" class="hover:text-[#ca7305] transition">Publikasi</a></li>
                        </ul>
                    </div>

                    <div>
                        <h4 class="text-lg font-semibold mb-2">Kontak Kami</h4>
                        <p class="flex items-center gap-2">
                            <i class="fas fa-phone text-[#ca7305]"></i>
                            +62 251 836-83-49
                        </p>
                        <p class="flex items-center gap-2">
                            <i class="fas fa-envelope text-[#ca7305]"></i>
                            sekretariat@serabut.or.id
                        </p>
                    </div>

                    <!-- Kontak & Lokasi -->
                    <div>
                        <h4 class="text-lg font-semibold mb-2">Lokasi</h4>
                        <p><strong>Pulau Buton, Sulawesi Tenggara</strong></p>
                        <p>Kabupaten Buton, Kabupaten Buton Selatan, dan Kota Baubau</p>
                        <p class="text-sm text-gray-300 mt-1">Senin - Jumat: 08:00 - 17:00 WIB</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Copyright -->
        <div class="border-t border-white mt-6 pt-6 text-center relative z-10">
            <p class="text-sm text-gray-300">© 2024 — Serabut. All Rights Reserved.</p>
        </div>
    </div>
</footer>
