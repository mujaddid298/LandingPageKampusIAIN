<?php

use App\Models\Pengumuman;
use function Livewire\Volt\{state, computed};

state([
    'year' => now()->year, // default tahun sekarang
]);

$years = Pengumuman::selectRaw('YEAR(created_at) as year')
    ->distinct()
    ->orderByDesc('year')
    ->pluck('year');

$announcements = computed(fn () =>
    Pengumuman::whereYear('created_at', state('year'))
        ->latest()
        ->get()
);
?>

<div class="space-y-6">

    {{-- FILTER TAHUN --}}
    <div class="flex justify-center">
        <select
            wire:model="year"
            class="border rounded-lg px-4 py-2 text-center focus:ring focus:ring-green-200"
        >
            @foreach($years as $y)
                <option value="{{ $y }}">{{ $y }}</option>
            @endforeach
        </select>
    </div>

    {{-- GRID PENGUMUMAN --}}
    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
        @forelse($announcements as $item)
            <div class="bg-white p-4 rounded shadow">
                <h3 class="font-semibold">{{ $item->title }}</h3>
                <p class="text-sm text-gray-500">
                    {{ $item->created_at->format('d M Y') }}
                </p>
            </div>
        @empty
            <div class="col-span-full text-center text-gray-500">
                Tidak ada pengumuman di tahun ini
            </div>
        @endforelse
    </div>

</div>
