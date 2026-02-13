<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kampus Melayu</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{-- 
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script defer src="https://unpkg.com/@alpinejs/intersect@3.x.x/dist/cdn.min.js"></script> --}}

    <style>
        [x-cloak] {
            display: none !important
        }

        html {
            scroll-behavior: smooth;
        }
    </style>

    <style>
        @keyframes title-pop {
            from {
                opacity: 0;
                transform: scale(0.92);
            }

            to {
                opacity: 1;
                transform: scale(1);
            }
        }

        .animate-title {
            opacity: 0;
        }

        .animate-title.show {
            animation: title-pop 0.9s ease-out forwards;
        }

        @keyframes fade-up {
            from {
                opacity: 0;
                transform: translateY(24px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate-item {
            opacity: 0;
        }

        .animate-item.show {
            animation: fade-up 0.8s ease-out forwards;
        }
    </style>
</head>

<body class="m-0 p-0 bg-white text-gray-800 overflow-x-hidden">

    <!-- ================= NAVBAR ================= -->

    <x-navbar />

    <!-- ================= SLIDESHOW ================= -->

    <x-slideshow :slideshow="$slideshow" />

    <!-- ================= SEJARAH ================= -->

    <x-sejarah />

    <!-- ================= PENGUMUMAN ================= -->

    <x-pengumuman :announcements="$announcements" />

    <!-- ================= KALENDER AKADEMIK ================= -->

    <x-kalender-akademik :file="$kalender->file" />


    <!-- ================= PENGELOLA PRODI ================= -->

    <section class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4">

            <h2 class="text-3xl md:text-4xl font-bold text-[#12854A] text-center mb-12">
                Pengelola Program Studi Sarjana
                <span class="block w-20 h-1 bg-[#E7BB00] mx-auto mt-4 rounded-full"></span>
            </h2>

            <!-- CARD GRID RESPONSIVE -->
            <div
                class="grid gap-6
            grid-cols-1
            sm:grid-cols-2
            md:grid-cols-3
            lg:grid-cols-4
            justify-items-center">

                @foreach ($peprodi as $item)
                    <x-peprodi name="{{ $item->name }}" prodi="{{ $item->prodis->pluck('name')->implode(', ') }}"
                        nowa="{{ $item->no_wa }}" image="{{ asset('storage/' . $item->image) }}" />
                @endforeach

            </div>

        </div>
    </section>



    <!-- ================= FOOTER ================= -->

    <x-footer />

</body>

</html>
