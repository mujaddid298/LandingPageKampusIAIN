@extends('layouts.app')

@section('title', 'Pengumuman | Kampus Melayu')

@section('content')


    <div class="py-10 px-5 bg-white ">
        <div class="max-w-6xl mx-auto">

            <h2 class="text-3xl md:text-4xl font-bold text-[#12854A] text-center mb-12">
                Timelines KIP Kuliah
                <span class="block w-20 h-1 bg-[#E7BB00] mx-auto mt-4 rounded-full"></span>
            </h2>


            <div class="relative max-w-4xl mx-auto px-5">
                {{-- garis tengah --}}
                <div
                    class="absolute font-['DM_Sans'] top-0 left-1/2 -translate-x-1/2 w-[3px] h-full bg-gradient-to-b from-[#1a4d2e] to-[#4f772d] opacity-30 hidden md:block">
                </div>

                @foreach ($timelines as $index => $item)
                    @php
                        $isLeft = $index % 2 == 0;
                    @endphp

                    <div class="flex items-center gap-8 mb-12 opacity-0 animate-[fadeIn_0.6s_ease-out_forwards]"
                        style="animation-delay: {{ ($index + 1) * 0.2 }}s">

                        {{-- tanggal --}}
                        <div
                            class="flex-1 font-bold text-lg text-[#1a4d2e] hidden md:block
                            {{ $isLeft ? 'order-1 text-right' : 'order-3 text-left' }}">
                            @if ($item->tanggal_selesai)
                                {{ $item->tanggal_mulai->translatedFormat('j F') }} -
                                {{ $item->tanggal_selesai->translatedFormat('j F') }}
                            @else
                                {{ $item->tanggal_mulai->translatedFormat('j F Y') }}
                            @endif
                        </div>

                        {{-- dot --}}
                        <div
                            class="order-2 w-5 h-5 rounded-full bg-[#f4a259] border-4 border-white
                                shadow-[0_0_0_3px_#4f772d] z-10 flex-shrink-0">
                        </div>

                        {{-- konten --}}
                        <div
                            class="flex-1 bg-white p-6 rounded-2xl
                                    shadow-[0_5px_20px_rgba(0,0,0,0.08)]
                                    transition-all duration-300 hover:-translate-y-1
                                    hover:shadow-[0_10px_30px_rgba(0,0,0,0.12)]
                                    {{ $isLeft ? 'order-3' : 'order-1' }}">
                            <h4 class="text-[#1a4d2e] font-semibold text-lg mb-2">
                                {{ $item->judul }}
                            </h4>
                            <p class="text-gray-600 text-sm leading-relaxed break-words overflow-wrap-anywhere">
                                {{ $item->deskripsi }}
                            </p>

                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    {{-- animasi --}}
    <style>
        @keyframes fadeIn {
            to {
                opacity: 1;
            }
        }
    </style>


@endsection
