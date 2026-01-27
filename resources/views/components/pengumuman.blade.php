@php
    use Illuminate\Support\Str;

    // ambil pengumuman terbaru & lainnya
    $latest = $announcements->sortByDesc('created_at')->first();
    $others = $announcements->sortByDesc('created_at')->skip(1);
@endphp

<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto">


        {{-- HEADER --}}
        <h2 class="text-3xl md:text-4xl font-bold text-[#12854A] text-center mb-12">
            Pengumuman
            <span class="block w-20 h-1 bg-[#E7BB00] mx-auto mt-4 rounded-full"></span>
        </h2>

        {{-- FEATURED TERBARU --}}
        @if ($latest)
            <div class="mb-12">
                <div class="rounded-2xl bg-[#12854A] shadow-lg grid md:grid-cols-2 overflow-hidden">

                    {{-- THUMBNAIL --}}
                    <div class="relative aspect-[16/10] overflow-hidden bg-gray-200">
                        @if ($latest->thumbnail)
                            <img src="{{ asset('storage/' . $latest->thumbnail) }}" class="w-full h-full object-cover">
                        @else
                            <img src="https://via.placeholder.com/800x600?text=Pengumuman"
                                class="w-full h-full object-cover">
                        @endif

                        <span
                            class="absolute top-4 left-4 px-4 py-2 rounded-full bg-[#E7BB00] text-white font-bold text-sm">
                            TERBARU
                        </span>
                    </div>

                    {{-- CONTENT --}}
                    <div class="p-8 lg:p-12 text-white">
                        <span class="text-[#E7BB00] font-bold text-sm mb-3 block">
                            🔥 Pengumuman Terbaru
                        </span>
                        <h3 class="text-3xl font-bold mb-4">
                            {{ $latest->title }}
                        </h3>
                        <p class="mb-6 opacity-90 line-clamp-4">
                            {{ Str::limit(strip_tags($latest->content), 200) }}
                        </p>



                        <div class="flex gap-6 text-sm mb-6">
                            <span>📅 {{ $latest->created_at->translatedFormat('d M Y') }}</span>
                        </div>

                        <a href="{{ route('pengumuman.show', $latest->id) }}"
                            class="inline-flex items-center gap-2 px-6 py-3 bg-[#E7BB00] rounded-xl font-semibold text-gray-900">
                            Baca Selengkapnya →
                        </a>
                    </div>
                </div>
            </div>
        @endif

        {{-- LIST PENGUMUMAN --}}
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($others as $item)
                <div class="bg-white rounded-xl shadow-lg hover:shadow-xl transition overflow-hidden">

                    {{-- THUMBNAIL --}}
                    <div class="h-40 bg-gray-200">
                        @if ($item->thumbnail)
                            <img src="{{ asset('storage/' . $item->thumbnail) }}" class="w-full h-full object-cover">
                        @else
                            <img src="https://via.placeholder.com/400x300?text=Pengumuman"
                                class="w-full h-full object-cover">
                        @endif
                    </div>

                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-900 mb-3 hover:text-[#12854A]">
                            {{ $item->title }}
                        </h3>

                        <p class="text-gray-600 text-sm mb-4 line-clamp-3">
                            {{ Str::limit(strip_tags($item->content), 120) }}
                        </p>
                        <div class="flex justify-between items-center border-t pt-4 text-sm">
                            <span class="text-gray-500">
                                {{ $item->created_at->translatedFormat('d M Y') }}
                            </span>

                            <a href="{{ route('pengumuman.show', $item->id) }}" class="text-[#E7BB00] font-semibold">
                                Lihat →
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        {{-- CTA --}}
        <div class="mt-12 text-center">
            <a href="#"
               class="inline-flex mt-10 items-center gap-2 px-10 py-4 bg-[#12854A] text-white font-bold rounded-3xl shadow-lg hover:-translate-y-0.5 hover:shadow-2xl transition">
                Lihat Semua Pengumuman
            </a>
        </div>

    </div>
</section>
