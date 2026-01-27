<div class="bg-white rounded-2xl shadow-md overflow-hidden w-full max-w-xs text-center">
    <div class="bg-gray-100 pt-6">
        <img
            src="{{ $image }}"
            alt="{{ $name }}"
            class="w-32 h-40 object-cover mx-auto rounded-md"
        >
    </div>

    <div class="p-6">
        <h3 class="text-lg font-semibold text-gray-800">
            {{ $name }}
        </h3>
        <p class="text-sm text-gray-500 mb-4">
            {{ $prodi }}
        </p>

        @if($nowa)
            <a
                href="https://wa.me/{{ $nowa }}"
                target="_blank"
                class="inline-block bg-[#12854A] hover:bg-[#12854A] text-white text-sm font-medium px-6 py-2 rounded-full transition"
            >
                Hubungi via WhatsApp
            </a>
        @endif
    </div>
</div>