@extends('layouts.app')

@section('title', $kip->title . ' | Kampus Melayu')

@section('content')
    <div class="max-w-4xl mx-auto px-4 mt-20 py-8">
        <div class="bg-white rounded-2xl shadow p-8">
            {{-- Judul --}}
            <h1 class="text-3xl font-bold text-gray-800 mb-4">
                {{ $kip->title }}
            </h1>

            {{-- Isi --}}
            <div class="prose max-w-none text-gray-700 mb-6">
                {!! nl2br(e($kip->content)) !!}
            </div>

            {{-- File PDF --}}
            @if ($kip->file_pdf)
                <div class="mt-6">
                    <h2 class="font-semibold text-gray-800 mb-2">Lampiran:</h2>

                    <iframe src="{{ asset('storage/' . $kip->file_pdf) }}#page=1&toolbar=0&navpanes=0"
                        class="
                        w-full
                        h-[240px] sm:h-[320px] md:h-[420px] lg:h-[520px]
                        rounded-xl border
                    ">
                    </iframe>

                    <a href="{{ asset('storage/' . $kip->file_pdf) }}" download
                        class="
                        inline-flex items-center gap-2
                        px-4 py-2 rounded-lg mt-3
                        bg-[#12854A] text-white
                        text-sm font-semibold
                        hover:bg-[#0f6b3c]
                        transition
                    ">
                        <!-- icon -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 4v12m0 0l-4-4m4 4l4-4M4 16v2a2 2 0 002 2h12a2 2 0 002-2v-2" />
                        </svg>
                        Download Document
                    </a>
                </div>
            @endif

            {{-- Tombol Kembali --}}
            <div class="mt-8">
                <a href="{{ url()->previous() }}" class="text-sm text-gray-600 hover:text-gray-900">
                    ← Kembali
                </a>
            </div>
        </div>
    </div>
@endsection
