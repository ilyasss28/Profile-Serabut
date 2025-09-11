<x-main>
    {{-- Hero Section --}}
    <section class="relative h-[75vh] w-full overflow-hidden">
        <div class="absolute inset-0">
            <img src="{{ asset('assets/img/bg-profile.jpg') }}" alt="Profile Organisasi"
                class="w-full h-full object-cover">
            <div class="absolute inset-0 backdrop-blur-sm bg-black/70"></div>
        </div>

        <div class="relative z-10 flex flex-col items-center justify-center h-full text-center text-white px-6">
            <span class="text-sm font-semibold uppercase text-[#ca7305] tracking-widest mb-4 inline-block">Bantuan &
                Informasi</span>
            <h1 class="text-3xl lg:text-4xl font-extrabold leading-tight tracking-tight mb-4 animate-fade-in-up">
                Pertanyaan yang Sering Diajukan
            </h1>
            <p class="text-md lg:text-lg text-gray-300 mb-8 animate-fade-in-up delay-200">
                Temukan jawaban cepat untuk pertanyaan Anda seputar program, donasi, dan partisipasi di Sekolah Rakyat
                Butuni.
            </p>
        </div>
    </section>
    {{-- Hero Section --}}

    {{-- FAQ Content Section --}}
    <section class="py-12 bg-gray-50" x-data="{ activeTab: null, showAll: true }">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">

                {{-- Sidebar/Topics --}}
                <aside class="lg:col-span-1">
                    <div class="bg-white rounded-2xl shadow-lg p-6 sticky top-25">
                        <h3 class="text-2xl font-bold text-gray-800 mb-6">Topik FAQ 📚</h3>
                        <ul class="space-y-4">
                            @foreach ($categories as $cat)
                                <li>
                                    <button @click="activeTab = '{{ $cat->id }}'; showAll = false"
                                        :class="activeTab === '{{ $cat->id }}' && !showAll ?
                                            'bg-[#ca7305] text-white' :
                                            'text-gray-700 hover:bg-[#ca7305] hover:text-white'"
                                        class="w-full flex items-center gap-3 p-3 rounded-xl transition-all duration-300">
                                        <i class="fas fa-circle-info"
                                            :class="activeTab === '{{ $cat->id }}' && !showAll ?
                                                'text-white' :
                                                'text-[#ca7305]'"></i>
                                        <span class="font-medium">{{ $cat->nama }}</span>
                                    </button>
                                </li>
                            @endforeach

                            {{-- Tombol Lihat Semua --}}
                            <li>
                                <button @click="showAll = true; activeTab = null"
                                    :class="showAll
                                        ?
                                        'bg-[#ca7305] text-white' :
                                        'text-gray-700 hover:bg-[#ca7305] hover:text-white'"
                                    class="w-full flex items-center gap-3 p-3 rounded-xl transition-all duration-300">
                                    <i class="fas fa-eye" :class="showAll ? 'text-white' : 'text-[#ca7305]'"></i>
                                    <span class="font-medium">Lihat Semua Pertanyaan</span>
                                </button>
                            </li>
                        </ul>
                    </div>
                </aside>

                {{-- FAQ Content --}}
                <div class="lg:col-span-2 space-y-10">
                    @foreach ($categories as $cat)
                        <section x-show="activeTab === '{{ $cat->id }}' || showAll" x-transition>
                            <h2 class="text-2xl md:text-3xl font-bold text-gray-900 mb-6 flex items-center gap-2">
                                <i class="fa-solid fa-circle-info text-[#ca7305]"></i> {{ $cat->nama }}
                            </h2>
                            <div x-data="{ selected: null }" class="space-y-4">
                                @forelse ($cat->faqs as $faq)
                                    <div
                                        class="bg-white shadow rounded-2xl p-5 cursor-pointer transition-all duration-500 hover:shadow-lg hover:scale-[1.01]">
                                        <button
                                            @click="selected !== {{ $faq->id }} ? selected = {{ $faq->id }} : selected = null"
                                            class="w-full flex justify-between items-center text-left">
                                            <span class="font-semibold text-gray-800">{{ $faq->question }}</span>
                                            <i class="fa-solid fa-chevron-down transition-transform"
                                                :class="selected === {{ $faq->id }} ? 'rotate-180 text-[#ca7305]' :
                                                    'text-gray-500'"></i>
                                        </button>
                                        <div x-show="selected === {{ $faq->id }}" x-collapse>
                                            <p class="mt-3 text-gray-600 leading-relaxed">
                                                {{ $faq->answer }}
                                            </p>
                                        </div>
                                    </div>
                                @empty
                                    <p class="text-gray-500">Belum ada FAQ untuk kategori ini.</p>
                                @endforelse
                            </div>
                        </section>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    {{-- CTA Contact Section --}}
    <section class="py-16 sm:py-24 bg-white">
        <div class="container mx-auto px-6 text-center space-y-3">
            <h2 class="text-xl sm:text-3xl font-bold text-gray-800 mb-4">Tidak Menemukan Jawaban? 🤔</h2>
            <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                Jika Anda memiliki pertanyaan lain atau membutuhkan bantuan lebih lanjut, jangan ragu untuk menghubungi
                tim kami.
            </p>
            <div class="flex flex-wrap justify-center gap-4">
                <!-- Tombol WhatsApp -->
                <a href="https://wa.me/6281234567890" target="_blank"
                    class="flex items-center gap-2 px-6 py-3 bg-green-500 text-white text-lg font-semibold rounded-xl shadow-md hover:bg-green-600 transition-all duration-300">
                    <i class="fa-brands fa-whatsapp text-xl"></i>
                    WhatsApp
                </a>
            </div>
        </div>
    </section>
</x-main>
