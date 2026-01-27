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
        <div class="max-w-7xl mx-auto px-4 h-full flex items-center justify-center md:justify-end">
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
                    <a href="#profil" class="text-gray-700 font-medium hover:text-[#E7BB00] transition">
                        Profil
                    </a>
                    <a href="{{ route('pengumuman') }}"
                        class="text-gray-700 font-medium hover:text-[#E7BB00] transition">
                        Pengumuman
                    </a>
                    <div class="relative group">
                        <a href="#"
                            class="flex items-center gap-1 text-gray-700 font-medium hover:text-[#E7BB00] transition">
                            Formulir
                            <svg class="w-4 h-4 mt-1" fill="none" stroke="currentColor" stroke-width="2"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                            </svg>
                        </a>

                        <!-- Dropdown -->
                        <div
                            class="absolute left-0 mt-2 w-52 bg-white rounded-xl shadow-lg
                            opacity-0 invisible group-hover:opacity-100 group-hover:visible
                            transition-all duration-200 z-50">

                            <a href="{{ route('pengumuman') }}"
                                class="block px-4 py-3 text-sm text-gray-700 hover:bg-gray-100 rounded-t-xl">
                                Surat Keterangan Aktif Kuliah
                            </a>

                            <a href="#" class="block px-4 py-3 text-sm text-gray-700 hover:bg-gray-100">
                                Surat Rekomendasi Penelitian Riset
                            </a>

                            <a href="#"
                                class="block px-4 py-3 text-sm text-gray-700 hover:bg-gray-100 rounded-b-xl">
                                Surat Keterangan Lulus
                            </a>
                        </div>
                    </div>
                    <a href="{{ route('pengumuman') }}"
                        class="text-gray-700 font-medium hover:text-[#E7BB00] transition">
                        Akreditasi
                    </a>
                    <a href="{{ route('pengumuman') }}"
                        class="text-gray-700 font-medium hover:text-[#E7BB00] transition">
                        KIP
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
        <div x-show="mobileOpen" x-transition @click.outside="mobileOpen = false"
            class="md:hidden bg-white shadow-lg border-t">
            <a href="{{ route('profil') }}" class="block px-6 py-4 text-gray-700 hover:bg-gray-100">
                Profil
            </a>
            <a href="{{ route('pengumuman') }}" class="block px-6 py-4 text-gray-700 hover:bg-gray-100">
                Pengumuman
            </a>
        </div>
    </nav>

    <!-- ================= SPACER (ANTI KETUTUP NAV) ================= -->
    <div class="h-32"></div>

</div>
