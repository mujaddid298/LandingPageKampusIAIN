<div x-data="{
    lastScroll: 0,
    hideTopNav: false,
    mobileOpen: false
}" x-init="window.addEventListener('scroll', () => {
    let currentScroll = window.pageYOffset

    if (currentScroll > lastScroll && currentScroll > 100) {
        hideTopNav = true
    } else {
        hideTopNav = false
    }

    lastScroll = currentScroll
})">

    <!-- ================= NAV 1 (HIJAU - SEARCH) ================= -->
    <nav class="bg-[#12854A] shadow-lg fixed w-full h-14 z-50 top-0 transition-transform duration-300"
        :class="hideTopNav ? '-translate-y-full' : 'translate-y-0'">
        <div class="max-w-7xl mx-auto px-4 h-full flex items-center justify-between">

            <!-- TANGGAL -->
            <div class="hidden md:block ms-2 text-white text-sm font-medium">
                {{ \Carbon\Carbon::now()->translatedFormat('d F Y') }}
            </div>
            <!-- SEARCH -->
            <div class="relative bg-white rounded-2xl w-full md:w-64">
                <input type="text" placeholder="Cari..."
                    class="w-full pl-10 pr-4 py-2 rounded-full text-sm
                focus:outline-none focus:ring-2 focus:ring-[#E7BB00]" />
                <svg class="w-5 h-5 text-[#E7BB00] absolute left-3 top-1/2 -translate-y-1/2" fill="none"
                    stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M21 21l-4.35-4.35M10 18a8 8 0 100-16 8 8 0 000 16z" />
                </svg>
            </div>



        </div>
    </nav>


    <!-- ================= NAV 2 (PUTIH - MENU) ================= -->
    <nav class="bg-white shadow-lg fixed w-full z-40 transition-all duration-300"
        :class="hideTopNav ? 'top-0 h-20' : 'top-14 h-20'">
        <div class="max-w-7xl mx-auto px-4 h-full">
            <div class="flex justify-between items-center h-full">

                <!-- Logo -->
                <a href="/" class="flex items-center">
                    <img src="{{ asset('icons/logo.png') }}" alt="Logo" class="h-14">
                </a>

                <!-- Desktop Menu -->
                <div class="hidden md:flex items-center space-x-6">
                    <a href="{{ route('beranda') }}" @class([
                        'relative font-medium transition',
                        'text-[#E7BB00]' => request()->is('/'),
                        'text-gray-700 hover:text-[#E7BB00]' => !request()->is('/'),
                        'after:absolute after:left-1/2 after:-bottom-1
                                                                                                                                                                         after:h-[2px] after:w-0 after:bg-gradient-to-r after:from-[#E7BB00] after:to-yellow-400
                                                                                                                                                                         after:transition-all after:duration-300 after:-translate-x-1/2
                                                                                                                                                                         hover:after:w-full',
                    ])>
                        Beranda
                    </a>


                    <a href="#profil"
                        class="relative font-medium text-gray-700 transition hover:text-[#E7BB00]
                            after:absolute after:left-1/2 after:-bottom-1
                            after:h-[2px] after:w-0 after:bg-gradient-to-r after:from-[#E7BB00] after:to-yellow-400
                            after:transition-all after:duration-300 after:-translate-x-1/2
                            hover:after:w-full">
                        Profil
                    </a>

                    <a href="{{ route('pengumuman') }}" @class([
                        'relative font-medium transition',
                        'text-[#E7BB00]' => request()->is('pengumuman'),
                        'text-gray-700 hover:text-[#E7BB00]' => !request()->is('pengumuman'),
                        'after:absolute after:left-1/2 after:-bottom-1
                                                                                                                            after:h-[2px] after:w-0 after:bg-gradient-to-r after:from-[#E7BB00] after:to-yellow-400
                                                                                                                            after:transition-all after:duration-300 after:-translate-x-1/2
                                                                                                                            hover:after:w-full',
                    ])>
                        Pengumuman
                    </a>

                    <a href="{{ route('akreditasi') }}" @class([
                        'relative font-medium transition',
                        'text-[#E7BB00]' => request()->is('akreditasi'),
                        'text-gray-700 hover:text-[#E7BB00]' => !request()->is('akreditasi'),
                        'after:absolute after:left-1/2 after:-bottom-1 after:h-[2px] after:w-0 after:bg-gradient-to-r after:from-[#E7BB00] after:to-yellow-400 after:transition-all after:duration-300 after:-translate-x-1/2 hover:after:w-full',
                    ])>
                        Akreditasi
                    </a>


                    {{-- <x-navbar.mega-dropdown title="Akreditasi" :menus="[
                        [
                            ['label' => 'Beasiswa', 'url' => '#'],
                            ['label' => 'UKM & Ormawa', 'url' => '#'],
                            ['label' => 'Prestasi', 'url' => '#'],
                        ],
                        [
                            ['label' => 'Pengabdian', 'url' => '#'],
                            ['label' => 'Kegiatan Sosial', 'url' => '#'],
                            ['label' => 'Donasi', 'url' => '#'],
                        ],
                        [
                            ['label' => 'Berita', 'url' => '#'],
                            ['label' => 'Agenda', 'url' => '#'],
                            ['label' => 'Dokumentasi', 'url' => '#'],
                        ],
                    ]" /> --}}


                    <div class="relative group">
                        <a href="#"
                            class="relative flex items-center gap-1 font-medium text-gray-700 transition hover:text-[#E7BB00]
            after:absolute after:left-1/2 after:-bottom-1
            after:h-[2px] after:w-0 after:bg-gradient-to-r after:from-[#E7BB00] after:to-yellow-400
            after:transition-all after:duration-300 after:-translate-x-1/2
            group-hover:after:w-full">
                            Formulir

                            <svg class="w-4 h-4 mt-1 transition-transform duration-300 group-hover:rotate-180"
                                fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                            </svg>
                        </a>

                        <!-- Dropdown -->
                        <div
                            class="absolute left-1/2 top-full mt-2 w-80 -translate-x-1/2
                bg-white rounded-xl shadow-xl
                opacity-0 invisible translate-y-3 p-2
                group-hover:opacity-100 group-hover:visible group-hover:translate-y-0
                transition-all duration-300 ease-out z-50">

                            <a href="{{ route('formulir.aktifkuliah') }}"
                                class="flex items-center gap-3 px-4 py-3 text-sm text-gray-700 hover:bg-yellow-50 hover:text-[#E7BB00] rounded-lg transition group/item">
                                <span
                                    class="flex items-center justify-center w-8 h-8 rounded-lg bg-yellow-50 text-yellow-500 group-hover/item:bg-yellow-100 transition">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                                    </svg>
                                </span>
                                <span>Surat Keterangan Aktif Kuliah</span>
                            </a>

                            <a href="{{ route('formulir.formpenelitian') }}"
                                class="flex items-center gap-3 px-4 py-3 text-sm text-gray-700 hover:bg-yellow-50 hover:text-[#E7BB00] rounded-lg transition group/item">
                                <span
                                    class="flex items-center justify-center w-8 h-8 rounded-lg bg-yellow-50 text-yellow-500 group-hover/item:bg-yellow-100 transition">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4" />
                                    </svg>
                                </span>
                                <span>Surat Rekomendasi Penelitian</span>
                            </a>

                            <a href="{{ route('formulir.ketlulus') }}"
                                class="flex items-center gap-3 px-4 py-3 text-sm text-gray-700 hover:bg-yellow-50 hover:text-[#E7BB00] rounded-lg transition group/item">
                                <span
                                    class="flex items-center justify-center w-8 h-8 rounded-lg bg-yellow-50 text-yellow-500 group-hover/item:bg-yellow-100 transition">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                </span>
                                <span>Surat Keterangan Lulus</span>
                            </a>
                        </div>
                    </div>


                    {{-- <a href="#"
                        class="relative font-medium text-gray-700 transition hover:text-[#E7BB00]
                            after:absolute after:left-1/2 after:-bottom-1
                            after:h-[2px] after:w-0 after:bg-gradient-to-r after:from-[#E7BB00] after:to-yellow-400
                            after:transition-all after:duration-300 after:-translate-x-1/2
                            hover:after:w-full"
                        {{ request()->routeIs('pengumuman') ? 'text-[#E7BB00]' : 'text-gray-700 hover:text-[#E7BB00]' }}">
                        Akreditasi
                    </a> --}}
                    <a href="{{ route('page.kip') }}" @class([
                        'relative font-medium transition',
                        'text-[#E7BB00]' => request()->routeIs('page.kip'),
                        'text-gray-700 hover:text-[#E7BB00]' => !request()->routeIs('page.kip'),
                        'after:absolute after:left-1/2 after:-bottom-1 after:h-[2px] after:w-0 after:bg-gradient-to-r after:from-[#E7BB00] after:to-yellow-400 after:transition-all after:duration-300 after:-translate-x-1/2 hover:after:w-full',
                    ])>
                        Kip Kuliah
                    </a>

                </div>

                <!-- Mobile Hamburger -->
                <button @click="mobileOpen = !mobileOpen" class="md:hidden text-gray-700 focus:outline-none">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>

            </div>
        </div>

        <!-- ================= MOBILE MENU ================= -->
        <div x-show="mobileOpen" x-transition @click.outside="mobileOpen = false" class="md:hidden bg-white shadow-lg">

            <!-- BERANDA -->
            <a href="{{ route('beranda') }}" @class([
                'block px-6 py-4 font-medium transition',
                'text-[#E7BB00] bg-yellow-50' => request()->routeIs('beranda'),
                'text-gray-700 hover:bg-gray-100' => !request()->routeIs('beranda'),
            ])>
                Beranda
            </a>

            <!-- PROFIL -->
            <a href="#profil" class="block px-6 py-4 font-medium text-gray-700 hover:bg-gray-100 transition">
                Profil
            </a>

            <!-- PENGUMUMAN -->
            <a href="{{ route('pengumuman') }}" @class([
                'block px-6 py-4 font-medium transition',
                'text-[#E7BB00] bg-yellow-50' => request()->routeIs('pengumuman'),
                'text-gray-700 hover:bg-gray-100' => !request()->routeIs('pengumuman'),
            ])>
                Pengumuman
            </a>

            <!-- AKREDITASI -->
            <a href="{{ route('akreditasi') }}" @class([
                'block px-6 py-4 font-medium transition',
                'text-[#E7BB00] bg-yellow-50' => request()->routeIs('akreditasi'),
                'text-gray-700 hover:bg-gray-100' => !request()->routeIs('akreditasi'),
            ])>
                Akreditasi
            </a>

            <!-- FORMULIR -->
            <div x-data="{
                open: {{ request()->routeIs('formulir.*') ? 'true' : 'false' }}
            }">

                <button @click="open = !open" class="block w-full px-6 py-4 font-medium transition text-left"
                    :class="open ? 'text-[#E7BB00] bg-yellow-50' : 'text-gray-700 hover:bg-gray-100'">

                    <div class="flex justify-between items-center">
                        <a>Formulir</a>

                        <svg class="w-4 h-4 transition-transform duration-300" :class="open ? 'rotate-180' : ''"
                            fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                        </svg>
                    </div>
                </button>

                <!-- SUB MENU -->
                <div x-show="open" x-transition class="bg-gray-50">

                    <a href="{{ route('formulir.aktifkuliah') }}"
                        class="block px-10 py-3 text-sm text-gray-700 hover:bg-gray-100 transition">
                        Surat Keterangan Aktif Kuliah
                    </a>

                    <a href="{{ route('formulir.formpenelitian') }}"
                        class="block px-10 py-3 text-sm text-gray-700 hover:bg-gray-100 transition">
                        Surat Rekomendasi Penelitian
                    </a>

                    <a href="{{ route('formulir.ketlulus') }}"
                        class="block px-10 py-3 text-sm text-gray-700 hover:bg-gray-100 transition">
                        Surat Keterangan Lulus
                    </a>

                </div>
            </div>

            <!-- KIP -->
            <a href="{{ route('page.kip') }}" @class([
                'block px-6 py-4 font-medium transition',
                'text-[#E7BB00] bg-yellow-50' => request()->routeIs('page.kip'),
                'text-gray-700 hover:bg-gray-100' => !request()->routeIs('page.kip'),
            ])>
                KIP Kuliah
            </a>

        </div>


    </nav>

    <div class="h-32"></div>

</div>
