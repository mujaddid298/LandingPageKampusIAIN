<div class="space-y-6">


<div class="flex flex-row m-10 gap-3">
    <input
        type="text"
        placeholder="Cari pengumuman Kip kuliah..."
        wire:model.live.debounce.300ms="search"
        class="px-4 py-2 border rounded-lg w-1/2"
    >
    <select
        wire:model.live="year"
        class="px-4 py-2 border rounded-lg w-1/4"
    >
        <option value="">Semua Tahun</option>
        @foreach ($years as $y)
            <option value="{{ $y }}">{{ $y }}</option>
        @endforeach
    </select>
</div>

    <div class="grid md:grid-cols-2 m-10 lg:grid-cols-3 gap-6">
        @forelse ($kip as $item)
            <div class="bg-white rounded-xl shadow-lg hover:shadow-xl transition overflow-hidden group">

                {{-- THUMBNAIL --}}
                <div class="h-40 bg-gray-200 overflow-hidden">
                    @if ($item->thumbnail)
                        <img
                            src="{{ asset('storage/' . $item->thumbnail) }}"
                            class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105">
                    @else
                        <img
                            src="https://via.placeholder.com/400x300?text=Kip"
                            class="w-full h-full object-cover">
                    @endif
                </div>

                {{-- CONTENT --}}
                <div class="p-6">
                    <h3 class="text-xl font-bold text-gray-900 mb-3 group-hover:text-[#12854A] transition">
                        {{ $item->title }}
                    </h3>

                    <p class="text-gray-600 text-sm mb-4 line-clamp-3">
                        {{ Str::limit(strip_tags($item->content), 120) }}
                    </p>

                    <div class="flex justify-between items-center border-t pt-4 text-sm">
                        <span class="text-gray-500">
                            {{ $item->created_at->translatedFormat('d M Y') }}
                        </span>

                        <a
                            href="{{ route('kip.show', $item->id) }}"
                            class="text-[#E7BB00] font-semibold hover:underline">
                            Lihat →
                        </a>
                    </div>
                </div>
            </div>
        @empty
            <div class="col-span-full text-center text-gray-500 py-10">
                Tidak ada pengumuman Kip Kuliah ditemukan.
            </div>
        @endforelse
    </div>

</div>
