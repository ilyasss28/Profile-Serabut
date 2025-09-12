<footer class="relative bg-cover bg-center text-white py-8"
    style="background-image:url('{{ asset('assets/img/bg-profile.jpg') }}')">

    <!-- Overlay -->
    <div class="absolute inset-0 backdrop-blur-sm bg-black/70"></div>

    <div class="relative max-w-8xl mx-auto px-6 sm:px-12">
        <!-- Bagian Atas -->
        <div
            class="flex flex-col md:flex-row justify-between mb-8 md:mb-0 gap-8 sm:gap-12 md:gap-16 lg:gap-24 xl:gap-48">
            <!-- Logo & Sosial Media -->
            <div class="flex flex-col items-center md:mb-0 w-full md:w-auto">
                <img src="{{ asset('assets/img/icon.png') }}" alt="Logo Organisasi" class="w-40 mb-4 relative z-10">
                <div class="flex justify-evenly">
                    <!-- Instagram -->
                    <a href="https://www.instagram.com/serabut____?igsh=MWE2eXA2d3hrM3Zlbw==" target="_blank"
                        class="transform transition-transform duration-300 hover:-translate-y-2">
                        <img class="mx-1 w-7" src="{{ asset('assets/img/instagram.png') }}" alt="instagram">
                    </a>
                </div>
            </div>

            <div class="w-full">
                <hr class="border-t-8 border-[#ca7305] mb-8 w-full rounded-full">
                <!-- Navigasi -->
                <div class="flex flex-col sm:flex-row justify-between items-start gap-8">
                    <div class="whitespace-nowrap">
                        <h4 class="text-lg font-semibold mb-2">Navigasi</h4>
                        <ul class="space-y-2">
                            <li><a href="/" class="hover:text-[#ca7305] transition">Beranda</a></li>
                            <li><a href="{{ route('profile') }}" class="hover:text-[#ca7305] transition">Profile</a></li>
                            <li><a href="{{ route('proyek') }}" class="hover:text-[#ca7305] transition">Program</a></li>
                            <li><a href="{{ route('publikasi') }}" class="hover:text-[#ca7305] transition">Publikasi</a></li>
                        </ul>
                    </div>

                    <div>
                        <h4 class="text-lg font-semibold mb-2">Kontak Kami</h4>
                        <p class="flex items-center gap-2">
                            <i class="fas fa-phone text-[#ca7305]"></i>
                            +62 812-8942-4001
                        </p>
                        <p class="flex items-center gap-2">
                            <i class="fas fa-envelope text-[#ca7305]"></i>
                            rabutse41@gmail.com
                        </p>
                    </div>

                    <!-- Kontak & Lokasi -->
                    <div>
                        <h4 class="text-lg font-semibold mb-2">Lokasi</h4>
                        <p><strong>Jl. Dayanu Ikhsanuddin Topaz Residence 1 Kel. Sulaa Kec.Betaombari Kota Baubau, Sulawesi Tenggara</strong></p>
                        <p class="text-sm text-gray-300 mt-1">Senin - Jumat: 08:00 - 17:00 WIB</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Copyright -->
        <div class="border-t border-white mt-6 pt-6 text-center relative z-10">
            <p class="text-sm text-gray-300">© 2025 — Serabut. All Rights Reserved.</p>
        </div>
    </div>
</footer>
