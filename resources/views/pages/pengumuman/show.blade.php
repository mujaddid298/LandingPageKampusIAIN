@extends('layouts.app')

@section('title', $pengumuman->title . ' | Kampus Melayu')

@section('content')
    <div class="max-w-4xl mx-auto px-4 mt-20 py-8">
        <div class="bg-white rounded-2xl shadow p-8">
            {{-- Judul --}}
            <h1 class="text-3xl font-bold text-gray-800 mb-4">
                {{ $pengumuman->title }}
            </h1>

            {{-- Isi --}}
            <div class="prose max-w-none text-gray-700 mb-6">
                {!! nl2br(e($pengumuman->content)) !!}
            </div>

            {{-- File PDF --}}
            @if ($pengumuman->file_pdf)
                <div class="mt-6">
                    <h2 class="font-semibold text-gray-800 mb-2">Lampiran:</h2>

                    <iframe src="{{ asset('storage/' . $pengumuman->file_pdf) }}#page=1&toolbar=0&navpanes=0&scrollbar=0"
                        class="w-full h-full md:h-full border-0 overflow-hidden" scrolling="no">
                    </iframe>
                    <a href="{{ asset('storage/' . $pengumuman->file_pdf) }}" target="_blank"
                        class="inline-flex items-center gap-2 px-4 py-2 rounded-lg bg-red-600 text-white hover:bg-red-700 transition">
                        Lihat / Unduh PDF
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
