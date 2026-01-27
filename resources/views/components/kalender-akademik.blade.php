<div>
    <!-- When there is no desire, all things are at peace. - Laozi -->
</div>

<section class="py-20 bg-[#12854A]">
    <div class="max-w-7xl mx-auto">

        {{-- JUDUL --}}
        <h2 class="text-3xl md:text-4xl font-bold text-white  text-center mb-12">
            Kalender Akademik
            <span class="block w-20 h-1 bg-[#E7BB00] mx-auto mt-4 rounded-full"></span>
        </h2>

        <div class=" max-w-4xl mx-auto   m-3 text-center">

            <!-- PDF Preview -->
            <div class="relative bg-gray-300 rounded-lg overflow-hidden shadow-md">
                <iframe src="{{ asset('storage/' . $file) }}#page=1&toolbar=0&navpanes=0&scrollbar=0"
                    class="w-full h-[300px] md:h-[500px] border-0 overflow-hidden" scrolling="no">
                </iframe>

                <!-- Overlay label -->
                <div
                    class="absolute inset-0 flex items-center bg-gray-300 opacity-30 justify-center pointer-events-none">
                    <span class="text-4xl font-semibold text-black opacity-70">
                        Kalender Akademik <br> {{ $campus }}
                    </span>
                </div>
            </div>


            @if ($file)
                <a href="{{ asset('storage/' . $file) }}" target="_blank"

                    class="inline-flex mt-10 items-center gap-2 px-10 py-4 bg-white text-[#12854A] font-bold rounded-3xl shadow-lg hover:-translate-y-0.5 hover:shadow-2xl transition">
                    Download Kalender (PDF)
                </a>
            @endif
        </div>

    </div>
    </div>
</section>
