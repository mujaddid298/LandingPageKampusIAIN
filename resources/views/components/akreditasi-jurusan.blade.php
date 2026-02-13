<div class="container mx-auto px-4 sm:px-6 lg:px-8  lg:py-16">

    {{-- HEADER --}}
    <header class="text-center mb-10">
        <h2 class="text-3xl md:text-4xl font-bold text-[#12854A] text-center mb-12">
            Akreditasi Program Studi Sarjana
            <span class="block w-20 h-1 bg-[#E7BB00] mx-auto mt-4 rounded-full"></span>
        </h2>
    </header>

    {{-- PILIH PRODI --}}
    <section>
        <div class="bg-white rounded-2xl shadow p-6 sm:p-8">
            <h2 class="text-xl sm:text-2xl font-semibold text-slate-800 mb-6">
                Pilih Program Studi Sarjana
            </h2>

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 sm:gap-6">
                @foreach ($prodi as $dept)
                    <div wire:key="dept-{{ $dept->id }}" wire:click="selectDepartment({{ $dept->id }})"
                        class="
                            cursor-pointer rounded-xl border
                            px-4 py-4 sm:px-6 sm:py-5
                            min-h-[80px]
                            flex items-center justify-center text-center
                            transition-all duration-200
                            {{ optional($selectedDept)->id === $dept->id
                                ? 'bg-[#12854A] text-white shadow-lg'
                                : 'bg-white border-slate-200 hover:border-slate-400 hover:shadow-md' }}
                        ">
                        <span class="text-base sm:text-md font-semibold">
                            {{ $dept->name }}
                        </span>
                    </div>
                @endforeach
            </div>
        </div>
    </section>


    <div
        class="mt-8 sm:mt-10 flex flex-col items-center justify-center
            rounded-2xl p-8 sm:p-12 text-center">
        <div wire:loading wire:target="selectDepartment"
            class="mt-8 sm:mt-10 p-8 sm:p-12 flex flex-col items-center justify-center">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 200">
                <circle fill="#12854A" stroke="#12854A" stroke-width="15" r="15" cx="40" cy="100">
                    <animate attributeName="opacity" calcMode="spline" dur="2" values="1;0;1;"
                        keySplines=".5 0 .5 1;.5 0 .5 1" repeatCount="indefinite" begin="-.4"></animate>
                </circle>
                <circle fill="#12854A" stroke="#12854A" stroke-width="15" r="15" cx="100" cy="100">
                    <animate attributeName="opacity" calcMode="spline" dur="2" values="1;0;1;"
                        keySplines=".5 0 .5 1;.5 0 .5 1" repeatCount="indefinite" begin="-.2"></animate>
                </circle>
                <circle fill="#12854A" stroke="#12854A" stroke-width="15" r="15" cx="160" cy="100">
                    <animate attributeName="opacity" calcMode="spline" dur="2" values="1;0;1;"
                        keySplines=".5 0 .5 1;.5 0 .5 1" repeatCount="indefinite" begin="0"></animate>
                </circle>
            </svg>

            <p class="text-slate-600 text-base sm:text-lg">
                Memuat data...
            </p>
        </div>

    </div>


    {{-- DETAIL PRODI --}}
    @if ($selectedDept)
        <section wire:loading.remove wire:target="selectDepartment"
            class="mt- sm:mt-10 bg-white rounded-2xl shadow p-6 sm:p-8">
            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4 mb-6">
                <h2 class="text-xl sm:text-2xl font-semibold text-slate-800">
                    Akreditasi {{ $selectedDept->name }}
                </h2>

            </div>

            @if ($selectedDept->file_pdf)
                <iframe src="{{ asset('storage/' . $selectedDept->file_pdf) }}#page=1&toolbar=0&navpanes=0"
                    class="
                        w-full
                        h-[240px] sm:h-[320px] md:h-[420px] lg:h-[520px]
                        rounded-xl border
                    ">
                </iframe>
            @else
                <div class="text-center py-20 text-slate-500">
                    File akreditasi belum tersedia
                </div>
            @endif

            @if ($selectedDept->file_pdf)
                <a
                    href="{{ asset('storage/' . $selectedDept->file_pdf) }}"
                    download
                    class="
                        inline-flex items-center gap-2
                        px-4 py-2 rounded-lg mt-3
                        bg-[#12854A] text-white
                        text-sm font-semibold
                        hover:bg-[#0f6b3c]
                        transition
                    ">
                    <!-- icon -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 4v12m0 0l-4-4m4 4l4-4M4 16v2a2 2 0 002 2h12a2 2 0 002-2v-2" />
                    </svg>
                    Download PDF
                </a>
            @endif
        </section>
    @else
        <div>
        </div>
    @endif

</div>
