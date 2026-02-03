@props(['title', 'items'])

<div class="relative group">
    <button class="flex items-center gap-1 font-medium text-gray-700 hover:text-[#E7BB00]">
        {{ $title }}
        <svg class="w-4 h-4 mt-1 transition-transform group-hover:rotate-180"
            fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
        </svg>
    </button>

    <div
        class="absolute left-1/2 top-full mt-4 w-64 -translate-x-1/2
               bg-white rounded-xl shadow-xl border
               opacity-0 invisible translate-y-3 p-2
               group-hover:opacity-100 group-hover:visible group-hover:translate-y-0
               transition-all duration-300 z-50">

        @foreach($items as $item)
            <a href="{{ $item['url'] }}"
               class="block px-5 py-3 text-sm text-gray-700
                      hover:bg-yellow-50 hover:text-[#E7BB00]
                      rounded-lg transition">
                {{ $item['label'] }}
            </a>
        @endforeach
    </div>
</div>
