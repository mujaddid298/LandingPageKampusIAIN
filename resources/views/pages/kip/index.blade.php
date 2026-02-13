@extends('layouts.app')

@section('title', 'Kip Kuliah | Kampus Melayu')

@section('content')


    <header class="text-center mb-10">
        <h2 class="text-3xl mt-6 md:text-4xl font-bold text-[#12854A] text-center mb-12">
            Kip Kuliah
            <span class="block w-20 h-1 bg-[#E7BB00] mx-auto mt-4 rounded-full"></span>
        </h2>
    </header>
    <livewire:kip-filter />

@endsection
